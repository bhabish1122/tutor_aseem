<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('form.index') }}">Form</a>
    <a href="{{ route('get.list') }}">Get List</a>


    {{-- After allowing the xss middleware it takes the parameter as string as oppose to whole html or javascript. This is why we get string. --}}
    @if(request()->has('name'))
        {!! request()->get('name') !!}  {{-- Now This is pop javascript alert since it renders out as html element. This is simplest form of XSS attack. XSS attack means to inject javascrpt script as parameter to alter defaultbehaviour of web application --}}
    @endif
</body>
</html>