@extends('body')
@section('content')
    <div class="col-sm-12">
        <table class="table table-striped table-bordered" id="datatable-responsive">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Téléphone</th>
                <th>Adresse</th>
            </tr>
            </thead>
            <tbody>
            @foreach($fournisseurs as $fournisseur)
                <tr>
                    <th>{{$fournisseur->nom}}</th>
                    <th>{{$fournisseur->prenom}}</th>
                    <th>{{$fournisseur->tel}}</th>
                    <th>{{$fournisseur->nif}}</th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
