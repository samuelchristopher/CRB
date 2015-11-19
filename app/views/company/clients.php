{% extends 'templates/default.php' %}

{% block title %}Clients{% endblock %}

{% block content %}
  <style>
    .alert-error {
      margin-top: 10px;
      padding: 7px;
      margin-bottom: 0;
    }
  </style>
  <div class="container">
    {% if clients is not empty %}
      <div class="row">
        {% for client in clients %}
          <div class="col-md-3 text-center">
            {% if client.logo %}
              <img class="img-circle" src="{{ client.logo }}" alt="Generic placeholder image" width="140" height="140">
            {% else %}
              <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            {% endif %}
            <h2>{{ client.name }}</h2>
            <p>{{ client.text }}</p>
          </div>
        {% endfor %}
      </div>
    {% endif %}
  </div>
{% endblock %}
