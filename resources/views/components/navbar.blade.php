<nav id="site-nav" class="fixed w-full z-40 top-0 transition-all duration-300 bg-[var(--color-primary-dark)] text-white">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-20">
      <div class="flex items-center">
        <a href="{{ route('home') }}" class="font-bold text-xl text-white logo">
          <span class="block">GROWBOX</span>
          <span class="block text-sm text-white/80">NEPAL</span>
        </a>
      </div>

      <div class="hidden md:flex space-x-6 items-center">
        <a href="{{ route('home') }}" class="text-sm text-white hover:text-[var(--color-accent)]">Home</a>
        <a href="{{ route('about') }}" class="text-sm text-white hover:text-[var(--color-accent)]">About</a>
        <a href="{{ route('services.index') }}" class="text-sm text-white hover:text-[var(--color-accent)]">Services</a>
        <a href="{{ route('projects.index') }}" class="text-sm text-white hover:text-[var(--color-accent)]">Projects</a>
        <a href="{{ route('team.index') }}" class="text-sm text-white hover:text-[var(--color-accent)]">Team</a>
        <a href="{{ route('blog.index') }}" class="text-sm text-white hover:text-[var(--color-accent)]">Blog</a>
      </div>

      <div class="flex items-center space-x-3">
        <a href="{{ route('contact') }}" class="inline-block px-4 py-2 rounded-md bg-[var(--color-accent)] text-black text-sm font-semibold">Let's Talk</a>
        <button class="md:hidden p-2 rounded-md bg-white/10">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</nav>
