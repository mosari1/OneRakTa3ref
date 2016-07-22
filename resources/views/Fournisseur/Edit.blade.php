@extends('body')
@section('content')
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-align-left"></i> Ajouter un fournisseur</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <!-- start accordion -->
            @if(Session::has('modif_fournisseur'))
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button href="#" class="close" data-dismiss="alert" aria-label="close">&times;</button>
                    <strong>{!! session('modif_fournisseur') !!}</strong>
                </div>
            @endif
            <div class="accordion">
                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#collapse1">Détails importants</a>
                        </h4>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(array('url' => 'Fournisseur.Modification')) !!}
                        <div class="form-group">
                            <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                    </span>
                                <input type="text" class="form-control" name="nom" placeholder="Nom" value="{{$fournisseur->nom}}">
                                <input type="text" class="form-control" name="prenom"  placeholder="Prénom" value="{{$fournisseur->prenom}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="fa fa-envelope-square"></i>
                                    </span>
                                <input type="email" class="form-control" name="email" placeholder="Email" value="{{$fournisseur->email}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                    </span>
                                <input type="text" class="form-control" name="tel" placeholder="Téléphone" value="{{$fournisseur->tel}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="fa fa-home"></i>
                                    </span>
                                <input type="text" class="form-control" name="adresse" placeholder="Adresse" >
                            </div>
                        </div>
                        <input type="submit" class="btn btn-flat btn-success pull-right" value="Valider">
                        <input type="reset" class="btn btn-flat btn-warning pull-right" value="Annuler">
                        <input type="text" name="id" value="{{$fournisseur->id}}" hidden>


                    </div>
                </div>
            </div>


            <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
                <div class="panel">
                    <a class="panel-heading collapsed" role="tab" id="headingTwo1" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1" aria-expanded="true" aria-controls="collapseTwo">
                        <h4 class="panel-title">Plus de détails <span><i class="glyphicon glyphicon-chevron-down pull-right"></i></span></h4>
                    </a>
                    <div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="true" style="height: 0px;">
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="fa fa-hashtag"></i>
                                    </span>
                                    <input type="text" class="form-control" name="rc" placeholder="Numero registre de commerce" value="{{$fournisseur->rc}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="fa fa-hashtag"></i>
                                    </span>
                                    <input type="text" class="form-control" name="nis" placeholder="Numero d'identifiant social" value="{{$fournisseur->nis}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="fa fa-hashtag"></i>
                                    </span>
                                    <input type="text" class="form-control" name="rib" placeholder="Numero d'identifiant social" value="{{$fournisseur->rib}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="fa fa-hashtag"></i>
                                    </span>
                                    <input type="text" class="form-control" name="ai" placeholder="Numero d'identifiant social" value="{{$fournisseur->ai}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="fa fa-hashtag"></i>
                                    </span>
                                    <input type="text" class="form-control" name="nif" placeholder="Numero d'identifiant fiscale" value="{{$fournisseur->nif}}" >
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

            </div>
            <!-- end of accordion -->
        </div>
    </div>
@endsection