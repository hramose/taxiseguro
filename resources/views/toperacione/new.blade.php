@extends("layout.layout")

@section("contenido")

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Inicio</a></li>
    <li><a href="#">Toperacione</a></li>
    <li><a href="#">Nuevo</a></li>
</ul> 
<!-- END BREADCRUMB -->
<form class="form-horizontal" method="POST" action="/toperacione">
    <div class="panel panel-warning">
        <div class="panel-heading">
        @include("flash::message")
            <h3 class="panel-title"><strong>Nuevo toperacione</strong></h3>
        </div>
        <div class="panel-body">
            
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="numerotageta">Numerotageta</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="numerotageta" id="numerotageta" class="form-control"/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="vigenciatargeta">Vigenciatargeta</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="vigenciatargeta" id="vigenciatargeta" class="form-control"/>
	                            </div>
	                        </div>
        </div>
        <div class="panel-footer">
            <a href="/toperacione" name="btn_back" id="btn_back" class="btn btn-default">Volver</a> 
            <input type="submit" name="btn_submit" id="btn_submit" class="btn btn-primary pull-right" value="Registrar" />
        </div>
    </div>
</form>

@endsection