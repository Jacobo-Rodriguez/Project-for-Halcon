<!DOCTYPE html>
<html>
<head>
    <title>Halcon Tracking</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>

<body class="d-flex align-items-center justify-content-center" style="height:100vh">

<div class="card p-4" style="width:400px">

    <h3 class="text-center">Track your Order</h3>

    <form method="GET" action="/search">
        <input class="form-control mb-2" name="invoice" placeholder="Invoice Number">
        <button class="btn btn-primary w-100">Search</button>
    </form>

    @if(isset($order))
        <hr>
        <p>Status: <strong>{{ $order->status->name }}</strong></p>

        @if($order->status->name == 'Delivered')
            <img src="{{ asset('storage/'.$order->photos->last()->file_path) }}" class="img-fluid">
        @endif
    @endif

</div>

</body>
</html>