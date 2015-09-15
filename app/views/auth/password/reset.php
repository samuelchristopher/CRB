{% extends 'templates/default.php' %}

{% block title %}Reset password{% endblock %}

{% block content %}
  <h1>Reset password</h1>
  <style>
    .alert-error {
      margin-top: 10px;
      padding: 7px;
      margin-bottom: 0;
    }
  </style>
  <div class="container">

    <form class="form-horizontal"
    action="{{ urlFor('password.reset.post') }}?email={{email}}&identifier={{identifier|url_encode}}"  method="post">
      <div class="form-group">
        <label class="control-label" for="password">New password</label>
        <input class="form-control" id="password" type="password" name="password">
        {% if errors.has('Password') %}
          <div class="alert-error alert alert-danger" role="alert">
            {{ errors.first('Password') }}
          </div>
        {% endif %}
      </div>

      <div class="form-group">
        <label class="control-label" for="password_confirm">Confirm password</label>
        <input class="form-control" id="password_confirm" type="password" name="password_confirm">
        {% if errors.has('Confirm password') %}
          <div class="alert-error alert alert-danger" role="alert">
            {{ errors.first('Confirm password') }}
          </div>
        {% endif %}
      </div>

      <input type="hidden" name="{{csrf_key}}" value="{{ csrf_token }}">

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Change password</button>
      </div>
    </form>
  </div>
{% endblock %}
