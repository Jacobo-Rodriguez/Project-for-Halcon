<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('is_deleted', false)->latest()->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        Order::create([
            ...$request->all(),
            'status_id' => 1
        ]);

        return redirect('/orders');
    }

    public function show($id)
    {
        $order = Order::with('photos', 'status')->findOrFail($id);
        return view('orders.show', compact('order'));
    }

    public function update(Request $request, $id)
    {
        Order::findOrFail($id)->update($request->all());
        return back();
    }

    public function changeStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->status_id = $request->status_id;
        $order->save();

        return back();
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->is_deleted = true;
        $order->save();

        return back();
    }

    public function archived()
    {
        $orders = Order::where('is_deleted', true)->get();
        return view('orders.archived', compact('orders'));
    }

    public function restore($id)
    {
        $order = Order::findOrFail($id);
        $order->is_deleted = false;
        $order->save();

        return back();
    }
}