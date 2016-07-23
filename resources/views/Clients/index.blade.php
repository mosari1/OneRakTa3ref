
@extends('body')
@section('content')
  @include('Produit.modal_confirm')
  @if(Session::has('message_succe'))
                    <div class="box box-success box-solid">
                        <div class="box-header with-border">
                            <div class="box-title">
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                <em>{!! session('message_succe') !!}</em>
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
                  
                    <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="datatable_length"><label>Show <select name="datatable_length" aria-controls="datatable" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div>
                    <div class="col-sm-6"><div id="datatable_filter" class="dataTables_filter"><label>Recherche:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></label></div></div></div>
                    <div class="row"><div class="col-sm-12"><table id="datatable-responsive" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
            
                      <thead>
                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 160px;" aria-sort="ascending">code</th>
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 261px;">Nom</th>
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 118px;">Prenom</th>
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 113px;">Telephone</th>
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 118px;">E-mail</th>
                          
                          

                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 59px;">Modifier</th>
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 113px;">Supprimer</th>
                          
                        </tr>
                      </thead>



                      <tbody>
                        @foreach($clients as $client)
                      <tr role="row" class="odd">
                          <td class="sorting_1">{!!$client->code!!}</td>
                          <td class="">{!!$client->nom!!}</td>
                          <td class="">{!!$client->prenom!!}</td>
                        <td class="">{!!$client->tel!!}</td>
                          <td>{!!$client->email!!}</td>
                          
                          <td><a class="btn btn-primary" href="{{route('Client.edit',$client->id)}}"> editer</a></td>
                          <td> <a class='btn  btn-danger'  data-toggle="modal" data-target="#myModal"   onclick="getID({{$client->id}})">Supprimer</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    
          
                    </table></div><div class="col-sm-7">{{$clients->render()}}</div></div>
                      <div>
      <p>
    <a class=" btn btn-info pull-right" href="{{route('Client.create')}}"> Ajouter un Client</a> 
    </p>
    </div>
                </div>
              
              </div>



<script>

function getID($id)
   {
      document.getElementById("header").innerHTML ='Confirmation';
      document.getElementById("message").innerHTML = "Voulez-Vous Vraiment Supprimer ce Client?";
      document.getElementById("footer").innerHTML = 

         '<form method="POST" action="Client/'+$id+'">'+
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

