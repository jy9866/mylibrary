

<nav class="navbar navbar-expand-lg py-2 navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="/"><i class="fa fa-fw fa-university"></i>Web Library </a>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

    </ul>

    <!--Login and Register at right side of nav bar-->
    <ul class="navbar-nav mt-9 mt-lg-0">
      <li class="nav-item">
       <a class="nav-link" href="{{ url('/login') }}"><i class="fa fa-fw fa-user-circle-o"></i>Login</a>
       </li>
      <li class="nav-item">
       <a class="nav-link" href="{{ url('/register') }}"><i class="fa fa-fw fa-pencil-square-o"></i>Register</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="/logout"><i class="fa fa-fw fa-sign-out"></i>Logout</a>
      </li>

    </ul>

</nav>
