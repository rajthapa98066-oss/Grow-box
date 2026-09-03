@extends('layouts.app')

@section('title','Growbox Nepal — Technology That Helps Your Business Grow')

@section('content')
<section class="pt-28 pb-16 bg-[var(--color-primary-dark)] text-white">
  <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
    <div>
      <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">Technology That Helps Your Business Grow.</h1>
      <p class="mt-6 text-lg text-white/80">Digital solutions, reliable IT services, and experienced people helping businesses move forward.</p>
      <div class="mt-8 flex space-x-4">
        <a href="{{ route('contact') }}" class="px-5 py-3 rounded-md bg-[var(--color-accent)] text-black font-semibold">Start a Project</a>
        <a href="{{ route('services.index') }}" class="px-5 py-3 rounded-md border border-white/20 text-white">Explore Our Services</a>
      </div>
    </div>

    <div class="relative">
      <div class="bg-white rounded-2xl p-6 text-[var(--color-text)] shadow-lg">
        <h3 class="font-semibold">Featured services</h3>
        <div class="mt-4 grid grid-cols-2 gap-3">
          @foreach($services as $service)
            <div class="rounded-lg p-3 bg-[var(--color-light-bg)] text-[var(--color-text)]">
              <div class="font-semibold">{{ $service->name }}</div>
              <div class="text-sm text-[var(--color-muted)]">{{ $service->excerpt }}</div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>

<section class="max-w-6xl mx-auto px-6 py-12">
  <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <div class="col-span-2">
      <h2 class="text-2xl font-bold">Technology should make business simpler.</h2>
      <p class="mt-4 text-[var(--color-muted)]">Growbox Nepal helps organizations solve technology problems without unnecessary complexity. Real people. Practical solutions.</p>
      <a href="{{ route('about') }}" class="inline-block mt-6 text-[var(--color-accent)] font-semibold">Learn About Us</a>
    </div>

    <div>
      <div class="bg-[var(--color-light-bg)] text-[var(--color-text)] p-6 rounded-lg shadow">
        <h4 class="font-semibold">Quick Stats</h4>
        <div class="grid grid-cols-2 gap-4 mt-4">
          <div><div class="text-2xl font-bold">{{ $stats['projects'] }}</div><div class="text-sm text-[var(--color-muted)]">Projects Delivered</div></div>
          <div><div class="text-2xl font-bold">{{ $stats['clients'] }}</div><div class="text-sm text-[var(--color-muted)]">Happy Clients</div></div>
          <div><div class="text-2xl font-bold">{{ $stats['experts'] }}</div><div class="text-sm text-[var(--color-muted)]">Technology Experts</div></div>
          <div><div class="text-2xl font-bold">{{ $stats['years'] }}</div><div class="text-sm text-[var(--color-muted)]">Years Experience</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
