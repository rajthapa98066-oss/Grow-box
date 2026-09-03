<article class="bg-[var(--color-light-bg)] text-[var(--color-text)] rounded-lg overflow-hidden shadow">
  <a href="{{ route('projects.show', $project->slug) }}" class="block">
    <div class="p-4">
      <h3 class="font-semibold">{{ $project->title }}</h3>
      @if($project->category)
        <div class="text-sm text-[var(--color-muted)] mt-1">{{ $project->category->name }}</div>
      @endif
      <p class="mt-2 text-sm text-[var(--color-muted)]">{{ $project->description }}</p>
    </div>
  </a>
</article>
