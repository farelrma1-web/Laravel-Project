<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donasiku</title>

    @vite('resources/css/app.css')

</head>
<body class="bg-gray-100">

    @include('partials.header')

    <section class="text-center py-20 bg-green-500 text-white">
        <h1 class="text-4xl font-bold mb-4">Mari Berbagi Kebaikan bersama <p>Indoko Banderas</p></h1>
        <p>Bantu sesama dengan donasi yang mudah dan aman.</p>
    </section>

    
    @include('partials.footer')

</body>
</html>