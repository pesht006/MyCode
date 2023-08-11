<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Stock;


class StocksController extends Controller
{
    public function index(Request $request)
    {
        $response = Http::get('http://89.108.115.241:6969/api/stocks', [
            'dateFrom' => $request->input('dateFrom'),
            'key' => 'E6kUTYrYwZq2tN4QEtyzsbEBk3ie'
        ]);

        $stocksData = $response->json();

        return response()->json($stocksData);
    }
}
