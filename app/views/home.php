{% extends 'templates/default.php' %}

{% block title %}Home{% endblock %}

{% block content %}

  <link rel="stylesheet" href="https://getbootstrap.com/examples/carousel/carousel.css">
  <style>
      nav.navbar.navbar-default {
        margin: 0;
      }

      .carousel-caption h1 {
        color: white;
      }

      .carousel-caption p {
        color: rgb(226, 226, 226);
      }
  </style>
    <!-- Carousel
    ================================================== -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom: 0">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active" style="background: url(app/assets/Crbs-Pic2.jpg) no-repeat;background-size: cover;background-position: center center;">
        <!-- <img class="first-slide" src="https://images.unsplash.com/photo-1429497419816-9ca5cfb4571a?q=80&fm=jpg&s=4bf1164d23eea4f04aeefe1732149cf3" alt="First slide"> -->
        <div class="container">
          <div class="carousel-caption">
            <h1>Classic Reliance Bureau (<em>{{ appName }}</em>)</h1>
            <p>Inspections, testing and services. Contact at <code>{{ emailAddress }}</code></p>
            <p><a class="btn btn-lg btn-primary" href="{{ urlFor('register') }}" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="item" style="background: url(app/assets/Auditing_pic3.jpg) no-repeat;background-size: cover;background-position: center center;">
        <!-- <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide"> -->
        <div class="container">
          <div class="carousel-caption">
            <h1 style="color: black">Consultancy and Audit Services</h1>
            <p style="color: black">Classic Reliance Bureau ({{ appName }}) Services provides consultancy and audit services to support our clients attain compliance with Quality (ISO 9001), Health and Safety (OSHAS 18001) and Environmental (ISO 14001) Management Systems, lifting regulations, International Safety Management Code (ISM), International Ship and Port Security Code (ISPS).</p>
            <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p> -->
          </div>
        </div>
      </div>
      <div class="item" style="background: url(app/assets/ISO-certification.jpeg) no-repeat;background-size: cover;background-position: center center;">
        <!-- <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide"> -->
        <div class="container">
          <div class="carousel-caption">
            <h1>Lifting Equipment Inspection Services</h1>
            <p>Classic Reliance Bureau ({{ appName }}) Services provides the following services to meet Safety Regulations of JKR Brunei, Oil and Gas companies and to comply with Insurance requirements of all industries.</p>
            <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><!-- /.carousel -->


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing" id="#market">
    <h1 style="text-align:center;"> <img style="width: 300px;margin-bottom: -62px;" src="app/assets/crbslogo.png"/></h1>
    <!-- <h1 style="text-align:center;">Previous clients</h1>
    <hr>

    <div class="row">
      <div class="col-lg-4">
        <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
        <h2>Shell</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-default" href="{{ urlFor('company.clients') }}" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-lg-4">
        <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
        <h2>Heading</h2>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        <p><a class="btn btn-default" href="{{ urlFor('company.clients') }}" role="button">View details &raquo;</a></p>
      </div>
      <div-4">
        <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-default" href="{{ urlFor('company.clients') }}" role="button">View details &raquo;</a></p>
      </div>
    </div> -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Seamless certification.</h2>
        <p class="lead">Our client management system here at {{ appName }} enables you to get certified online. Contact us or existing cutomer? <a href="{{ urlFor('register') }}">Register now</a></p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-responsive center-block" style="height: 300px" src="app/assets/cert.png" alt="Generic placeholder image">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 col-md-push-5">
        <h2 class="featurette-heading">#1 Security. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Your certificates are safe with us! By registering with us, you allow us to strip away all the cons of certification. Basically, we got your certificates!</p>
      </div>
      <div class="col-md-5 col-md-pull-7">
        <img class="featurette-image img-responsive center-block" style="height: 300px" src="app/assets/security.png" alt="Generic placeholder image">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Simplicity</h2>
        <p class="lead">When you register with us, you will be granted access to viewing the rules and guidelines of certification for your respective country. This is the deal maker for most of our clients.</a></p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-responsive center-block" style="height: 300px" src="app/assets/simple.png" alt="Generic placeholder image">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->


    <!-- FOOTER -->
    <footer>
      <p class="pull-right"><a href="#">Back to top</a></p>
      <p>&copy; 2016 <code>samuelchristopher</code>. <a href="{{ urlFor('company.privacy') }}">Privacy</a> &middot; <a href="{{ urlFor('company.terms') }}">Terms</a></p>
    </footer>

{% endblock %}
