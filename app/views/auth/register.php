{% extends 'templates/default.php' %}

{% block title %}Register{% endblock %}

{% block content %}
<style>
  .alert-error {
    margin-top: 10px;
    padding: 7px;
    margin-bottom: 0;
  }
</style>
<div class="container">
  <form class="form-horizontal" action="{{ urlFor('register.post') }}"  method="post">
    <div class="form-group">
      <label class="control-label" for="email">Email</label>
      <input class="form-control" id="email" type="text" name="email" {% if request.post('email') %} value="{{ request.post('email') }}" {% endif %}>
      {% if errors.first('Email') %}
        <div class="alert-error alert alert-danger" role="alert">
          {{ errors.first('Email') }}
        </div>
      {% endif %}
    </div>

    <div class="form-group">
      <label class="control-label" for="username">Username</label>
      <input class="form-control" id="username" type="text" name="username"{% if request.post('username') %} value="{{ request.post('username') }}" {% endif %}>
      {% if errors.first('Username') %}
        <div class="alert-error alert alert-danger" role="alert">
          {{ errors.first('Username') }}
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
      <label class="control-label" for="password_confirm">Confirm password</label>
      <input class="form-control" id="password_confirm" type="password" name="password_confirm">
      {% if errors.first('Confirm password') %}
        <div class="alert-error alert alert-danger" role="alert">
          {{ errors.first('Confirm password') }}
        </div>
      {% endif %}
    </div>
    <h1>{{ appName }} Details</h1>
    <hr>

    <div class="form-group">
      <label class="control-label" for="company_name">Company name</label>
      <input class="form-control" id="company_name" type="text" name="company_name"{% if request.post('company_name') %} value="{{ request.post('company_name') }}" {% endif %}>
      {% if errors.first('Company name') %}
        <div class="alert-error alert alert-danger" role="alert">
          {{ errors.first('Company name') }}
        </div>
      {% endif %}
    </div>

    <div class="form-group">
      <label class="control-label" for="company_address">Company address</label>
      <input class="form-control" id="company_address" type="text" name="company_address"{% if request.post('company_address') %} value="{{ request.post('company_address') }}" {% endif %}>
      {% if errors.first('Company address') %}
        <div class="alert-error alert alert-danger" role="alert">
          {{ errors.first('Company address') }}
        </div>
      {% endif %}
    </div>

    <div class="form-group">
      <label class="control-label" for="telephone_number">Telephone number</label>
      <input class="form-control" id="telephone_number" type="text" name="telephone_number" {% if request.post('telephone_number') %} value="{{ request.post('telephone_number') }}" {% endif %}>
      {% if errors.first('Telephone number') %}
        <div class="alert-error alert alert-danger" role="alert">
          {{ errors.first('Telephone number') }}
        </div>
      {% endif %}
    </div>
    <input type="hidden" name="{{csrf_key}}" value="{{ csrf_token }}">
    <div class="form-group">
      <button type="reset" class="btn btn-default">Cancel</button>
      <button type="submit" class="btn btn-primary">Register</button>
    </div>

  </form>
</div>
{% endblock %}
