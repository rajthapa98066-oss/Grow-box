@extends('layouts.app')

@section('title','Team — Growbox Nepal')

@section('content')
@include('components.page-hero', ['title' => 'People who build things.', 'subtitle' => 'Meet the team of technologists, designers, and problem solvers at Growbox Nepal.'])

<div class="max-w-6xl mx-auto px-6 pb-12 mt-8">
  <div class="mb-6">
    <h2 class="text-2xl font-bold">Our team</h2>
    <p class="text-[var(--color-muted)] mt-2">We are a small team of engineers, designers, and IT specialists who care about practical outcomes. We collaborate closely with clients, focusing on reliability, clarity, and long-term value.</p>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($members as $member)
      @include('components.team-card', ['member' => $member])
    @endforeach
  </div>

  <div class="mt-8">@include('components.cta-section')</div>
</div>
@endsection
