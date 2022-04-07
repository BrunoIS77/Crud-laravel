<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container{
            width: 660px;
            margin-top: 10px;
            margin: 0 auto;
            padding-top: 20px;
            padding-left: 10px;
            padding-bottom: 20px;
            border-radius: 4px;
            border: 1px solid black
        }
        input[type="text"]{
            display: inline-block;
            width: 600px;
            padding: 10px;
        }
        input[type="email"]{
            display: block;
            width: 600px;
            padding: 10px;
            opacity: 0.6;
            margin-top: 8px;
        }
        label{
            margin-top: 10px;
        }
        select{
            display: block;
            width: 80px;
        }
        th{
            font-family: Georgia, 'Times New Roman', Times, serif;
            background-color: rgb(53, 50, 50);
        }
        td{
            padding: 10px;
            background-color: grey;
        }
        table{
            width: 600px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    @yield('contents')
</body>
</html>