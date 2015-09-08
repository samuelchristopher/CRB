{% extends 'templates/default.php' %}

{% block title %}Register{% endblock %}

{% block content %}
<div class="container">
  <form class="form-horizontal" action="{{ urlFor('register.post') }}"  method="post">
    <div class="form-group">
      <label class="control-label" for="email">Email</label>
      <input class="form-control" id="email" type="text" name="email">
    </div>

    <div class="form-group">
      <label class="control-label" for="username">Username</label>
      <input class="form-control" id="username" type="text" name="username">
    </div>

    <div class="form-group">
      <label class="control-label" for="password">Password</label>
      <input class="form-control" id="password" type="password" name="password">
    </div>

    <div class="form-group">
      <label class="control-label" for="password_confirm">Confirm password</label>
      <input class="form-control" id="password_confirm" type="password" name="password_confirm">
    </div>
    <h1>CRB Details</h1>
    <hr>

    <div class="form-group">
      <label class="control-label" for="company_name">Company name</label>
      <input class="form-control" id="company_name" type="text" name="company_name">
    </div>

    <div class="form-group">
      <label class="control-label" for="company_address">Company address</label>
      <input class="form-control" id="company_address" type="text" name="company_address">
    </div>

    <div class="form-group">
      <label class="control-label" for="telephone_number">Telephone number</label>
      <input class="form-control" id="telephone_number" type="text" name="telephone_number">
    </div>
    <div class="form-group">
      <button type="reset" class="btn btn-default">Cancel</button>
      <button type="submit" class="btn btn-primary">Register</button>
    </div>

  </form>
</div>
{% endblock %}
