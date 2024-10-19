<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
  <div class="container">
    <div class="navbar-translate">
      <a class="navbar-brand" href="/" rel="tooltip" title="Designed by Invision. Coded by Creative Tim" data-placement="bottom" target="_blank">
        PROGACCUM
      </a>
      <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar top-bar"></span>
        <span class="navbar-toggler-bar middle-bar"></span>
        <span class="navbar-toggler-bar bottom-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="#" class="nav-link " id="navbarDropdownMenuLink1" data-toggle="dropdown">
            <p>Upgrade Premium</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
            <i class="fab fa-twitter"></i>
            <p class="d-lg-none d-xl-none">Twitter</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
            <i class="fab fa-facebook-square"></i>
            <p class="d-lg-none d-xl-none">Facebook</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
            <i class="fab fa-instagram"></i>
            <p class="d-lg-none d-xl-none">Instagram</p>
          </a>
        </li>

        @if (Route::has('login'))
        @auth

        <li class="nav-item">
          <a class="nav-link" href="">
            {{ Auth::user()->name }}
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link" rel="tooltip" title="Log out" data-placement="bottom" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa-solid fa-right-from-bracket"></i>
          </a>
        </li>
        <form method="POST" action="{{ route('logout') }}" id="logout-form">
          @csrf
          <x-dropdown-link :href="route('logout')"
            onclick="event.preventDefault();
                                    this.closest('form').submit();">
          </x-dropdown-link>
        </form>


        @else
        <li class="nav-item">
          <a
            href="{{ route('login') }}"
            class="nav-link rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
            Log in
          </a>
        </li>


        @if (Route::has('register'))
        <li class="nav-item">
          <a
            href="{{ route('register') }}"
            class="nav-link rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
            Register
          </a>
        </li>

        @endif
        @endauth
        <!-- </nav> -->
        @endif
      </ul>
    </div>
  </div>
</nav>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var navbar = document.querySelector('nav.navbar');
    var colorOnScroll = 400; // Scroll threshold

    window.addEventListener('scroll', function() {
      if (window.scrollY > colorOnScroll) {
        navbar.classList.remove('navbar-transparent');
      } else {
        navbar.classList.add('navbar-transparent');
      }
    });
  });
</script>