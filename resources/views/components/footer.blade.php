<footer class="bg-[var(--color-primary-dark)] text-white mt-12">
  <div class="max-w-6xl mx-auto py-12 px-6 grid grid-cols-1 md:grid-cols-3 gap-8">
    <div>
      <h3 class="font-bold text-lg">GROWBOX NEPAL</h3>
      <p class="mt-2 text-sm text-white/80">Real people. Practical solutions. Reliable technology.</p>
    </div>

    <div>
      <h4 class="font-semibold">Services</h4>
      <ul class="mt-3 space-y-2 text-sm text-white/80">
        <li><a href="{{ route('services.index') }}">Web Development</a></li>
        <li><a href="/projects">Projects</a></li>
        <li><a href="/team">Team</a></li>
        <li><a href="/blog">Blog</a></li>
      </ul>
    </div>

    <div>
      <h4 class="font-semibold">Contact</h4>
      <p class="mt-3 text-sm text-white/80">Email: <a href="mailto:hello@growboxnepal.com">hello@growboxnepal.com</a></p>
      <p class="mt-1 text-sm text-white/80">Kathmandu, Nepal</p>
    </div>
  </div>

  <div class="bg-black/20 text-white/70 py-4">
    <div class="max-w-6xl mx-auto px-6 flex items-center justify-between text-sm">
      <div>© {{ date('Y') }} Growbox Nepal. All rights reserved.</div>
      <div class="space-x-4">
        <a href="/privacy">Privacy Policy</a>
        <a href="/terms">Terms & Conditions</a>
      </div>
    </div>
  </div>
</footer>
