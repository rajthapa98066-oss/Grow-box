<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Growbox Nepal')</title>
    <meta name="description" content="Growing Businesses Through Technology">
    <meta name="description" content="@yield('meta_description','Growing Businesses Through Technology')">
    <meta property="og:title" content="@yield('title','Growbox Nepal')" />
    <meta property="og:description" content="@yield('meta_description','Growing Businesses Through Technology')" />
    @vite(['resources/css/app.css','resources/js/app.js'])
        <style>
            /* Navbar color shift when scrolled */
            #site-nav.scrolled a { color: var(--color-text) !important; }
            #site-nav.scrolled .logo { color: var(--color-text) !important; }
        </style>
</head>
<body class="antialiased bg-[var(--color-light-bg)] text-[var(--color-text)]">
    @include('components.navbar')

    <main class="min-h-screen">
        @yield('content')
    </main>

    @include('components.footer')

    <script>
        // Simple scroll shrink navbar
        (function(){
            const nav = document.querySelector('#site-nav');
            let lastScroll = 0;
            window.addEventListener('scroll', function(){
                const sc = window.scrollY;
                if(sc > 60) nav.classList.add('shadow-md','bg-white/70','backdrop-blur','scrolled'); else nav.classList.remove('shadow-md','bg-white/70','backdrop-blur','scrolled');
                if(sc > lastScroll && sc > 100) nav.classList.add('-[transform:translateY(-8px)]'); else nav.classList.remove('-translate-y-2');
                lastScroll = sc;
            }, {passive:true});
        })();
    </script>
</body>
</html>
