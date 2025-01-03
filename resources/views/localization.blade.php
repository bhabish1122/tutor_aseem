<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('locale',['lang'=>'np']) }}">Nepali</a>
    <a href="{{ route('locale',['lang'=>'en']) }}">English</a>
    <a href="{{ route('locale',['lang'=>'hi']) }}">Hindi</a>
    <a href="{{ route('locale',['lang'=>'chi']) }}">Chinese</a>
    <a href="{{ route('locale',['lang'=>'jp']) }}">Japanese</a>

    <h1>
        {{__('welcome.hello')}}
        {{__('welcome.this')}}
        {{__('welcome.is')}}
        {{__('welcome.my')}}
        {{__('welcome.first')}}
        {{__('welcome.localization')}}
        {{__('welcome.thank_you')}}
    </h1>

    <hr>
    <p>
        {{ __("welcome.paragraph") }}
    </p>
</body>
</html>