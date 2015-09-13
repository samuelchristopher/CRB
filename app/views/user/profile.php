{% extends 'templates/default.php' %}

{% block title %}{{ user.getFullNameOrUsername() }}{% endblock %}

{% block content %}
<style>
  .panel {
    padding: 10px;
    border: none;
  }
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
  <div class="container">


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
  <div class="row">
    {% if user.getFullName() %}
      <div class="panel panel-default col-md-4">
        <div class="panel-heading">Full name</div>
          <div class="panel-body">
            {{ user.getFullName() }}
          </div>
      </div>
    {% endif %}
    <div class="panel panel-default col-md-4">
      <div class="panel-heading">Company name</div>
        <div class="panel-body">
          {{ user.company_name }}
        </div>
    </div>

    <div class="panel panel-default col-md-4">
      <div class="panel-heading">Company address</div>
        <div class="panel-body">
          {{ user.company_address }}
        </div>
    </div>

    <div class="panel panel-default col-md-4">
      <div class="panel-heading">Email</div>
        <div class="panel-body">
          {{ user.email }}
        </div>
    </div>

    {% if user.cert %}
      <div class="panel panel-success col-md-4">
        <div class="panel-heading">Certification Status</div>
          <div class="panel-body">
            {{ user.company_name }} certified
          </div>
      </div>
    {% else %}
      <div class="panel panel-info col-md-4">
        <div class="panel-heading">Certification Status</div>
          <div class="panel-body">
            {{ user.company_name }} not certified
          </div>
      </div>
    {% endif %}
  </div>

  {% if auth.isAdmin %}
    <div class="row">
      <div class="col-md-4">
        <a href="{{ urlFor('admin.user.certify', {username: user.username}) }}" class="btn btn-success">Certify</a>
      </div>
    </div>
  {% endif %}

</div>
{% endblock %}
