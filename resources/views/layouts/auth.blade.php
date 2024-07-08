<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Auth &mdash; Stisla</title>

    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </section>
    </div>
</body>

</html>