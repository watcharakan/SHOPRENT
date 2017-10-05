<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
    
    @if($image != null)
        <img src="{{ Storage::disk('local')->url($image) }}" alt="">
    @endif

    <form action="/upload" method="post" enctype="multipart/form-data">

        {{ csrf_field() }}

        <input type="file" name="user">
        <input type="submit">

    </form>

    </body>
</html>
