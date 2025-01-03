<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('set.locale',['lang' => 'np']) }}">Nepali</a>
    <a href="{{ route('set.locale',['lang' => 'en']) }}">English</a>
    <a href="{{ route('set.locale',['lang' => 'fr']) }}">French</a>

    <h1>
        {{ __('localeinfo.hello') }}
        {{ __('localeinfo.world')}}
    </h1>
</body>
</html>