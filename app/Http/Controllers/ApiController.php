<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
   public function Tiempo(Request $req){ 
       
        //session()->forget('recientes');
        $ciudad = $req->input('ciudad');
        $respuesta = Http::get("http://api.weatherapi.com/v1/current.json?key=dd07e039c5d4440d988162831250912&q=$ciudad&aqi=no");

        $data = $respuesta->json();
    
        $nuevoReciente = [
            'name' => $data['location']['name'],
            'country' => $data['location']['country'],
            'temp_c' => $data['current']['temp_c']
        ];

        $recientes = session('recientes', []);

        
        $recientes = array_filter($recientes, function($item) use ($nuevoReciente) {
            return is_array($item) && $item['name'] !== $nuevoReciente['name'];
        });
        
        array_unshift($recientes, $nuevoReciente);
        
        $recientes = array_slice($recientes, 0, 2);

        session(['recientes' => $recientes]);

        return view('/tiempo', ['respuesta' => $respuesta]);
    }


}
