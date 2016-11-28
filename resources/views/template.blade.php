<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mailing List Filter and Import</title>
    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Roboto+Condensed" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/foundation.min.css" rel="stylesheet" type="text/css">
    <style>
        body {
            padding: 2rem 0;
            font-family: 'Roboto Condensed', sans-serif;
        }
        input[type="file"] {
            padding: 1rem;
            border: solid 1px #aaa;
        }
        h1, h2 {
            font-family: 'Bungee Inline', cursive;
        }
        h1 {
            font-size: 2rem;
        }
        h2 {
            font-size: 1.5rem;
            padding-bottom: 1rem;
            margin-bottom: 0;
            border-bottom: solid 1px #fff;
        }
        input[type="file"], .wrapper, .button {
            border-radius: 3px;
        }
        .warning {
            color: #900;
        }
        .wrapper {
            background-color: #eee;
            padding: 1rem 1rem 0.1rem;
            margin-bottom: 1.5rem;
        }
        .list {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .list li {
            padding: 0.5rem 0;
            border-bottom: solid 1px #fff;
        }
        .list li:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>

<div class="row align-middle">
    <div class="large-6 medium-8 small-12 columns large-offset-3 medium-offset-2 text-center">
        @yield('content')
    </div>
</div>

</body>
</html>