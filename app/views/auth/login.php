{% extends 'templates/default.php' %}

{% block title %}Login{% endblock %}

{% block content %}
  <style>
    .alert-error {
      margin-top: 10px;
      padding: 7px;
      margin-bottom: 0;
    }
  </style>
  <div class="container">
    <form class="form-horizontal" action="{{ urlFor('login.post') }}"  method="post">
      <div class="form-group">
        <label class="control-label" for="identifier">Username/email</label>
        <input class="form-control" id="identifier" type="text" name="identifier" {% if request.post('identifier') %} value="{{ request.post('identifier') }}" {% endif %}>
        {% if errors.first('Identifier') %}
          <div class="alert-error alert alert-danger" role="alert">
            {{ errors.first('Identifier') }}
          </div>
        {% endif %}
      </div>

      <div class="form-group">
        <label class="control-label" for="password">Password</label>
        <input class="form-control" id="password" type="password" name="password">
        {% if errors.first('Password') %}
          <div class="alert-error alert alert-danger" role="alert">
            {{ errors.first('Password') }}
          </div>
        {% endif %}
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </form>
  </div>
{% endblock %}
