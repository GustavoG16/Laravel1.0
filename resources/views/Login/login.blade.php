<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODULO DE AUTENTICACION</title>
    <!-- Core CSS - Include with every page -->
    {!! HTML::style('assets/plugins/bootstrap/bootstrap.css') !!}
    {!! HTML::style('assets/font-awesome/css/font-awesome.css') !!}
    {!! HTML::style('assets/plugins/pace/pace-theme-big-counter.css') !!}
    {!! HTML::style('assets/css/style.css') !!}
    {!! HTML::style('assets/css/main-style.css') !!}
    
    <body style="background-image:url('images/Blu.jpg')" >
        <div class="login">
            <div class="login-screen">
              <div class="app-title">
              <h1>UTEM</h1>
            </div>
        

        @if($errors->has())
        <div class='alert alert-danger'>
          <!--recorremos los errores en un loop y los mostramos-->
            @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
           @endforeach
         </div>
        @endif
      </div>

      <div class="login-form">
      <form name="form1" method="post" action="{{ route('auth.doLogin') }}">
        <div class="control-group">
        <input type="text" class="login-field" value="" placeholder="Ingrese su Rut" name="rut" id="login-name">
        <label class="login-field-icon fui-user" for="login-name"></label>
        </div>

        <div class="control-group">
        <input type="password" class="login-field" name="password" value="" placeholder="Ingrese su contraseña"  id="login-pass">
        <label class="login-field-icon fui-lock" for="login-pass"></label>
        </div>
         <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        </div>

       <button href="#" class="btn waves-effect waves-light" type="submit" name="action"> Entrar <i class="mdi-content-send right"></i> 
       </button> 
       </form>
        <a class="login-link" href="#">Olvidaste tu contraseña?</a>
      </div>
    </div>
  </div>

<!-- Core Scripts - Include with every page -->
    {!!HTML::script('assets/plugins/jquery-1.10.2.js') !!}
    {!!HTML::script('assets/plugins/bootstrap/bootstrap.min.js') !!}
    {!!HTML::script('assets/plugins/metisMenu/jquery.metisMenu.js') !!}

</body>

</html>