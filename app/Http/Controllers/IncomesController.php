<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Income;

class IncomesController extends Controller
{
    public function index(Request $request)
    {
        $response = Http::get('http://89.108.115.241:6969/api/incomes', [
            'dateFrom' => $request->input('dateFrom'),
            'dateTo' => $request->input('dateTo'),
            'key' => 'E6kUTYrYwZq2tN4QEtyzsbEBk3ie'
        ]);

        $incomesData = $response->json();

        return response()->json($incomesData);
    }
}

