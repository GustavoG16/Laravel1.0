@extends('Layout.administrador')

@section('contenido')
<!-- Page Content --> 
<div id="page-wrapper" style="min-height: 586px;"> 
	<div class="container-fluid"> 
		<div class="row"> 
			<div class="col-lg-12"> 
				<h1 class="page-header"><small>Lista de Usuarios</small></h1> 
			</div> <!-- /.col-lg-12 --> 
		</div> <!-- /.row --> 
	</div> 
<div class="panel-body"> 

	<div class="dataTable_wrapper"> 
		<a 
				class="btn btn-primary" 
				href="{{route('usuarios.create')}}"> 
				Nuevo Usuario
		</a> 
		<div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"> 
			<div class="row">
				<div class="col-sm-6">
				</div> 
				<div class="col-sm-6"> 
					<div id="dataTables-example_filter" class="dataTables_filter"> 
					<label>Buscar Usuario: 
					<input type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example"> 
					</label>
					</div> 
				</div> 
			</div> 
				<div class="row"> 
						<div class="col-sm-12"> 
						<table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info"> <thead> 
						<tr role="row">
						<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 144px;">Id</th> 
						</th>
						<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" s tyle="width: 176px;">Nombre 
						</th>
						<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" s tyle="width: 176px;">Descripcion 
						</th>
						 <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 160px;">Acción 
						 </th>
						 	</tr>
						 		@foreach($result as $rol)
						 </thead> 
						<tbody> 
							<tr class="gradeA odd" role="row">
							<td>{{$rol -> id}}</td>
						 	<td>{{$rol -> nombre}}</td>
						 	<td>{{$rol -> descripcion}}</td>
						 	<td>
						 	<a class="btn btn-warning" href="#">Modificar</a> 
						 	<td class="sorting_1"></td> 
						 	</td> 
						 	</tr> 
						 	@endforeach
						 </tbody> 
					</div> 
			</div> 
	</div> <!-- /#page-wrapper -->

   </div> 

  <!-- /#wrapper --> 

@stop