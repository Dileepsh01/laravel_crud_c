<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>

<body>

    <div class="relative overflow-x-auto mt-3">

        @if ($post)
        <div class="text-center bg-purple-800 text-white p-8 font-serif text-3xl h-72">
            <h1> <b> Name: </b> {{$post->fullname}}</h1>
            <h1> <b> email:</b> {{$post->email}} </h1>
            <h1> <b> password:</b> {{$post->password}} </h1>
            <h1> <b> number:</b> {{$post->phone}} </h1>
        </div>

        @else
        <h1>user not found</h1>

        @endif







    </div>


</body>

</html>
