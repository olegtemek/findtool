<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    @vite(['resources/scss/main.scss'])
    <script src="http://localhost:8098"></script>
</head>
<body>
    <div id="app">
        
    </div>

    @vite(['resources/js/app.js'])
</body>
</html>