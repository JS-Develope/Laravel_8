<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function fornecedores() {
        $fornecedores = [
            0 => [
                'nome' => 'Márcia',
                'status' => 'S',
                'ddd' => '25',
                'telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'Carlos',
                'status' => 'N',
                'ddd' => '85',
                'telefone' => '0000-0000'
            ],
            2 => [
                'nome' => 'Juca',
                'status' => 'S',
                'ddd' => '32',
                'telefone' => '0000-0000'
            ],
            3 => [
                'nome' => 'Maria',
                'status' => 'N',
                'ddd' => '32',
                'telefone' => '0000-0000'
            ],
            4 => [
                'nome' => 'Jhonatan',
                'status' => 'N',
                'ddd' => '32',
                'telefone' => '0000-0000'
            ],
            5 => [
                'nome' => 'Laravel',
                'status' => 'N',
                'ddd' => '32',
                'telefone' => '0000-0000'
            ],
        ];
        return view('app/fornecedor/index', compact('fornecedores'));
    }}
