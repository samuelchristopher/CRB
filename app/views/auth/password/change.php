{% extends 'templates/default.php' %}

{% block title %}Change password{% endblock %}

{% block content %}
  <h1>Change password</h1>
  <style>
    .alert-error {
      margin-top: 10px;
      padding: 7px;
      margin-bottom: 0;
    }
  </style>
  <div class="container">
    <form class="form-horizontal" action="{{ urlFor('password.change.post') }}"  method="post">
      <div class="form-group">
        <label class="control-label" for="password_old">Old password</label>
        <input class="form-control" id="password_old" type="password" name="password_old" {% if request.post('password_old') %} value="{{ request.post('password_old') }}" {% endif %}>
        {% if errors.has('Old password') %}
          <div class="alert-error alert alert-danger" role="alert">
            {{ errors.first('Old password') }}
          </div>
        {% endif %}
      </div>

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
        <label class="control-label" for="password_confirm">Confirm new password</label>
        <input class="form-control" id="password_confirm" type="password" name="password_confirm">
        {% if errors.has('Confirm password') %}
          <div class="alert-error alert alert-danger" role="alert">
            {{ errors.first('Confirm password') }}
          </div>
        {% endif %}
      </div>

      <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Change</button>
      </div>
    </form>
  </div>
{% endblock %}
