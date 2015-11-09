{% extends 'templates/default.php' %}

{% block title %}Certify{% endblock %}

{% block content %}
  <style>
    .alert-error {
      margin-top: 10px;
      padding: 7px;
      margin-bottom: 0;
    }
  </style>
  <h1>{{ user.getFullNameOrUsername() }} | {{  user.company_name}}</h1>
  <div class="container">
    <form class="form-horizontal" action="{{ urlFor('admin.user.certify.post', { username: user.username }) }}"  method="post">

      <div class="form-group">
        <label class="control-label" for="name">Certificate name</label>
        <input class="form-control" id="name" type="text" name="name" {% if request.post('name') %} value="{{ request.post('name') }}" {% endif %}>
        {% if errors.first('Certificate name') %}
          <div class="alert-error alert alert-danger" role="alert">
            {{ errors.first('Certificate name') }}
          </div>
        {% endif %}
      </div>

      <div class="form-group">
        <label class="control-label" for="link">Certification link</label>
        <input class="form-control" id="link" type="text" name="link" {% if request.post('link') %} value="{{ request.post('link') }}" {% endif %}>
        {% if errors.first('Certification link') %}
          <div class="alert-error alert alert-danger" role="alert">
            {{ errors.first('Certification link') }}
          </div>
        {% endif %}
      </div>




      <input type="hidden" name="{{csrf_key}}" value="{{ csrf_token }}">

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Certify</button>
      </div>
    </form>
  </div>
{% endblock %}
