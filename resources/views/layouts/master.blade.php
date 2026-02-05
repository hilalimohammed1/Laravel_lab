<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources\css\app.css','resources\js\app.js'])
    <title>Laravel TP | @yield('title')</title>
</head>
<body class="d-flex flex-column min-vh-100">

    @include('partials.navbar')
    <div class=" flex-grow-1">
        <div class="row">
            <div class="col-2 border rounded mt-5 p-3">
                @include('partials.sidebar')
            </div>

            <main class="col-md-9 col-lg-10 p-4 mt-4">
                @yield('content')
            </main>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-auto">
        @include('partials.footer')
    </footer>


</body>
</html>