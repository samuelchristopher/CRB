<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ urlFor('home') }}">CRB</a>
    </div>

    <div class="navbar-collapse collapse in" id="bs-example-navbar-collapse-1" aria-expanded="false">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ urlFor('home') }}">Home <span class="sr-only">(current)</span></a></li>
        {% if auth %}
        {% else %}
          <li><a href="{{ urlFor('register') }}">Register</a></li>
          <li><a href="{{ urlFor('login') }}">Login</a></li>
        {% endif %}
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        {% if auth %}
          <li><a href="#">Welcome {{auth.getFullNameOrUsername}}!</a></li>
          <li><a href="{{ urlFor('logout') }}">Log out</a></li>
        {% endif %}
        <!-- <li><a href="{{ urlFor('login') }}">Login</a></li> -->
      </ul>
    </div>
  </div>
</nav>
