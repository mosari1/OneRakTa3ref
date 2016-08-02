@extends('body')
@section('content')



    <div class="col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Liste des Fournisseurs </h2>
                <ul class="nav navbar-right panel_toolbox">
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
               <div class="row">
                   <div class="col-sm-12">
                       <div class="form-group col-sm-6">
                           <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="fa fa-hashtag"></i>
                                    </span>
                               <input type="text" class="form-control" name="nom" placeholder="Numero" value="">
                           </div>
                       </div>
                       <div class="form-group col-sm-6">
                           <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="fa fa-hashtag"></i>
                                    </span>
                               <input type="text" class="form-control" name="nom" placeholder="Code" value="">
                           </div>
                       </div>
                   </div>
               </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group col-sm-6">
                            <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="fa fa-hashtag"></i>
                                    </span>
                                <select  class="form-control" name="nom" >
                                    <option>Fournisseur</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="fa fa-hashtag"></i>
                                    </span>
                                <input type="date" class="form-control" name="nom" placeholder="Numero" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">

                        <input type="text" class="form-control input-sm "
                                placeholder="Code Barre" id="codebarre" >
                        {!! Form::open(['url' => 'Achat']) !!}
                        <table class="table" id="maintable">
                            <thead>
                               <tr>
                                   {{--<th></th>--}}
                                   <th></th>
                                   <th></th>
                                   <th>Article</th>
                                   <th>Quantité</th>
                                   <th>Prix HT</th>
                                   <th>Total HT</th>
                                   <th>TVA %</th>
                                   <th>Total TTC</th>
                               </tr>
                            </thead>
                            <tbody id="tbody">
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="6"></th>
                                    <td ><strong>Total HT :</strong></td>
                                    <td><span id="total-ht" class="total-ht">00000.00</span></td>
                                </tr>
                                <tr>
                                    <th colspan="6"></th>
                                    <td ><strong>Total TTC :</strong></td>
                                    <td><span id="total-ttc" class="total-ttc">  00000.00</span></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <input type="submit" class="btn btn-flat btn-success pull-right" value="Valider">
                        <input type="reset" class="btn btn-flat btn-warning pull-right" value="Annuler">
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#codebarre').keydown(function (event) {
            if(event.which == 13){
            @foreach($produits as $produit)
                if (this.value == '{{$produit->code_barre}}' ){
                $(maintable).find(tbody).append(' <tr id="trtaa3h">' +
                        '<td><input name="id[]" value="{{$produit->id}}" hidden></td><td id="tdta3ah"><button name="btn" class="delete btn btn-dafault btn-sm" value="Delete""><span class="glyphicon glyphicon-remove"></span></button></td><td><input class="form-control input-sm" value="{{$produit->code_barre}}"></td> <td class="cart-product-quantity "><div class="input-group"> <span class="input-group-btn"><input type="text" id="quantity" name="quantite[]" value="0" class="qty form-control input-sm"/><a name="btn" class="minus btn btn-dafault btn-sm" value="Delete" onclick="minus(this)"><span class="glyphicon glyphicon-minus"></span></a><a name="btn" class="plus btn btn-dafault btn-sm" value="Delete" onclick="plus(this)"><span class="glyphicon glyphicon-plus"></span></a></span><div></td> <td class="cart-product-price"> <span id="price" class="amount">{{$produit->prix_achat}}</span>  </td> <td class="cart-product-subtotal"> <span id="total_amount" class="total_amount"></span> </td> <td> <input type="text" class="form-control input-sm" disabled value="17"> </td> <td> <span id="total_amount_ttc" class="total_amount_ttc"></span> </td></tr>')
            }
                @endforeach
            }
            $(".qty").keyup(function(e){
                alert();
                if (e.keyCode == 38) changeQuantity(1,this);
                if (e.keyCode == 40) changeQuantity(-1,this);
                calculate(this);
            });
            $(".delete").click(function () {
                totalht = $(this).parent().parent().find('.total_amount').text();
                totalttc = $(this).parent().parent().find('.total_amount_ttc').text();
                var new_ttth =parseFloat($('.total-ht').text())-parseFloat(totalht);
                var new_tttc =parseFloat($('.total-ttc').text())-parseFloat(totalttc);
                $('.total-ht').text(new_ttth.toFixed(2));
                $('.total-ttc').text(new_tttc.toFixed(2));
                $(this).closest("tr").remove();
            });

        });



        function calculate(obj){
            var price = parseFloat($(obj).parent().parent().parent().parent().find('.amount').text()) || 0;
            var quantity = parseInt($(obj).parent().find('.qty').val());
            var total = price * quantity;
            $(obj).parent().parent().parent().parent().find('.total_amount').text(total.toFixed(2));
            $(obj).parent().parent().parent().parent().find('.total_amount_ttc').text((total*1.17).toFixed(2));
            Total();
        }
        function changeQuantity(num,obj){
            $(obj).parent().find('.qty').val( parseInt($(obj).parent().find('.qty').val())+num);
        }

    </script>
    <script>
        function minus(f){
            changeQuantity(-1,f);
            calculate(f);
        }
        function plus(f){
            changeQuantity(1,f);
            calculate(f);
        }
        function Total() {
            var th = 0;
            var ttc = 0
            $('.total_amount').each(function () {
                var value = parseFloat($(this).text());
                th = th + value ;

            });
            $('.total-ht').text(th.toFixed(2));
            $('.total_amount_ttc').each(function () {
                var value = parseFloat($(this).text());
                ttc = ttc + value ;
            });
            $('.total-ttc').text(ttc.toFixed(2));
        }
    </script>
@endsection
