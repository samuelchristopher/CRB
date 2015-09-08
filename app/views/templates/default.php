<!DOCTYPE html>
<html>
  <head>
    <!-- This website was made by Samuel Paul Christopher -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{% block title %}{% endblock %} | CRB</title>
    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->

    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->
    <link rel="stylesheet" href="https://bootswatch.com/journal/bootstrap.min.css">
  </head>
  <body>
    {% include 'templates/partials/messages.php' %}
    {% include 'templates/partials/navigation.php' %}
    {% block content %}{% endblock %}
    <script src="https://code.jquery.com/jquery-2.1.4.min.js" charset="utf-8"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/umd/alert.js" charset="utf-8"></script>
  </body>
</html>
