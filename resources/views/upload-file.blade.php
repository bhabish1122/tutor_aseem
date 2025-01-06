<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('upload.file') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" id="image">
        @error("image")
            <span>{{ $message }}</span>
        @enderror
        <button type="submit">Upload</button>
    </form>



    <table>
        @foreach($images as $image)
        <tr>
            <td>
                <img src="{{ asset('storage/uploads/'.$image) }}" alt="" srcset="">
            </td>
        </tr>
    </table>

</body>
</html>