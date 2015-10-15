{% extends 'email/templates/news.php' %}

{% block preheader %}You have been certified{% endblock %}
{% block toptext %}{{ appName }}{% endblock %}

{% block title %}Hello {{ user.getFirstNameOrUsername }}!{% endblock %}

{% block paragraph %}You have been certified by {{ appName }}! Click on the button below to have a look at your profile and go ahead and view your certificate!!{% endblock %}

{% block ctaLink %}{{ baseUrl }}{{ urlFor('user.profile', { 'username': user.username }) }}{% endblock %}
{% block cta %}View my profile{% endblock %}
