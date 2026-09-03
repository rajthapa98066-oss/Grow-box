<article class="bg-[var(--color-light-bg)] text-[var(--color-text)] rounded-lg overflow-hidden shadow p-4">
  <a href="{{ route('team.show', $member->slug) }}">
    <div class="flex items-center space-x-4">
      <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center text-sm text-[var(--color-muted)]">Photo</div>
      <div>
        <div class="font-semibold">{{ $member->name }}</div>
        <div class="text-sm text-[var(--color-muted)]">{{ $member->position }}</div>
      </div>
    </div>
  </a>
</article>
