@extends('layouts.app')

@section('title','Services — Growbox Nepal')

@section('content')
@include('components.page-hero', ['title' => 'What We Do', 'subtitle' => 'Technology services designed around your business.'])

<div class="max-w-6xl mx-auto px-6 pb-12 mt-8">
  <div class="bg-white p-6 rounded-lg shadow">
    <div class="mb-4">
      <h2 class="text-2xl font-bold">What can we help you with?</h2>
      <p class="text-[var(--color-muted)]">Every organization has different technology requirements. Some need a website that represents their business. Others need a custom system to replace manual processes. Some need reliable networks and infrastructure, while others need ongoing technical support. Our services cover the different parts of your technology journey.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach($services as $service)
        <article class="p-6 rounded-lg bg-[var(--color-light-bg)] text-[var(--color-text)] shadow hover:shadow-lg transition">
          <div class="font-semibold">{{ $service->name }}</div>
          <div class="mt-2 text-sm text-[var(--color-muted)]">{{ $service->excerpt }}</div>
          <div class="mt-3 text-sm text-[var(--color-muted)]">
            @if($service->features)
              <ul class="list-disc list-inside">
                @foreach(array_slice($service->features,0,4) as $f)
                  <li>{{ $f }}</li>
                @endforeach
              </ul>
            @endif
          </div>
          <div class="mt-4"><a href="{{ route('services.show', $service->slug) }}" class="text-[var(--color-accent)] font-semibold">Learn more →</a></div>
        </article>
      @endforeach
    </div>

    <div class="mt-6">{{ $services->links() }}</div>
  </div>
  @include('components.cta-section')
</div>

@endsection
