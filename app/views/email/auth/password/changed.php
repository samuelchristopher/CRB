{% extends 'email/templates/news.php' %}

{% block preheader %}You have changed your password{% endblock %}
{% block toptext %}{{ appName }}{% endblock %}

{% block title %}Hey {{ user.getFirstNameOrUsername }}!{% endblock %}

{% block paragraph %}You have recently changed your password.{% endblock %}

{% block ctaLink %}{{ baseUrl }}{{ urlFor('user.profile', { 'username': user.username }) }}{% endblock %}
{% block cta %}View my profile{% endblock %}
