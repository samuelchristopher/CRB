{% extends 'templates/default.php' %}

{% block title %}All users{% endblock %}

{% block content %}
<style>
  .panel {
    padding: 10px;
    border: none;
  }

</style>
  <h1>All users</h1>
  <hr>

  {% if users is empty %}
    <p>
      No registered users.
    </p>
  {% else %}
    <div class="row">


    {% for user in users %}
    
      <div class="panel panel-default col-md-4">
        <div class="panel-heading">
          {{ user.username }}
          {% if user.isAdmin %}
            (Admin)
          {% endif %}
          <br>
          <em>{{ user.company_name }}</em>
        </div>
          <div class="panel-body">
            <a href="{{ urlFor('user.profile',  {'username': user.username }) }}" class="btn btn-primary">View profile</a>
            <a href="{{ urlFor('admin.user.certify', { username: user.username }) }}" class="btn btn-success">Certify</a>
          </div>
      </div>

    {% endfor %}
  </div>
  {% endif %}
{% endblock %}
