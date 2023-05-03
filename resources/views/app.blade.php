<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravue</title>
        @routes
        @vite('resources/js/app.js')
        @inertiaHead
    </head>
    <body class=" bg-white text-gray-800     dark:bg-gray-900 dark:text-gray-100 ">
    @inertia
    </body>
</html>
