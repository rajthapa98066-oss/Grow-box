@extends('layouts.app')

@section('title', $service->name . ' — Growbox Nepal')

@section('content')
@include('components.page-hero', ['title' => $service->name, 'subtitle' => $service->excerpt])

<div class="max-w-4xl mx-auto px-6 pb-12 mt-8">
  <div class="bg-white p-8 rounded-lg shadow">
    <p class="text-[var(--color-muted)]">{{ $service->description }}</p>

    @if($service->features)
      <h3 class="mt-6 font-semibold">Features</h3>
      <ul class="mt-2 list-disc list-inside text-[var(--color-muted)]">
        @foreach($service->features as $f)
          <li>{{ $f }}</li>
        @endforeach
      </ul>
    @endif

    <div class="mt-6">
      <a href="{{ route('contact') }}" class="px-4 py-2 rounded bg-[var(--color-accent)] text-black font-semibold">Inquire about this service</a>
    </div>
  </div>
</div>

@endsection
