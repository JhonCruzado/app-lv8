<!doctype html>
<html lang=" {{ str_replace('_', '-', app()->getLocale()) }} ">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" value=" {{ csrf_token() }} "/>
        <title> Laravel + Vue </title>

        <!-- CDNs de Boostrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- CDNs de Font -Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
    </head>
    <body>
        <div id="app">

        </div>
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
