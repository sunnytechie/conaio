<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="{{ route('dashboard') }}" class="app-brand-link">
        <span class="app-brand-logo demo">
          {{-- Logo Image --}}
          <img width="40" height="40" src="{{ asset('assets/img/favicon/Untitled_design__20_-removebg-preview.png') }}" alt="Conaio">
        </span>
        <span class="app-brand-text demo menu-text fw-bolder ms-2">Conaio</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item active">
        <a href="{{ route('dashboard') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>

   
      <li class="menu-item">
        <a href="#" class="menu-link">
          <i class="menu-icon tf-icons bx bx-bible"></i>
          <div data-i18n="Tables">Prayer Request</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="#" class="menu-link">
          <i class="menu-icon tf-icons bx bx-user-voice"></i>
          <div data-i18n="Tables">Testimonies</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="#" class="menu-link">
          <i class="menu-icon tf-icons bx bx-donate-heart"></i>
          <div data-i18n="Tables">Donate</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="#" class="menu-link">
          <i class="menu-icon tf-icons bx bx-bell-plus"></i>
          <div data-i18n="Tables">Bible through a year</div>
        </a>
      </li>
    </ul>
  </aside>
  <!-- / Menu -->