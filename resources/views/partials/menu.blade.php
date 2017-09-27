<nav class="nav has-shadow">
    <div class="container">
        <div class="nav-left">
            <a class="nav-item">
                <img class="logo-mobile" src="/images/logo.png" alt="Amby logo">
                <img class="logo" src="/images/logo.svg" alt="Amby logo">
            </a>
        </div>

        <!-- This "nav-toggle" hamburger menu is only visible on mobile -->
        <!-- You need JavaScript to toggle the "is-active" class on "nav-menu" -->
        <span class="nav-toggle" @click="toggleMobileMenu">
      <span></span>
      <span></span>
      <span></span>
    </span>

        <!-- This "nav-menu" is hidden on mobile -->
        <!-- Add the modifier "is-active" to display it on mobile -->
        <div class="nav-right nav-menu" :class="mobileMenuIsActive ? 'is-active' : ''">
            <a href="{{ route('home') }}" class="nav-item">
                Home
            </a>
            <a href="{{ route('dienstencheques') }}" class="nav-item">
                Dienstencheques
            </a>
            <a href="{{ route('diensten') }}" class="nav-item">
                Diensten
            </a>
            <a href="{{ route('kantoren') }}" class="nav-item">
                Kantoren
            </a>
            <a href="{{ route('werken') }}" class="nav-item">
                Werken bij Amby
            </a>

            <a class="nav-item" href="https://www.facebook.com/AmbyDienstencheques" target="_blank">
                | <i class="menu-fb fa fa-facebook-square"></i>
            </a>

        </div>
    </div>
</nav>