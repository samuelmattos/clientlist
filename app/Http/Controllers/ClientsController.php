<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = \App\Client::all();
        return view('clients.index', ['clients' => $clients]);
    }
    public function create()
    {
        return view('clients.create');
    }

    public function store()
    {
        $name = request('name');
        $client = new \App\Client;
        $client->name = $name;
        $client->save();
        return redirect('/clients');
    }
}
