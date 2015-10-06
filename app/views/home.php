{% extends 'templates/default.php' %}

{% block title %}Home{% endblock %}

{% block content %}
<div id="container" class="container intro-effect-jam3">
    <!-- Top Navigation -->
    <link rel="stylesheet" href="http://tympanus.net/Development/ArticleIntroEffects/css/demo.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="http://tympanus.net/Development/ArticleIntroEffects/css/component.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" media="screen" title="no title" charset="utf-8">
    <style>
      .container {
        width: 100%;
        padding: 0;
      }
      nav.navbar.navbar-default {
          margin-bottom: 0;
          font-size: 15px;
          font-family: "Source Sans Pro", sans-serif;
      }
      div#container {
          padding: 0;
      }
      .intro-effect-jam3 .bg-img {
        top: 0;
      }
    </style>
    <header class="header">
      <div class="bg-img"><img src="http://tympanus.net/Development/ArticleIntroEffects/img/1.jpg" alt="Background Image" /></div>
      <div class="title">
        <h1>Classic Realiance Beurau</h1>
        <p class="subline">Inspections, testing and services</p>
        <p><a href="mailto:karthi@classicreliancebureau.com">karthi@classicreliancebureau.com</a></p>
      </div>
    </header>
    <button class="trigger" data-info="Scroll down"><img src="https://cdn0.iconfinder.com/data/icons/slim-square-icons-basics/100/basics-08-128.png" alt="" style="    -webkit-filter:invert(100%);height: 72px;margin-left: -17px;"/></button>
    <article class="content">
      <div>
        <h3>Vision and Mission Statement</h3>
        <p>Become a leading total solution provider for Quality, Health, Safety, Security and Environment Management Systems for the global business community.</p>

        <h3>Core Values</h3>
        <p>Classic Reliance Bureau will uphold a good image and be a responsible entity to the society and business community by observing its core values which are <strong>Ethics and Integrity</strong>, <strong>Partnership</strong>, <strong>Factual Approach to decision making</strong>, <strong>Social and Environmental Responsibility</strong> and <strong>Safety</strong></p>
        <p>
          <div class="img-grid" style="position: relative;max-width: 569px;margin: 0 auto;">
            <img src="http://www.classicreliancebureau.com/images/leftbanner/1.jpg" alt="" class="img-1" style="height: 400px;"/>
            <img src="http://www.classicreliancebureau.com/images/leftbanner/2.jpg" alt="" class="img-2" style="position: absolute;right: 0;"/>
            <img src="http://www.classicreliancebureau.com/images/leftbanner/4.jpg" alt="" class="img-3" style="    position: absolute;right: 0;bottom: 0;"/>
          </div>
        </p>

        <h3>Business Values</h3>
        <p>Classic Reliance Bureau will endeavour to excel on its business values to better serve its customers and partners.</p>
        <p>Our business values are: <strong>Customer Focus</strong>, <strong>Partnership</strong>, <strong>Mutual beneficial partner relationship</strong>, <strong>Quantity</strong>, <strong>Teamwork</strong> and <strong>Continual Improvement</strong></p>

        <p>
          Have a look at the <strong><a href="{{ urlFor('company.services') }}">services</a></strong> we offer
        </p>
      </div>
    </article>
  </div><!-- /container -->
  <script src="http://tympanus.net/Development/ArticleIntroEffects/js/classie.js"></script>
  <script>
    (function() {

      // detect if IE : from http://stackoverflow.com/a/16657946
      var ie = (function(){
        var undef,rv = -1; // Return value assumes failure.
        var ua = window.navigator.userAgent;
        var msie = ua.indexOf('MSIE ');
        var trident = ua.indexOf('Trident/');

        if (msie > 0) {
          // IE 10 or older => return version number
          rv = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
        } else if (trident > 0) {
          // IE 11 (or newer) => return version number
          var rvNum = ua.indexOf('rv:');
          rv = parseInt(ua.substring(rvNum + 3, ua.indexOf('.', rvNum)), 10);
        }

        return ((rv > -1) ? rv : undef);
      }());


      // disable/enable scroll (mousewheel and keys) from http://stackoverflow.com/a/4770179
      // left: 37, up: 38, right: 39, down: 40,
      // spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
      var keys = [32, 37, 38, 39, 40], wheelIter = 0;

      function preventDefault(e) {
        e = e || window.event;
        if (e.preventDefault)
        e.preventDefault();
        e.returnValue = false;
      }

      function keydown(e) {
        for (var i = keys.length; i--;) {
          if (e.keyCode === keys[i]) {
            preventDefault(e);
            return;
          }
        }
      }

      function touchmove(e) {
        preventDefault(e);
      }

      function wheel(e) {
        // for IE
        //if( ie ) {
          //preventDefault(e);
        //}
      }

      function disable_scroll() {
        window.onmousewheel = document.onmousewheel = wheel;
        document.onkeydown = keydown;
        document.body.ontouchmove = touchmove;
      }

      function enable_scroll() {
        window.onmousewheel = document.onmousewheel = document.onkeydown = document.body.ontouchmove = null;
      }

      var docElem = window.document.documentElement,
        scrollVal,
        isRevealed,
        noscroll,
        isAnimating,
        container = document.getElementById( 'container' ),
        trigger = container.querySelector( 'button.trigger' );

      function scrollY() {
        return window.pageYOffset || docElem.scrollTop;
      }

      function scrollPage() {
        scrollVal = scrollY();

        if( noscroll && !ie ) {
          if( scrollVal < 0 ) return false;
          // keep it that way
          window.scrollTo( 0, 0 );
        }

        if( classie.has( container, 'notrans' ) ) {
          classie.remove( container, 'notrans' );
          return false;
        }

        if( isAnimating ) {
          return false;
        }

        if( scrollVal <= 0 && isRevealed ) {
          toggle(0);
        }
        else if( scrollVal > 0 && !isRevealed ){
          toggle(1);
        }
      }

      function toggle( reveal ) {
        isAnimating = true;

        if( reveal ) {
          classie.add( container, 'modify' );
        }
        else {
          noscroll = true;
          disable_scroll();
          classie.remove( container, 'modify' );
        }

        // simulating the end of the transition:
        setTimeout( function() {
          isRevealed = !isRevealed;
          isAnimating = false;
          if( reveal ) {
            noscroll = false;
            enable_scroll();
          }
        }, 600 );
      }

      // refreshing the page...
      var pageScroll = scrollY();
      noscroll = pageScroll === 0;

      disable_scroll();

      if( pageScroll ) {
        isRevealed = true;
        classie.add( container, 'notrans' );
        classie.add( container, 'modify' );
      }

      window.addEventListener( 'scroll', scrollPage );
      trigger.addEventListener( 'click', function() { toggle( 'reveal' ); } );
    })();
  </script>
{% endblock %}
