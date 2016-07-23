@extends('body')
@section('content')
    <div class="col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Liste des Fournisseurs </h2>
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
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Téléphone</th>
                <th>Email</th>
                <th>Détails</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
            @foreach($fournisseurs as $fournisseur)
                <tr>
                    <th>{{$fournisseur->nom}}</th>
                    <th>{{$fournisseur->prenom}}</th>
                    <th>{{$fournisseur->tel}}</th>
                    <th>{{$fournisseur->email}}</th>
                    <th class="text-center">
                        <a href="#" class="example-popover-3" data-trigger="hover"  data-placement="bottom"><i class="fa fa-plus-circle"></i></a>

                        <div class="example-popover-3-content hidden">
                            <div>
                               NIF: <b>{{$fournisseur->nif}}</b><br>
                               RIB: <b>{{$fournisseur->rib}}</b><br>
                               RC:  <b>{{$fournisseur->rc}}</b><br>
                               NIS: <b>{{$fournisseur->nis}}</b><br>
                               AI:  <b>{{$fournisseur->ai}}</b><br>
                            </div>
                        </div>

                        <div class="example-popover-3-title hidden" >
                            <b>Détails événement</b>
                        </div>
                    </th>
                    <th class="text-center"><a href="{{url('Fournisseur.Modification?id='.$fournisseur->id)}}" class="fa fa-edit"></a></th>
                    <th class="text-center"><a data-id="#" class=" open-AddBookDialog fa fa-trash" data-toggle="modal" data-target="#confirmDelete" data-title="Delete User"></a></th>
                </tr>
            @endforeach
            </tbody>
        </table>
                </div>
    </div>
    </div>
@endsection
