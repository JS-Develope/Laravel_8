<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2) {
        /* echo "a soma dos valores $p1 + $p2 é: ".($p1+$p2);
        
        INDICE DO ARRAY ASSOCIATIVO VALOR ENTRE ASPAS SIMPLES NO CASO P1 E P2
        */

        return view('site/teste', ['p1' => $p1], ['p2' => $p2]);
        /* return view('site/teste', compact('p1', 'p2')); O NOME DO COMPACT TEM QUE SER O MESMO DA VARIÁVEL */
        /* return view('site/teste')->with('p1', $p1); WITH PASSA O NOME QUE DESEJA SER A VARIÁVEL E DEPOIS O VALOR */
    }
}
