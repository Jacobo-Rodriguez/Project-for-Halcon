<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class HomeController extends Controller
{
    // Mostrar pantalla inicial
    public function index()
    {
        return view('home');
    }

    // Buscar orden
    public function search(Request $request)
    {
        $request->validate([
            'invoice' => 'required'
        ]);

        $order = Order::with('status', 'photos')
            ->where('invoice_number', 'LIKE', '%' . $request->invoice . '%')
            ->orWhere('customer_number', 'LIKE', '%' . $request->invoice . '%')
            ->first();

        return view('home', compact('order'));
    }
}