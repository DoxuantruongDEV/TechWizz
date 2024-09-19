<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CurrencyController extends Controller
{
    public function showForm()
    {
        return view('currency.form');
    }

    public function convert(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'from_currency' => 'required|string',
            'to_currency' => 'required|string',
        ]);

        $amount = $request->input('amount');
        $fromCurrency = $request->input('from_currency');
        $toCurrency = $request->input('to_currency');

        // Replace 'YOUR_API_KEY' with your actual API key
        $apiKey = '634d1bd67cd135b1f36b3b7e';
        $apiUrl = "https://v6.exchangerate-api.com/v6/$apiKey/latest/$fromCurrency";

        $response = Http::get($apiUrl);
        $data = $response->json();

        if ($data['result'] == 'success') {
            $exchangeRate = $data['conversion_rates'][$toCurrency];
            $convertedAmount = $amount * $exchangeRate;

            return response()->json([
                'success' => true,
                'amount' => $amount,
                'fromCurrency' => $fromCurrency,
                'toCurrency' => $toCurrency,
                'convertedAmount' => $convertedAmount,
            ]);
        } else {
            return response()->json(['success' => false]);
        }
    }
}