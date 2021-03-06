<!DOCTYPE html>
<html>
  <head>
    <!-- This website was made by Samuel Paul Christopher -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{% block title %}{% endblock %} | {{  appName }}</title>
    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->

    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->
    <link rel="stylesheet" href="https://bootswatch.com/lumen/bootstrap.min.css">
    <style>
      .container {
        margin: 20px;
      }
    </style>
  </head>
  <body>
    {% include 'templates/partials/messages.php' %}
    {% include 'templates/partials/navigation.php' %}
    <!-- <div class="container"> -->
      {% block content %}{% endblock %}
    <!-- </div> -->
    {% if auth.isAdmin %}
      {% include 'templates/partials/counter.php' %}
    {% endif %}
    <script src="https://code.jquery.com/jquery-2.1.4.min.js" charset="utf-8"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/umd/alert.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/umd/collapse.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/umd/scrollspy.js" charset="utf-8"></script>
    <script type="text/javascript">
      $(function() {
        setTimeout(
          function() {
            $('.flash-alert').slideToggle(1000, function() {
              $(this).remove();
            });
          }, 3000);

      });
    </script>
  </body>
</html>
