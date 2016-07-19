@extends('body')
@section('content')
    <div class="col-sm-12">
        <table class="table table-striped table-bordered table-expandable" id="datatable-responsive">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Téléphone</th>
                <th>Email</th>


            </tr>
            </thead>
            <tbody>
            @foreach($fournisseurs as $fournisseur)
                <tr>
                    <th>{{$fournisseur->nom}}</th>
                    <th>{{$fournisseur->prenom}}</th>
                    <th>{{$fournisseur->tel}}</th>
                    <th>{{$fournisseur->email}}</th>
                    {{--<th><div class="table-expandable-arrow"></div></th>--}}
                </tr>
                <tr>
                    <td colspan="4">
                        <ul>
                            <li><p>NIF:</p>{{$fournisseur->nif}}</li>
                            <li><p>RIB:</p>{{$fournisseur->rib}}</li>
                            <li><p>RC:</p>{{$fournisseur->rc}}</li>
                            <li><p>NIS:</p>{{$fournisseur->nis}}</li>
                            <li><p>AI:</p>{{$fournisseur->ai}}</li>
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
