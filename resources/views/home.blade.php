  <section class="section">
    @if (Auth::user()->level == 'admin')
    <div class="section">
        @include('pages.dashboard')
    </div>
    @elseif (Auth::user()->level == 'customer')
      @include('landing.index')
    @endif

  </section>
