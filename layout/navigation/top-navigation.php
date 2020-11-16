

<!--Component:DesktopNavbar -->
<nav class="mb-0 navbar navbar-expand-lg px-md-5 desktop-nav">
  <a class="navbar-brand my-logo" href="#">My Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <div class="d-flex align-items-end w-100  bg-navyblue-light px-4 rounded-pill mx-auto">
            <p class="phone p-0 m-0">
              <span  class="label-text d-block small">My Number</span>
              <i class="fas fa-phone"></i>
              <span class="bold pl-1 pr-2 small">123-123-1234</span>
            </p>
            <div class="box-icon ml-md-2">
              <p class="mb-0 pb-0 small">
                <i class="far fa-copy"></i>
              </p>
            </div>
        </div>
      </li>

      <li class="nav-item ">
        <a class="nav-link active"  onclick="myFunction('Contacts')">
          <i class="fal fa-users"></i> <span class="">Contacts</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  onclick="myFunction('Messages')">
            <i class="fas fa-comment"></i> <span class="">Messages</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="myFunction('Settings')">
        <i class="fal fa-user-circle"></i> Acccount </a>
      </li>
      <!-- DRAFT:Dropdown idea -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fal fa-user-circle"></i> Acccount </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
          <a class="dropdown-item" href="#">My account</a>
          <a class="dropdown-item" href="#">Log out</a>
        </div>
      </li> -->
    </ul>
  </div>
</nav>
<!--/.Navbar -->
