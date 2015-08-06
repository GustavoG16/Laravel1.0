<?php namespace App\Http\Controllers;
 
use Auth; 
use Request;  
use App\Http\Requests\LoginRequest;//validador


class LoginController extends Controller {

  public function acceder(LoginForm $bookForm)
  { 

    //recibo el username y password desde el formulario en login
        
           $datos = array(
          'name'=>Request::input('nombre'),
          'password'=>Request::input('contrasena')
            );


          if(Auth::attempt($datos))
          {        
            
               $status = Auth::user()->name;  
              
                if($status == 'gustavo')
                { 
            
                   return redirect()->intended('dashboard');
                }

             /*
                if($status == 1)
                { //check if user account is enabled
            
                   return Redirect::to('gestion');
                }
                elseif($status == 2) 
                {
                  return Redirect::to('profesional');
                }
               */ 
     
                
          }
          else
          {  

               return redirect('login');
          }

          }


      /* public function store() {


        $input = Input::all();
        try {
        $validate_data = $this->_validator->validate( $input );
        return Redirect::route( 'dummy.create' )->withMessage( 'Data passed validation checks' );
    }   catch ( ValidationException $e ) {
        return Redirect::route( 'dummy.create' )->withInput()->withErrors( $e->get_errors() );
    } */
  }















          

