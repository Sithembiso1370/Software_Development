<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <header>
        <!-- <label for="check" class="right-area">
            <i class="fas fa-bars" id="hamburguer"></i>
        </label> -->
        <div class=" fa-3x" align="center">   
                <h4><a href="/">NTPRO<i class="fas fa-cog fa-spin fa-m"></i>-<span>CMS</span></a></h4>                      
        </div> 
    </header>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php
        use app\core\Application;
        if (Application::isGuest()):
        ?>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/login">Login</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="/register">Sign Up</a>
            </li>
          </ul>

      <?php 
      else: 
        ?>

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/profile">Profile</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/login">Login</a></li>
              <li><a class="dropdown-item" href="/register">Register</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/dashboard">dashboard</a></li>
              <li><a class="dropdown-item" href="/tulip">tULIP</a></li>
              <li><a class="dropdown-item" href="/contact">contact</a></li> 
              <li><a class="dropdown-item" href="/admin">admin</a></li> 
            </ul>
          </li>

          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"><?php
               echo Application::$app->user->getDisplayName() 
               ?></a>
              
          </li>
          
        </ul>
        <!-- <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
        <a class="nav-link active" aria-current="page" href="/logout">Sign Out</a>
      <?php
     endif; 
     ?>
    </div>
  </div>

</nav>