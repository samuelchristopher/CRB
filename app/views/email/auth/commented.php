{% extends 'email/templates/news.php' %}

{% block preheader %}New comment by {{ appName }}{% endblock %}
{% block toptext %}{{ appName }}{% endblock %}

{% block title %}Hello {{ user.getFirstNameOrUsername }}!{% endblock %}

{% block paragraph %}{{ appName }} has added a comment relating to your certification! Have a look by clicking the button!!{% endblock %}

{% block ctaLink %}{{ baseUrl }}{{ urlFor('user.profile', { 'username': user.username }) }}{% endblock %}
{% block cta %}View my profile{% endblock %}
