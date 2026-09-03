<section class="pt-28 pb-8 bg-[var(--color-primary-dark)] text-white">
  <div class="max-w-6xl mx-auto px-6">
    <h1 class="text-3xl md:text-4xl font-bold">{{ $title }}</h1>
    @if(!empty($subtitle))
      <p class="mt-2 text-white/80">{{ $subtitle }}</p>
    @endif
  </div>
</section>
