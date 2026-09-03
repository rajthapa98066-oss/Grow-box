@extends('layouts.app')

@section('title','Article — Growbox Nepal')

@section('content')
@include('components.page-hero', ['title' => $post->title, 'subtitle' => $post->excerpt])

<div class="max-w-4xl mx-auto px-6 pb-12 mt-8">
  <article class="bg-white p-6 rounded shadow">
    <header>
      <div class="text-sm text-[var(--color-muted)]">{{ $post->category?->name }} • {{ $post->published_at?->format('M j, Y') }}</div>
      <h1 class="text-2xl font-bold mt-2">{{ $post->title }}</h1>
    </header>

    <div class="mt-6 text-[var(--color-muted)]">{!! nl2br(e($post->content)) !!}</div>
  </article>
</div>
@endsection
