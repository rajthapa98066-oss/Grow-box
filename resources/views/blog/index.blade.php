@extends('layouts.app')

@section('title','Blog — Growbox Nepal')

@section('content')
@include('components.page-hero', ['title' => 'Blog', 'subtitle' => 'Insights, updates, and technical articles from Growbox Nepal.'])

<div class="max-w-6xl mx-auto px-6 pb-12 mt-8">
  <div class="mb-6">
    <h2 class="text-2xl font-bold">From our team</h2>
    <p class="text-[var(--color-muted)] mt-2">We share practical advice, technical articles, and updates about projects and operations. Our posts aim to be useful to business owners, technical leads, and curious learners.</p>
  </div>

  <div class="mb-6 flex items-center justify-between">
    <div class="space-x-2">
      <a href="{{ route('blog.index') }}" class="px-3 py-1 rounded bg-[var(--color-accent)] text-black text-sm">All</a>
      @foreach($categories as $c)
        <a href="{{ route('blog.index') }}?category={{ $c->slug }}" class="px-3 py-1 rounded bg-white/60 text-sm">{{ $c->name }}</a>
      @endforeach
    </div>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    @foreach($posts as $post)
      @include('components.blog-card', ['post'=>$post])
    @endforeach
  </div>

  <div class="mt-6">{{ $posts->withQueryString()->links() }}</div>
  @include('components.cta-section')
</div>
@endsection
