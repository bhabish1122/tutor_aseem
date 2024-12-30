<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>

    @if(session()->has('message'))
        <p>
            {{  session()->get('message') }}
        </p> 
    @endif

    {{-- <form action="{{ url('form/store/') }}" method="post"> --}}
    <form action="{{ route('update.data',['id' => $data->id]) }}" method="post">

        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" autocomplete="off"> --}}
        @csrf

        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name" id="name" value="{{ $data->name }}">
                </td>
                <td>
                    @error('name')
                        <span style="color:red">{{ $message }}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>
                        <input type="text" name="address" id="address" value="{{ $data->address }}">
                    </td>
                    <td>
                        @error("address")
                            <span style="color:red">{{ $message }}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="text" name="email" id="email" value="{{ $data->email }}">
                    </td>
                    <td>
                        @error("email")
                            <span style="color:red">{{ $message }}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                <td>
                    <button type="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>