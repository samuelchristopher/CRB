{% extends 'templates/default.php' %}

{% block title %}Update profile{% endblock %}

{% block content %}
  <h1>Update profile</h1>
  <style>
    .alert-error {
      margin-top: 10px;
      padding: 7px;
      margin-bottom: 0;
    }
  </style>
  <div class="container">
    <form class="form-horizontal" action="{{ urlFor('account.profile.post') }}"  method="post">
      <div class="form-group">
        <label class="control-label" for="email">Email</label>
        <input class="form-control" id="email" type="text" name="email" value="{{ request.post('email') ? request.post('email') : auth.email }}">
        {% if errors.has('Email') %}
          <div class="alert-error alert alert-danger" role="alert">
            {{ errors.first('Email') }}
          </div>
        {% endif %}
      </div>
      <div class="form-group">
        <label class="control-label" for="first_name">First name</label>
        <input class="form-control" id="first_name" type="text" name="first_name" value="{{ request.post('first_name') ? request.post('first_name') : auth.first_name }}">
        {% if errors.has('First name') %}
          <div class="alert-error alert alert-danger" role="alert">
            {{ errors.first('First name') }}
          </div>
        {% endif %}
      </div>

      <div class="form-group">
        <label class="control-label" for="last_name">Last name</label>
        <input class="form-control" id="last_name" type="text" name="last_name" value="{{ request.post('last_name') ? request.post('last_name') : auth.last_name }}">
        {% if errors.has('Last name') %}
          <div class="alert-error alert alert-danger" role="alert">
            {{ errors.first('Last name') }}
          </div>
        {% endif %}
      </div>

      <div class="form-group">
        <label class="control-label" for="company_address">Company address</label>
        <input class="form-control" id="company_address" type="text" name="company_address" value="{{ request.post('company_address') ? request.post('company_address') : auth.company_address }}">
        {% if errors.has('Company address') %}
          <div class="alert-error alert alert-danger" role="alert">
            {{ errors.first('Company address') }}
          </div>
        {% endif %}
      </div>

      <div class="form-group">
        <label class="control-label" for="telephone_number">Telephone number</label>
        <input class="form-control" id="telephone_number" type="text" name="telephone_number" value="{{ request.post('telephone_number') ? request.post('telephone_number') : auth.telephone_number }}">
        {% if errors.has('Telephone number') %}
          <div class="alert-error alert alert-danger" role="alert">
            {{ errors.first('Telephone number') }}
          </div>
        {% endif %}
      </div>



      <input type="hidden" name="{{csrf_key}}" value="{{ csrf_token }}">

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
{% endblock %}
