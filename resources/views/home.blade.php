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
    <div class="container mt-5">
        <h1 class="text-center mb-4">Menu</h1>
        <a href="/pesan-makanan">
            <div class="card mb-3">
                <div class="card-body text-center">
                    <div class="circle-icon mb-3">
                        <i class="fa-solid fa-utensils"></i>
                    </div>
                    <h5>Pesan Makanan</h5>
                </div>
        </a>
        <a href="/booking-pc">
        </div>
        <div class="card mb-3">
            <div class="card-body text-center">
                <div class="circle-icon mb-3">
                    <i class="fa-solid fa-desktop"></i>
                </div>
                <h5>Booking PC</h5>
            </div>
        </div>
        </a>
        <a href="/biling">
            <div class="card mb-3">
                <div class="card-body text-center">
                    <div class="circle-icon mb-3">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <h5>Beli Paket & Biling</h5>
                </div>
            </div>
        </a>
    </div>
</body>
</html>