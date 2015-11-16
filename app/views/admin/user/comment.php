{% extends 'templates/default.php' %}

{% block title %}Comment{% endblock %}

{% block content %}
  <style>
    .alert-error {
      margin-top: 10px;
      padding: 7px;
      margin-bottom: 0;
    }
  </style>
  <div class="container">
    <h1>{{ user.getFullNameOrUsername() }} | {{  user.company_name}}</h1>
    <form class="form-horizontal" action="{{ urlFor('admin.user.comment.post', { username: user.username }) }}"  method="post">
      <div class="form-group">
        <label class="control-label" for="comment">Comment</label>
        <input class="form-control" id="comment" type="text" name="comment" value="{{ request.post('comment') ? request.post('comment') : user.comment }}">
        {% if errors.first('Comment') %}
          <div class="alert-error alert alert-danger" role="alert">
            {{ errors.first('Comment') }}
          </div>
        {% endif %}
      </div>

      <input type="hidden" name="{{csrf_key}}" value="{{ csrf_token }}">

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Comment</button>
      </div>
    </form>
  </div>
{% endblock %}
