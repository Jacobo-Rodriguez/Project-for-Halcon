@extends('layouts.app')

@section('content')

<h2>Order #{{ $order->invoice_number }}</h2>

<p>Status: <strong>{{ $order->status->name }}</strong></p>

<form method="POST" action="/orders/{{ $order->id }}/status">
    @csrf

    <select name="status_id" class="form-control w-25 mb-2">
        <option value="1">Ordered</option>
        <option value="2">In process</option>
        <option value="3">In route</option>
        <option value="4">Delivered</option>
    </select>

    <button class="btn btn-success">Update Status</button>
</form>

@if($order->status->name == 'Delivered')
    <h4>Delivery Evidence</h4>

    @foreach($order->photos as $photo)
        <img src="{{ asset('storage/'.$photo->file_path) }}" width="200">
    @endforeach
@endif

@endsection