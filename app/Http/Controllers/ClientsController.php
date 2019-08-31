<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function list()
    {
        $clients = [
            'Company Name 1',
            'Company Name 2',
            'Company Name 3'
        ];

        return view('clients.list', [
           'clients' => $clients,
        ]);
    }
}
