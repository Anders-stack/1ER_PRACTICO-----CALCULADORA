<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function calculadora() {
        return view('calculadora');
    }
    
    public function solucion(Request $request) {
        $a = (float)$request->input('a');
        $b = (float)$request->input('b');
        $op = (float)$request->input('op');

        if ($_POST['op']=="0"){
            $resultado = $a + $b;
            
        }elseif ($_POST['op'] == "1"){
            $resultado = $a - $b;
            
        }
        elseif ($_POST['op'] == "2"){
            $resultado = $a * $b;
            
        }elseif ($_POST['op'] == "3"){
            $resultado = $a / $b;
            
        }elseif ($_POST['op'] == "4"){
            $resultado=1;
            for ($x=1; $x <=$b ; $x++){
                $resultado = $resultado * $a;
            }      
        }
         
        return view('solucion', [
            'a' => $resultado,           
        ]);
    }
}
