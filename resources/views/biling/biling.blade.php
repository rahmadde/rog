<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/all.css')}}">
    <title>ROG</title>
</head>
<body>
    <header class="mt-5 container d-flex justify-content-center align-items-center">
        <h1 class="text-center bg-warning col-1 rounded">
            ROG
        </h1>
    </header>
    <div class="container text-center mt-5">
        <h1>Beli Paket & Biling</h1>
        <div class="row mt-4 text-start">
            <div class="card mb-5">
                <div class="card-body">
                    <h2>Paket</h2>
                    <input type="text" class="form-control">
                </div>
                <div class="card-body">
                    <h2>Biling</h2>
                    <input type="text" class="form-control">
                </div>
                <div class="card-body">
                    <button type="submit" class="btn btn-warning">
                        Order
                    </button>
                    <button type="reset" class="btn btn-danger">
                        Reset
                    </button>
                </div>
            </div>
    </div>
</body>
</html>