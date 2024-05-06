<!DOCTYPE html>
<html lang="it">
    {{-- <html lang="{{app()->getLocale()}}"> --}}
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/css/app.css','resources/js/app.js'])
        <title>Seconda Sinfonia</title>
        <link rel="icon" type="image/x-icon" href="/images/favicon.png">
        <script src="https://kit.fontawesome.com/1ff05e34f2.js" crossorigin="anonymous"></script>

    </head>
<body>
<x-navbar/>

<div class="page-margin">
{{$slot}}
</div>

<x-footer/>


<script src="{{asset('js/main.js')}}"></script>

</body>
</html>