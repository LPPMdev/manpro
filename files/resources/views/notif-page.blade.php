<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('public/css/success.css')}}" rel="stylesheet">
    <link rel="icon" type="text/css" href="{{asset('public/images/logo.png')}}">
    <link rel="icon" type="image/png" href="{{asset('public/assets/ico3.png')}}">
    <title>LPPM - Lembaga Penelitian dan Pengabdian pada Masyarakat</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
    <script src="{{ asset('public/js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
    @yield('scripts')
</html>