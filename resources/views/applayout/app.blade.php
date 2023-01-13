<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Residence</title>

    <link rel="stylesheet" href="{{ asset('scss/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css
    ">


</head>

<body>






    @yield('content')



   

    
    @yield('script')


    <script src="{{ asset('js/script.js') }}"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}



</body>

</html>