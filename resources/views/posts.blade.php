<!DOCTYPE html>
<html>
    <head>
        <title>Posts Page</title>
    </head>
    <body>
        <h1>POST</h1>
        <ul>
            @foreach($posts as $p)
                <li>{{$p['title']}}: {{$p['content']}}</li>
            @endforeach
        </ul>
    </body>
</html>