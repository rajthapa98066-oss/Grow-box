@extends('layouts.app')

@section('title','Page not found')

@section('content')
<div class="pt-28 max-w-4xl mx-auto px-6 text-center">
  <h1 class="text-4xl font-bold">404</h1>
  <p class="mt-4 text-[var(--color-muted)]">Sorry, page not found.</p>
  <a href="{{ route('home') }}" class="mt-6 inline-block px-4 py-2 bg-[var(--color-accent)] rounded text-black">Back to home</a>
</div>
@endsection
