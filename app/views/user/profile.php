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



    {% if auth.isAdmin %}
      {% if user.comment %}
        <div class="panel panel-primary col-md-4">
          <div class="panel-heading">Comment</div>
            <div class="panel-body">
              {{ user.comment }}
              <br><small class="text-muted">{{ commentedAt }}</small>
            </div>
        </div>
      {% endif %}
    {% else %}
      {% if auth %}
        {% if auth.comment %}
          <div class="panel panel-primary col-md-4">
            <div class="panel-heading">Comment</div>
              <div class="panel-body">
                {{ auth.comment }}
                <br><small class="text-muted">{{ commentedAt }}</small>
              </div>
          </div>
        {% endif %}
      {% endif %}
    {% endif %}
  </div>

  {% if auth.isAdmin %}
    {% if auth.username == user.username %}
      <div class="row">
        <div class="col-md-4">
          <a href="{{ urlFor('admin.user.all') }}" class="btn btn-success">All users</a>
        </div>
      </div>
    {% else %}
      <div class="row">
        <div class="col-md-4">
          <a href="{{ urlFor('admin.user.certify', {username: user.username}) }}" class="btn btn-success">Certify</a>
          <a href="{{ urlFor('admin.user.comment', {username: user.username}) }}" class="btn btn-primary">Comment</a>
        </div>
      </div>
    {% endif %}
  {% endif %}


  {% if auth.isAdmin %}
    {% if auth.username == user.username %}
    {% else %}
      {% if cs %}
        <hr>
        <h3><span style="text-transform: capitalize;">{{ user.getFirstNameOrUsername }}</span>'s certificates</h3>
        {% if cs is empty %}
          <p>
            <span style="text-transform: capitalize;">{{ user.getFirstNameOrUsername }}</span> has no certificates yet.
          </p>
        {% else %}
          {% for c in cs %}
            {% if now > c.certificate_expires %}
              <a class="btn btn-primary" style="margin-right: 10px" href="{{ c.certificate_url }}" target="_blank">{{ c.certificate_name }} (Expired)</a>
            {% else %}
              <a class="btn btn-primary" style="margin-right: 10px" href="{{ c.certificate_url }}" target="_blank">{{ c.certificate_name }}</a>
            {% endif %}
          {% endfor %}
        {% endif %}
      {% endif %}
    {% endif %}
  {% else %}
    {% if cs %}
      <hr>
      <h3><span style="text-transform: capitalize;">{{ auth.getFirstNameOrUsername }}</span>'s certificates</h3>
      {% if cs is empty %}
        <p>
          <span style="text-transform: capitalize;">{{ auth.getFirstNameOrUsername }}</span> has no certificates yet.
        </p>
      {% else %}
        {% for c in cs %}
          {% if now > c.certificate_expires %}
            <a class="btn btn-primary" style="margin-right: 10px" href="{{ urlFor('expired') }}" target="_blank">{{ c.certificate_name }} (Expired)</a>
          {% else %}
            <a class="btn btn-primary" style="margin-right: 10px" href="{{ c.certificate_url }}" target="_blank">{{ c.certificate_name }}</a>

          {% endif %}
        {% endfor %}
      {% endif %}
    {% endif %}
  {% endif %}




</div>
{% endblock %}
