<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function index()
    {
        return "ok";
        $client = new Client();
        return $client->get('http://localhost:8001/micro-service', [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
        ]);
        $response = $client->request('GET', 'localhost:8001/micro-service', [
            'foo' => 'bar',
        ]);
        return $response->getBody()->getContents();
    }

    //
}
