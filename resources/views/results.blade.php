<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>Results</title>

    </head>
    <body>

        <div class="results">
            <div>
                <h3>{{ $result[0] -> name}}</h3>
                <p>{{ $result[0] -> description}}</p>
                   
            </div>
            <h4>Other suggestions: </h4>
            <p>
            @for($i = 1; $i < count( $result ); $i++)
                    {{ $result[$i] -> name}}</br>
            @endfor
            </p>
        </div>

        <div class="userArray">
            @foreach ($userArray as $u)
                {{ $u }}
            @endforeach
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    </body>
</html>
