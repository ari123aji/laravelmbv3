<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('') ? 'active' : '' }}" aria-current="page" href="/">
              <span data-feather="home"></span>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a href="/documentation" class="nav-link {{ Request::is('documentation') ? 'active' : '' }}">
              <span data-feather="file-text"></span>
              Documentasi Musik
            </a>
          </li>
          <li class="nav-item">
            <a href="/tentang" class="nav-link {{ Request::is('tentang') ? 'active' : '' }}">
              <span data-feather="package"></span>
              Tentang Arranger
            </a>
          </li>
        </ul>
      </div>
    </nav>