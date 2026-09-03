@extends('layouts.app')

@section('title','Project — Growbox Nepal')

@section('content')
@include('components.page-hero', ['title' => $project->title, 'subtitle' => $project->category?->name])

<div class="max-w-4xl mx-auto px-6 pb-12 mt-8">
  <div class="bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold">{{ $project->title }}</h1>
    <p class="mt-4 text-[var(--color-muted)]">{{ $project->description }}</p>

    @if($project->technologies)
      <h3 class="mt-6 font-semibold">Technologies</h3>
      <ul class="flex flex-wrap gap-2 mt-2">
        @foreach($project->technologies as $tech)
          <li class="px-2 py-1 bg-[var(--color-light-bg)] text-[var(--color-text)] rounded text-sm">{{ $tech }}</li>
        @endforeach
      </ul>
    @endif
  </div>
</div>
@endsection
