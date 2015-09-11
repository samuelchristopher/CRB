{% extends 'email/templates/simple.php' %}

{% block preheader %}Your almost close to being certified!{% endblock %}

{% block content %}Thanks for coming aboard! Click on the button to activate your account =){% endblock %}

{% block ctaLink %}{{ baseUrl }}{{ urlFor('activate') }}?email={{ user.email }}&identifier={{ identifier|url_encode }}{% endblock %}
{% block cta %}Activate now{% endblock %}
