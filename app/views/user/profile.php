{% extends 'templates/default.php' %}

{% block title %}{{ user.getFullNameOrUsername() }}{% endblock %}

{% block content %}
<style media="screen">
  .profile-container {
    display: flex;
    align-items: center;
  }

  .profile-container h1 {
    margin-top: 0;
    padding-left: 11px;
  }

  .profile-container img {
    border-radius: 60%;
  }
</style>
  <div class="jumbotron" style="padding: 20px;">
    <div class="profile-container">
      <img src="{{ user.getAvatarUrl({size: 50}) }}" alt="{{user.getFullNameOrUsername}}'s profile picture" />
      <h1>{{user.username}}</h1>

    </div>
    <p>From {{user.company_name}} in {{user.company_address}}</p>
    <!-- <p>
      <a class="btn btn-primary btn-lg">Learn more</a>
    </p> -->
  </div>

  {% if user.getFullName() %}
    <div class="panel panel-default">
      <div class="panel-heading">Full name</div>
        <div class="panel-body">
          {{ user.getFullName() }}
        </div>
    </div>
  {% endif %}
  <div class="panel panel-default">
    <div class="panel-heading">Email</div>
      <div class="panel-body">
        {{ user.email }}
      </div>
  </div>
{% endblock %}
