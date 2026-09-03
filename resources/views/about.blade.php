@extends('layouts.app')

@section('title','About — Growbox Nepal')

@section('content')
@include('components.page-hero', ['title' => 'Technology built around people.', 'subtitle' => 'Company story, mission, vision, values.'])

<div class="max-w-6xl mx-auto px-6 pb-12 mt-8">
  <div class="bg-white p-8 rounded-lg shadow">
    <section>
      <h2 class="text-xl font-semibold">We believe technology should make things easier.</h2>
      <p class="mt-3 text-[var(--color-muted)]">Technology should not create unnecessary complexity.

At <strong>Growbox Nepal</strong>, we work with businesses, organizations, and individuals to understand their challenges and turn them into practical technology solutions.

From websites and custom software to networks, infrastructure, cloud services, and IT support, our team approaches every project with the same goal:</p>

      <blockquote class="mt-4 p-4 bg-[var(--color-light-bg)] text-[var(--color-text)] rounded"> <strong>Build technology that works for people, not the other way around.</strong></blockquote>

      <p class="mt-4 text-[var(--color-muted)]">We take the time to understand the problem before recommending a solution. This allows us to focus on what actually matters: reliability, usability, security, and long-term value.</p>
    </section>

    <section class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-6 items-center">
      <div>
        <h3 class="text-lg font-semibold">Built with a simple idea.</h3>
        <p class="mt-2 text-[var(--color-muted)]">Growbox Nepal was created around a simple idea: technology should help people and businesses grow. Many organizations know they need better technology but don't always know where to start. That's where we come in. We bring together people with different technical skills and perspectives to help clients navigate technology with confidence.</p>
      </div>
      <div class="bg-[var(--color-light-bg)] text-[var(--color-text)] h-48 rounded-lg flex items-center justify-center">Growbox Nepal technology team collaborating (image placeholder)</div>
    </section>

    <section class="mt-8">
      <h3 class="text-lg font-semibold">Make technology practical, accessible, and useful.</h3>
      <p class="mt-2 text-[var(--color-muted)]">Our mission is to provide dependable IT services that help businesses and organizations solve real problems.</p>
      <ul class="mt-3 grid grid-cols-1 sm:grid-cols-2 gap-3 text-[var(--color-muted)]">
        <li>Understanding our clients before proposing solutions</li>
        <li>Building reliable and maintainable systems</li>
        <li>Using technology that fits the actual requirement</li>
        <li>Providing clear communication throughout a project</li>
        <li>Supporting clients beyond the initial implementation</li>
        <li>Continuously learning and improving</li>
      </ul>
    </section>

    <section class="mt-8">
      <h3 class="text-lg font-semibold">A future where every growing business can use technology with confidence.</h3>
      <p class="mt-2 text-[var(--color-muted)]">We want Growbox Nepal to become a trusted technology partner for businesses and organizations looking to build, improve, and maintain their digital infrastructure. Our vision isn't simply to deliver software or IT services. It's to build long-term relationships around technology.</p>
    </section>

    <section class="mt-8">
      <h3 class="text-lg font-semibold">What guides our work.</h3>
      <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="p-4 bg-[var(--color-light-bg)] rounded">
          <h4 class="font-semibold">People First</h4>
          <p class="text-[var(--color-muted)] mt-1">Technology exists to serve people. We design our solutions around the people who will actually use them.</p>
        </div>
        <div class="p-4 bg-[var(--color-light-bg)] rounded">
          <h4 class="font-semibold">Do It Right</h4>
          <p class="text-[var(--color-muted)] mt-1">We value quality, reliability, security, and maintainability over shortcuts.</p>
        </div>
        <div class="p-4 bg-[var(--color-light-bg)] rounded">
          <h4 class="font-semibold">Keep It Practical</h4>
          <p class="text-[var(--color-muted)] mt-1">The most complicated solution isn't always the best one. We focus on what solves the problem effectively.</p>
        </div>
        <div class="p-4 bg-[var(--color-light-bg)] rounded">
          <h4 class="font-semibold">Stay Curious</h4>
          <p class="text-[var(--color-muted)] mt-1">Technology constantly changes. We continue learning, experimenting, and adapting.</p>
        </div>
        <div class="p-4 bg-[var(--color-light-bg)] rounded">
          <h4 class="font-semibold">Be Transparent</h4>
          <p class="text-[var(--color-muted)] mt-1">Clear communication builds better projects and stronger relationships.</p>
        </div>
        <div class="p-4 bg-[var(--color-light-bg)] rounded">
          <h4 class="font-semibold">Grow Together</h4>
          <p class="text-[var(--color-muted)] mt-1">Our clients' growth is part of our success. We aim to build relationships that last beyond a single project.</p>
        </div>
      </div>
    </section>

    <section class="mt-8">
      <h3 class="text-lg font-semibold">More than a technology vendor.</h3>
      <p class="mt-2 text-[var(--color-muted)]">When you work with Growbox Nepal, you aren't simply purchasing a software product or an IT service. You're working with a team that wants to understand your business.</p>
      <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-4 text-[var(--color-muted)]">
        <div>
          <h4 class="font-semibold">We listen.</h4>
          <p>We understand the problem before suggesting a solution.</p>
        </div>
        <div>
          <h4 class="font-semibold">We explain.</h4>
          <p>We communicate technical decisions in language that makes sense.</p>
        </div>
        <div>
          <h4 class="font-semibold">We build.</h4>
          <p>We create solutions around your actual requirements.</p>
        </div>
        <div>
          <h4 class="font-semibold">We support.</h4>
          <p>We remain available to help maintain and improve what we build.</p>
        </div>
      </div>
    </section>
  </div>
  @include('components.cta-section')
</div>
@endsection
