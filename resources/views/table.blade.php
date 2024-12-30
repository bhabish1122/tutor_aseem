<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
        <span style="font-size: 20px; font-weight:bold; margin-left:100px">
            
            ID
        
        </span>
        <span style="font-size: 20px; font-weight:bold; margin-left:100px">
            
                Name
            
        </span>
        <span style="font-size: 20px; font-weight:bold; margin-left:250px">
            
                Email
            
        </span>
        <span style="font-size: 20px; font-weight:bold; margin-left:250px">
            
                Address
            
        </span>
    </p>
    @foreach ($data as $index => $d)
        <p>
            <span style="font-size: 20px;  margin-left:100px">
                {{ $index+1 }}
            </span>
            <span style="font-size: 20px;  margin-left:100px">
                {{ $d->name }}
            </span>
            <span style="font-size: 20px;  margin-left:170px">
                {{ $d->email }}
            </span>
            <span style="font-size: 20px;  margin-left:150px">
                {{ $d->address }}
            </span>
        </p>
    @endforeach

    @if (session()->has('message'))
        <p style="color:green; text-align:center">
            {{ session()->get('message') }}
        </p>
    @endif


        <hr>

    <table width='100%'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        <?php
            $count = 1;
        ?>
        @foreach ($data as $d)            
            <tr>
                <td style="text-align: center">{{ $count }}</td>
                <td style="text-align: center">{{ $d->name }}</td>
                <td style="text-align: center">{{ $d->email }}</td>
                <td style="text-align: center">{{ $d->address }}</td>
                <td>
                    {{-- <a href="{{ url('edit/'.$d->id) }}">Edit</a> --}}
                    <a href="{{ route('edit.data',['id' => $d->id]) }}">Edit</a>


                    {{-- <a href="{{ url('delete/data/'.$d->id) }}">Delete</a> --}}
                    {{-- route takes two parameter first one is route's name second parameter is variable binding value --}}
                    <a href="{{ route('delete.data',['id' => $d->id]) }}">Delete</a> 
                </td>
           
            </tr>
            <?php
                $count++ 
            ?>
        @endforeach
    </table>
</body>
</html>