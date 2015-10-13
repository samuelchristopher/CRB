{% extends 'email/templates/news.php' %}

{% block preheader %}Your almost close to being certified!{% endblock %}
{% block toptext %}{{ appName }}{% endblock %}

{% block title %}Hi {{ user.getFirstNameOrUsername }}!{% endblock %}

{% block paragraph %}Thanks for coming aboard! Welcome to the {{ appName }} family. Click on the button to activate your account =){% endblock %}

{% block ctaLink %}{{ baseUrl }}{{ urlFor('activate') }}?email={{ user.email }}&identifier={{ identifier|url_encode }}{% endblock %}
{% block cta %}Activate now{% endblock %}
