<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

class SessionController extends Controller
{
    public function admonLvl(){
        if(Session::get('Sid') == null){
            return view('Admin.login');
        }else{
            return redirect()->route('inicioAdmin');
        }
    }

    public function valida(Request $request){
        $response = array('status' => 0,'msg' => ''); 

        $username = $request->username;
		$password = $request->password;

        $response = noVacio($username,'USUARIO',$response);
        $response = noVacio($password,'CONTRASEÑA',$response);

        if($response['status'] != '1'){
            $consulta = DB::connection('mysql')->select("SELECT * FROM usuarios WHERE nombre = '$username' AND password = '$password'");

            if($consulta == null){
                $response['status'] = '1';
                $response['msg'] = "USUARIO O CONTRASEÑA INCORRECTOS";
            }else{
                session::put('Sid', $consulta[0]->id);
                session::put('Sname', $consulta[0]->nombre);

                $sessionid = session::get('Sid');
                $sessionnick = session::get('Sname');
            }
        }
        
        echo json_encode($response);
    }

    public function closesesion(){
    Session::forget('Sid');
    Session::forget('Sname');

    return redirect()->route('admonLvl');
    }
}
