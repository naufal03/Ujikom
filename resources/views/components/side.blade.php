      <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
          <a>Admin Page</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
          <a>AP</a>
        </div>
        <ul class="sidebar-menu">
          <li class="menu-header">Admin</li>
          @if (Auth::user()->level == 'admin')
          <li><a class="nav-link" href="{{ route('kamar.index') }}"><i class="far fa-square"></i>
              <span>Kamar</span></a></li>
          <li><a class="nav-link" href="{{ route('faskam.index') }}"><i class="far fa-square"></i>
              <span>Fasilitas Kamar</span></a></li>
          <li><a class="nav-link" href="{{ route('fashot.index') }}"><i class="far fa-square"></i>
              <span>Fasilitas Hotel</span></a></li>
          <li><a class="nav-link" href="{{ route('resepsionis.index') }}"><i class="far fa-square"></i>
              <span>Resepsionis</span></a></li>
              @else
              tes
              @endif
      </aside>
