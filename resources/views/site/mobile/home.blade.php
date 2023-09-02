<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" > --}}
    <link href="{{ asset('site/mobile/css/mobile.css') }}" rel="stylesheet">
</head>
<body>
<header>
    <div class="container-fluid">
        <div class="logo">
            <img src="{{ asset('storage/' . $configuration->logoheader) }}" alt="{{  $configuration->company }}">
        </div>
        <nav >
            
        </nav>
      </div>
</header>


    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script> --}}
</body>
</html>
