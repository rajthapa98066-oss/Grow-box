@extends('layouts.app')

@section('title','Team Member — Growbox Nepal')

@section('content')
@include('components.page-hero', ['title' => $member->name, 'subtitle' => $member->position])

<div class="max-w-4xl mx-auto px-6 pb-12 mt-8">
  <div class="bg-white p-6 rounded shadow">
    <div class="flex gap-6">
      <div class="w-40 h-40 bg-[var(--color-light-bg)] text-[var(--color-text)] rounded-lg flex items-center justify-center">Photo</div>
      <div>
        <h2 class="text-xl font-semibold">{{ $member->name }}</h2>
        <div class="text-sm text-[var(--color-muted)]">{{ $member->position }}</div>
        <p class="mt-4 text-[var(--color-muted)]">{{ $member->bio }}</p>
      </div>
    </div>
  </div>
</div>
@endsection
