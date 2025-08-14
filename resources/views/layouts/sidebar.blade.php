{{-- Sidebar Menu --}}
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
      <a href="{{ route('dashboard') }}" class="nav-link {{ ($page['parent'] == '') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
      </a>
    </li>
        <li class="nav-item has-treeview {{ ($page['parent'] == 'election') ? 'menu-open' : '' }}">
      <a href="#" class="nav-link {{ ($page['parent'] == 'election') ? 'active' : '' }}">
        <i class="nav-icon fas fa-book"></i>
        <p>Field 2 <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="" class="nav-link {{ ($page['child'] == 'election') ? 'active' : '' }}">
            <i class="nav-icon fas fa-eye"></i>
            <p>Sub Field 1</p>
          </a>
        </li>
      </ul>
            <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="" class="nav-link {{ ($page['child'] == 'election') ? 'active' : '' }}">
            <i class="nav-icon fas fa-eye"></i>
            <p>Sub Field 1</p>
          </a>
        </li>
    </li>
  </ul>
</nav>
