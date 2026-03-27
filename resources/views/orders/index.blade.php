@extends('layouts.app')

@section('content')

<h2>Orders</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Invoice</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{ $order->invoice_number }}</td>
            <td>{{ $order->status->name }}</td>
            <td>
                <a href="/orders/{{ $order->id }}" class="btn btn-primary btn-sm">
                    View
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

@endsection