@extends('layouts.app')

@section('title','Projects — Growbox Nepal')

@section('content')
@include('components.page-hero', ['title' => 'Work that turns ideas into reality.', 'subtitle' => 'Every project starts with a problem, an idea, or an opportunity. We use technology to turn those starting points into useful, working solutions.'])

<div class="max-w-6xl mx-auto px-6 pb-12 mt-8">
  <div class="mb-8">
    <h2 class="text-2xl font-bold">What we've been building.</h2>
    <p class="text-[var(--color-muted)] mt-2">From websites and software platforms to IT infrastructure and digital solutions, our projects focus on solving practical problems. Explore some of the work we've built and the technologies behind it.</p>
  </div>

  @if($projects->first())
    <div class="mb-6 grid grid-cols-1 lg:grid-cols-3 gap-6">
      <div class="lg:col-span-2 bg-white p-6 rounded shadow">
        <h3 class="font-semibold">Featured project</h3>
        <h2 class="text-xl font-bold mt-2">{{ $projects->first()->title }}</h2>
        <p class="mt-3 text-[var(--color-muted)]">{{ $projects->first()->description }}</p>
        <a href="{{ route('projects.show', $projects->first()->slug) }}" class="mt-4 inline-block text-[var(--color-accent)]">View Project →</a>
      </div>
      <div class="bg-[var(--color-light-bg)] text-[var(--color-text)] p-6 rounded shadow">
        <h4 class="font-semibold">Category</h4>
        <div class="text-sm text-[var(--color-muted)] mt-2">{{ $projects->first()->category?->name }}</div>
      </div>
    </div>
  @endif

  <div class="mb-6 flex items-center justify-between">
    <div class="space-x-2">
      <a href="{{ route('projects.index') }}" class="px-3 py-1 rounded bg-[var(--color-accent)] text-black text-sm">All</a>
      @foreach($categories as $c)
        <a href="{{ route('projects.index') }}?category={{ $c->slug }}" class="px-3 py-1 rounded bg-white/60 text-sm">{{ $c->name }}</a>
      @endforeach
    </div>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($projects as $project)
      @include('components.project-card', ['project' => $project])
    @endforeach
  </div>

  <div class="mt-6">{{ $projects->withQueryString()->links() }}</div>
  @include('components.cta-section')
</div>
@endsection
