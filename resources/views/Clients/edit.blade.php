@extends('body')
@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ajouter un nouveau produit </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    {!! Form::model($client, [
    'method' => 'PATCH',
    'route' => ['Client.update', $client->id]
]) !!}
                    <div data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Code <span class="required">*</span>
                        
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="code" value="{{$client->code}}" name="code" required="required" class="form-control col-md-7 col-xs-12 " data-parsley-id="5"><ul class="parsley-errors-list filled" id="parsley-id-5"></ul>
                          {!! $errors->first('code', '<small class="help-block" style="color:red">:message</small>') !!}
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nom<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nom" value="{{$client->nom}}" name="nom" required="required" class="form-control col-md-7 col-xs-12" data-parsley-id="7"><ul class="parsley-errors-list filled" id="parsley-id-7"><li class="parsley-required"></li></ul>
                          {!! $errors->first('nom', '<small class="help-block" style="color:red">:message</small>') !!}
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Prenom</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="libelle" value="{{$client->prenom}}" class="form-control col-md-7 col-xs-12" type="text" name="prenom" data-parsley-id="9">
                          {!! $errors->first('prenom', '<small class="help-block" style="color:red">:message</small>') !!}
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Telephone</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tel" class="form-control" value="{{$client->tel}}" col-md-7 col-xs-12" type="text" name="tel" data-parsley-id="9">
                          {!! $errors->first('tel', '<small class="help-block" style="color:red">:message</small>') !!}
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">E-mail <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="quantite" name="email" value="{{$client->email}}" class="date-picker form-control col-md-7 col-xs-12 " required="required" type="text" data-parsley-id="16"><ul class="parsley-errors-list filled" id="parsley-id-16"><li class="parsley-required"></li></ul>
                          {!! $errors->first('email', '<small class="help-block" style="color:red">:message</small>') !!}
                        </div>
                      </div>
                    
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Renitialiser</button>
                          <button type="submit" class="btn btn-success">Valider</button>
                        </div>
                      </div>

                    {!! Form::close() !!} 
                  </div>
                </div>
              </div>
@stop