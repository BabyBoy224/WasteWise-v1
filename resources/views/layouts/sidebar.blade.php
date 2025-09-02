{{-- Sidebar Menu --}}
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Dashboard -->
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ ($page['parent'] ?? '') == '' ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>

        <!-- Barangays -->
        <li class="nav-item">
            <a href="{{ route('barangays.index') }}"
                class="nav-link {{ ($page['parent'] ?? '') == 'election' ? 'active' : '' }}">
                <i class="nav-icon fas fa-book"></i>
                <p>Barangays</p>
            </a>
        </li>

        <!-- Schedules -->
        <li class="nav-item">
            <a href="{{ route('schedules.index') }}"
                class="nav-link {{ ($page['parent'] ?? '') == 'schedules' ? 'active' : '' }}">
                <i class="nav-icon fas fa-calendar-alt"></i>
                <p>Schedules</p>
            </a>
        </li>

    </ul>
</nav>