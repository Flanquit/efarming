<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      {{ Auth::user()->name }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
        <li class="nav-item{{ $activePage == 'user_management' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('user.index') }}">
                <i class="material-icons">manage_accounts</i>
                <p> {{ __('User Management') }} </p>
            </a>
        </li>
      <li class="nav-item{{ $activePage == 'farmers' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('farmers') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Farmers') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'categories' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('categories') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Categories') }}</p>
        </a>
      </li>

    </ul>
  </div>
</div>
