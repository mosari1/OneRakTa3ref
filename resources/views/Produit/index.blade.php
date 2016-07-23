
@extends('body')
@section('content')
  @include('Produit.modal_confirm')
  @if(Session::has('message_succe'))
                    <div class="box box-success box-solid">
                        <div class="box-header with-border">
                            <div class="box-title">
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                <em>{!! Session::get('message_succe') !!}</em>
                            </div>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="remove">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>
 @endif
@if(Session::has('message_alert'))
                        <div class="box box-danger box-solid">
                            <div class="box-header with-border">
                                <div class="box-title">
                                    {{--<span> <i class="fa fa-remove"></i></span>--}}
                                    <em>{!! session('message_alert') !!}</em>
                                </div>
                                <div class="box-tools pull-right">
                                    <button class="btn btn-box-tool" data-widget="remove">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
 @endif

<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Liste des Produits </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <table class="table table-striped table-bordered " id="datatable-responsive">
                      <thead>
                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 160px;" aria-sort="ascending">Code bare</th>
                          <th>Libelle</th>
                          <th>Quantite</th>
                          <th>Type</th>
                          <th>Prix Achat</th>
                          <th>Prix Vente</th>
                          <th>Modifier</th>
                          <th>Supprimer</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($produits as $produit)
                            <tr role="row" class="odd">
                              <td class="sorting_1">{!!$produit->libelle!!}</td>
                              <td class="">{!!$produit->code_barre!!}</td>
                              <td class="">{!!$produit->quantite!!}</td>
                                @if($produit->type)
                                    <td class="">{!!$produit->type->type!!}</td>
                                @else
                                    <td class="">aucun</td>
                                @endif

                              <td>{!!$produit->prix_achat!!}</td>
                              <td>{!!$produit->prix_vente!!}</td>
                              <td><a class="btn btn-primary" href="{{route('Produit.edit',$produit->id)}}"> Modifier </a></td>
                              <td> <a class='btn  btn-danger'  data-toggle="modal" data-target="#myModal"   onclick="getID({{$produit->id}})">Supprimer</a></td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                    <div class="col-sm-7">{{$produits->render()}}
                    </div>
                </div>
                      <div>
                        <p>
                            <a class=" btn btn-info pull-right" href="{{route('Produit.create')}}"> Ajouter un produit</a>
                        </p>
                      </div>



<script>

function getID($id)
   {
      document.getElementById("header").innerHTML ='Confirmation';
      document.getElementById("message").innerHTML = "Voulez-vous vraiment supprimer ce produit ?";
      document.getElementById("footer").innerHTML = 

         '<form method="POST" action="Produit/'+$id+'">'+
              '<input name="_token" type="hidden" value="{{ csrf_token() }}">'+
                '<input type="hidden" name="_method" value="Delete">'+
              '<div>'+
                  '<button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>'+
                  '<button type="submit" class="btn btn-primary">Valider</button>'+
              '</div>'
          '</form>';
   }
 </script> 
@stop

