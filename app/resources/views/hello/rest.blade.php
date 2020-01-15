<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello/Rest</title>

        <!-- Styles -->
        <style>
        body {
            font-size: 16pt;
            color: #999;
            margin: 5px;
        }
        h1 {
            font-size: 50pt;
            text-align: right;
            color: #f6f6f6;
            margin: -20px 0 -30px;
            letter-spacing: -4pt;
        }
        th {
            background-color: #999;
            color: #fff;
            padding: 5px 10px;
        }
        td {
            border: solid 1px #aaa;
            color: #999;
            padding: 5px 10px;
        }
        .content {
            margin: 10px;
        }
        </style>
    </head>
    <body>
    <h1>Rest</h1>

    @include('rest.create')
    </body>
</html>
