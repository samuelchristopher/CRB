{% extends 'email/templates/news.php' %}

{% block preheader %}You requested a password change{% endblock %}
{% block toptext %}{{ appName }}{% endblock %}

{% block title %}Hey {{ user.getFirstNameOrUsername }}!{% endblock %}

{% block paragraph %}You have recently requested a password change. Click the button to follow through the password reset proccess{% endblock %}

{% block ctaLink %}{{ baseUrl }}{{ urlFor('password.reset') }}?email={{user.email}}&identifier={{ identifier|url_encode }}{% endblock %}
{% block cta %}Reset password{% endblock %}
