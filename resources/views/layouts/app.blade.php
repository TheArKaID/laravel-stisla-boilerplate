<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title') - Stisla</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&display=swap" />

    @stack('styles')

    @vite(['resources/js/app.js'])
</head>

<body>
    @include('components.header')

    <button class="button button--sm button--round button--neutral fixed bottom-4 right-4 z-9999 lg:hidden" data-stisla-sidebar-toggle="collapse" aria-controls="site-sidebar">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-panel-left-open mr-1.5 size-4 inline" aria-hidden="true"><rect width="18" height="18" x="3" y="3" rx="2"></rect><path d="M9 3v18"></path><path d="m14 9 3 3-3 3"></path></svg>
        Sidebar
    </button>

    <div class="site-layout" data-stisla-sidebar-container>
        @include('components.sidebar')

        <div class="site-backdrop" hidden="" data-stisla-sidebar-toggle="collapse" aria-controls="site-sidebar"></div>

        <main class="site-main">
            @yield('main')

            @include('components.footer')
        </main>
    </div>

    @stack('scripts')
</body>

</html>
