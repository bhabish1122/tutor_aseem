<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
        echo "using php: ".$name
    ?>

    <h1>Homepage</h1>
    {{-- For Printing/ Echoing --}}
    {{ $name }} {{-- echoing --}}

    {{ $age }}

    @if($age > 18)
        <h1>You are an adult</h1>
    @elseif($age > 13 && $age < 18)
        <h1>You are an Teen</h1>
    @else  
        <h1>You are an CHild</h1>
    @endif


    {!! $button !!}


    @foreach($students as $student)
    <p>
        <strong>
            {!! $student !!}
        </strong>
    </p>
    @endforeach


    @for($i = 0; $i < count($students); $i++)
        <p> {{ $students[$i] }} </p>
    @endfor


    @php
        $int =10 
    @endphp

    <?php
        echo $int
    ?>
    

</body>
</html>