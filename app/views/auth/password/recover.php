{% extends 'templates/default.php' %}

{% block title %}Recover password{% endblock %}

{% block content %}
  <style>
    .alert-error {
      margin-top: 10px;
      padding: 7px;
      margin-bottom: 0;
    }
  </style>
  <div class="container">
    <h3 for="email">Enter your email address to start your password recovery</h3>
    <form class="form-horizontal" action="{{ urlFor('password.recover.post') }}"  method="post">
      <div class="form-group">
        <input class="form-control" id="email" type="text" name="email" {% if request.post('email') %} value="{{ request.post('email') }}" {% endif %}>
        {% if errors.has('Email') %}
          <div class="alert-error alert alert-danger" role="alert">
            {{ errors.first('Email') }}
          </div>
        {% endif %}
      </div>

      <input type="hidden" name="{{csrf_key}}" value="{{ csrf_token }}">

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Request reset</button>
      </div>
    </form>
  </div>
{% endblock %}
