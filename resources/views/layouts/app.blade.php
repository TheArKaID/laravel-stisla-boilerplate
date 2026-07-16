<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title') - Meridian</title>

    <link rel="icon" type="image/svg+xml" href='data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><style>.t{fill:%230a0a0a}.m{stroke:%23fafafa}@media (prefers-color-scheme: dark){.t{fill:%23fafafa}.m{stroke:%230a0a0a}}</style><rect class="t" width="512" height="512" rx="112"/><path class="m" d="M 392 144 H 200 A 56 56 0 0 0 200 256 H 312 A 56 56 0 0 1 312 368 H 120" fill="none" stroke-width="76" stroke-linecap="round" stroke-linejoin="round"/></svg>' />

    <script>
      // Apply the saved theme before first paint to avoid a flash.
      (function () {
        var t = localStorage.getItem("stisla-theme");
        if (t === "dark" || t === "light") document.documentElement.dataset.theme = t;
      })();
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" />

    @stack('styles')
    @livewireStyles

    <!-- Load ApexCharts before JS scripts so charts.js can see window.ApexCharts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3"></script>

    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="app-shell" data-stisla-app-shell data-stisla-app-shell-auto-collapse="true">
        @include('components.sidebar')

        <main class="app-shell__main">
            @include('components.header')

            @if(isset($slot))
                {{ $slot }}
            @else
                @yield('main')
            @endif
        </main>
    </div>

    @stack('scripts')
    @livewireScripts
</body>

</html>
