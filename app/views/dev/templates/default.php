<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./app/views/dev/src/nav.css" media="screen" title="no title" charset="utf-8">
    <title>{% block title %}{% endblock %}</title>
  </head>
  <body style="font-family: sans-serif">
    {% include 'dev/templates/partials/nav.php' %}
    {% block content %}{% endblock %}
  </body>
</html>
