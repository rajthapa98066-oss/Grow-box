@extends('layouts.app')

@section('title','Contact — Growbox Nepal')

@section('content')
@include('components.page-hero', ['title' => 'Have a technology challenge?', 'subtitle' => "Let's talk about how Growbox Nepal can help you solve it."])

<div class="max-w-4xl mx-auto px-6 pb-12 mt-8">
  <div class="bg-white p-8 rounded-lg shadow">
    @if(session('success'))
      <div class="mt-4 p-4 bg-green-50 border border-green-200 text-green-800">{{ session('success') }}</div>
    @endif

    <form action="{{ route('inquiries.store') }}" method="POST" class="mt-6 space-y-4">
      @csrf
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm">Full Name *</label>
          <input name="name" value="{{ old('name') }}" class="mt-1 w-full border rounded p-2" required>
        </div>
        <div>
          <label class="block text-sm">Email *</label>
          <input name="email" type="email" value="{{ old('email') }}" class="mt-1 w-full border rounded p-2" required>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm">Phone</label>
          <input name="phone" value="{{ old('phone') }}" class="mt-1 w-full border rounded p-2">
        </div>
        <div>
          <label class="block text-sm">Company / Organization</label>
          <input name="company" value="{{ old('company') }}" class="mt-1 w-full border rounded p-2">
        </div>
      </div>

      <div>
        <label class="block text-sm">Service Interested In *</label>
        <select name="service_id" class="mt-1 w-full border rounded p-2">
          <option value="">Select a service</option>
          @foreach($services as $s)
            <option value="{{ $s->id }}" @if(old('service_id')==$s->id) selected @endif>{{ $s->name }}</option>
          @endforeach
        </select>
      </div>

      <div>
        <label class="block text-sm">Message *</label>
        <textarea name="message" class="mt-1 w-full border rounded p-2" rows="6" required>{{ old('message') }}</textarea>
      </div>

      <div class="flex items-center">
        <input type="checkbox" name="agree" id="agree" class="mr-2" required>
        <label for="agree" class="text-sm">I agree to the <a href="/privacy" class="text-[var(--color-accent)]">Privacy Policy</a>.</label>
      </div>

      <div>
        <button type="submit" class="px-4 py-2 rounded bg-[var(--color-accent)] text-black font-semibold">Send Inquiry</button>
      </div>
    </form>
  </div>
</div>

@endsection
