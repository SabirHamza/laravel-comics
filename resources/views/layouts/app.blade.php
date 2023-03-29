<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}</title>

    @vite('resources/js/app.js')
</head>
<body>
    <section>

        @yield('header')

    </section>

    <main>
        <section class="sectioncomic">
    
            @include('partials.main')
    
        </section>
    </main>

    <section class="feature">

        @yield('homepage')

    </section>

</body>
</html>