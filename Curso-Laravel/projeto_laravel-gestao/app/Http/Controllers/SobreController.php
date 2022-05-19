<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreController extends Controller
{
    public function sobre() {
        return view('site/sobre');
    }
    public function sobre_info($nome,int $idade, $sexo = 'Indefinido') {
        echo 'Olá '.$nome .', Sua idade é: ' .$idade .', Você é: ' .$sexo;
    }
}
