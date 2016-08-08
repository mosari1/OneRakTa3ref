@extends('body')
@section('content')
    @include('Achat.modal_confirm')
    <div class="col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Liste des Achats </h2>
                <ul class="nav navbar-right panel_toolbox">
                    <a href="{{url('Achat/create')}}" class="btn btn-flat btn-success pull-right">
                        <span class="glyphicon glyphicon-plus" aria-hidden="false"></span>
                        Ajouter
                    </a>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table class="table table-striped table-bordered " id="datatable-responsive">
                    <thead>
                    <tr>
                        <th>Code</th>
                        <th>Date</th>
                        <th>Total HT</th>
                        <th>Total TTC</th>
                        <th>Produits</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($achats as $achat)
                        <tr>
                            <td>{{$achat->code}}</td>
                            <td>{{$achat->created_at}}</td>
                            <td>{{$achat->total_ht}}</td>
                            <td>{{$achat->total_ttc}}</td>
                            <td class="text-center">
                                <a href="#" class="example-popover-3" data-trigger="hover"  data-placement="bottom"><i class="fa fa-plus-circle"></i></a>
                                <div class="example-popover-3-content hidden">
                                    @foreach($achat->produit as $pro)
                                    <div>
                                        Code: <b>{{$pro->code}}</b><br>
                                        Libelle: <b>{{$pro->libelle}}</b><br>
                                        Quantite: <b>{{$pro->pivot->qte}}</b><br>
                                    </div>
                                        <hr>
                                    @endforeach
                                </div>
                                <div class="example-popover-3-title hidden" >
                                    <b>Détails Produit</b>
                                </div>
                            </td>
                            <td class="text-center"><a href="{{route('Achat.edit',$achat->id)}}" class="fa fa-edit"></a></td>
                            <td class="text-center"><a class="fa fa-trash" data-toggle="modal" data-target="#myModal"   onclick="getID({{$achat->id}})"></a></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <script>

            function getID($id)
            {
                document.getElementById("footer").innerHTML =

                        '<form method="POST" action="Achat/'+$id+'">'+
                        '<input name="_token" type="hidden" value="{{ csrf_token() }}">'+
                        '<input type="hidden" name="_method" value="Delete">'+
                        '<div>'+
                        '<button type="button" class="btn btn-sm btn-flat btn-success pull-right" data-dismiss="modal">Annuler</button>'+
                        '<button type="submit" class="btn btn-sm btn-flat btn-warning pull-right">Valider</button>'+
                        '</div>'
                '</form>';
            }
        </script>
    </div>
@endsection
