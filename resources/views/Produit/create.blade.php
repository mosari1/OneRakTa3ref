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
                    {!! Form::open(['url' => 'Produit']) !!}
                    <div data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Code barre <span class="required">*</span>
                        
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="code_barre" name="code_barre" required="required" class="form-control col-md-7 col-xs-12 " data-parsley-id="5"><ul class="parsley-errors-list filled" id="parsley-id-5"></ul>
                          {!! $errors->first('code_barre', '<small class="help-block" style="color:red">:message</small>') !!}
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Code<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="code" name="code" required="required" class="form-control col-md-7 col-xs-12" data-parsley-id="7"><ul class="parsley-errors-list filled" id="parsley-id-7"><li class="parsley-required"></li></ul>
                          {!! $errors->first('code', '<small class="help-block" style="color:red">:message</small>') !!}
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Libelle</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="libelle" class="form-control col-md-7 col-xs-12" type="text" name="libelle" data-parsley-id="9">
                          {!! $errors->first('libelle', '<small class="help-block" style="color:red">:message</small>') !!}
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Type</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="type_id" class="form-control col-md-7 col-xs-12" type="select" name="type_id" data-parsley-id="9">
                             
                             @foreach($types as $type)
                            <option value="{{$type->id}}" >{{$type->type}}</option>     
                            {!! $errors->first('type_id', '<small class="help-block" style="color:red">:message</small>') !!}
                             @endforeach
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">quantite <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="quantite" name="quantite" class="date-picker form-control col-md-7 col-xs-12 " required="required" type="text" data-parsley-id="16"><ul class="parsley-errors-list filled" id="parsley-id-16"><li class="parsley-required"></li></ul>
                          {!! $errors->first('quantite', '<small class="help-block" style="color:red">:message</small>') !!}
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Prix Achat HT <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="prix_achat" name="prix_achat" class="date-picker form-control col-md-7 col-xs-12 " required="required" type="text" data-parsley-id="16"><ul class="parsley-errors-list filled" id="parsley-id-16"><li class="parsley-required"></li></ul>
                          {!! $errors->first('prix_achat', '<small class="help-block" style="color:red">:message</small>') !!}
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Prix Vente HT <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="prix_vente" name="prix_vente" class="date-picker form-control col-md-7 col-xs-12 " required="required" type="text" data-parsley-id="16"><ul class="parsley-errors-list filled" id="parsley-id-16"><li class="parsley-required"></li></ul>
                          {!! $errors->first('prix_vente', '<small class="help-block" style="color:red">:message</small>') !!}
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