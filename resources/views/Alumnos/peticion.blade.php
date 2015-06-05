@extends('Layout.layoutadmin')

@section('contenido1')

        <!-- Page Content -->
        <div id="page-wrapper" style="min-height: 586px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Ingrese Datos a Consultar: </h1>
                    </div>

                </div>
                    <form role="form">
                        <div class="form-group">
                            <label >Día: </label>
                            <input class="form-control" 
                            placeholder="Día">
                        </div>
                        <div class="form-group">
                            <label >Campus: </label>
                            <input class="form-control"  
                             placeholder="Campus">
                        </div>
                        <div class="form-group">
                            <label >Sala: </label>
                            <input class="form-control"  
                             placeholder="Ej: M3-301">
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle"
                            data-toggle="dropdown">
                            Periodo <span class="caret"></span>
                            </button>
 
                            <ul class="dropdown-menu" role="menu">
                            <li><a href="#">I (08:00-09:30)</a></li>
                            <li><a href="#">II (09:40-11:10)</a></li>
                            <li><a href="#">III (11:20-12:50)</a></li>
                            <li><a href="#">IV (13:00-14:30)</a></li>
                            <li><a href="#">V (14:40-16:10)</a></li>
                            <li><a href="#">VI (16:20-17:50)</a></li>
                            <li><a href="#">VII (18:00-19:30)</a></li>
                            <li><a href="#">VII (19:00-20:30)</a></li>
                            <li><a href="#">IX (20:40-22:10)</a></li>
                            </ul>
                        </div>
                        
                            <button type="submit" class="btn btn-default">Consultar</button>
                    </form>
                    
                
        </div> 
            
    </div>
    <!-- /#wrapper -->
@stop