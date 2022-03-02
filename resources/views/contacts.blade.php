<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            ul {
                display: flex;
                justify-content: center;
                list-style: none;
            }
            li {
                margin: 0 10px;
            }
            h1 {
                text-align: center;
            }
            a {
                text-decoration: none;
                color: #000;
            }
        </style>
    </head>
    <body>
        <header>
            <ul>
                @foreach($links as $key => $value)
                <li>
                    <a href="{{ $value }}">{{ $key }}</a>
                </li>
                @endforeach
            </ul>
        </header>
        <h1>{{ $title }}</h1>
    </body>
</html>