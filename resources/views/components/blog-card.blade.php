<article class="bg-[var(--color-light-bg)] text-[var(--color-text)] rounded-lg overflow-hidden shadow">
  <a href="{{ route('blog.show', $post->slug) }}" class="block p-4">
    <div class="text-sm text-[var(--color-muted)]">{{ $post->category?->name }}</div>
    <h3 class="font-semibold mt-1">{{ $post->title }}</h3>
    <p class="mt-2 text-sm text-[var(--color-muted)]">{{ $post->excerpt }}</p>
  </a>
</article>
