<header class="mdl-layout__header blue darken-1">
  <div class="mdl-layout__header-row mdl-color-text--white-50">

    <span class="mdl-layout-title">Dashboard</span>
    <div class="mdl-layout-spacer"></div>

    <ul class="header-nav">
      <a href="#" class="header-nav-link"><li><span class="mdl-badge" data-badge="1"></span><i class="fa fa-flag"></i></li></a>
      <a href="#" class="header-nav-link"><li><span class="mdl-badge" data-badge="3"></span><i class="fa fa-server"></i></li></a>
      <a href="#" class="header-nav-link dropdown-button" data-activates='account-dropdown'><li><i class="fa fa-user"></i></li></a>
      <ul id='account-dropdown' class='dropdown-content'>
        <li><a href="#!">Link</a></li>
        <li><a href="#!">Link</a></li>
        <li><a href="#!">Link</a></li>
      </ul>
    </ul>

    <!-- Search field trigger -->
    <a class='btn-floating blue darken-3 z-depth-0' href='#' id="search-field-trigger"><i class="fa fa-search"></i></a>
  </div>

  <!-- Search form/field ... -->
  <div class="mdl-layout__header-row z-depth-1 nav-search-field teal" id="search-field">
    <input type="search" placeholder="Search for something here...">
    <button class="btn-flat"><i class="fa fa-search"></i></button>
  </div>
</header>