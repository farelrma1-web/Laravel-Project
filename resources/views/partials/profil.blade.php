<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Donasiku</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    {{-- HEADER --}}
    @include('partials.header')

    <!-- PROFIL -->
    <section class="container mx-auto py-16">
        <div class="bg-white p-8 rounded-lg shadow">
            <h1 class="text-3xl font-bold text-green-600 mb-4">Tentang Donasiku</h1>
            
            <p class="text-gray-600 mb-4">
                Donasiku adalah platform donasi online yang bertujuan untuk membantu masyarakat 
                dalam menyalurkan bantuan kepada yang membutuhkan dengan mudah, cepat, dan transparan.
            </p>

            <p class="text-gray-600 mb-4">
                Kami percaya bahwa setiap bantuan, sekecil apapun, dapat memberikan dampak besar 
                bagi mereka yang membutuhkan.
            </p>

            <h2 class="text-xl font-semibold mt-6 mb-2">Visi</h2>
            <p class="text-gray-600">
                Menjadi platform donasi terpercaya di Indonesia.
            </p>

            <h2 class="text-xl font-semibold mt-6 mb-2">Misi</h2>
            <ul class="list-disc ml-6 text-gray-600">
                <li>Mempermudah proses donasi</li>
                <li>Menjaga transparansi dana</li>
                <li>Meningkatkan kepedulian sosial</li>
            </ul>
        </div>
    </section>

    {{-- FOOTER --}}
    @include('partials.footer')

</body>
</html>