{% if flash.danger %}
  <div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{ flash.danger }}
  </div>
{% elseif flash.success %}
  <div class="alert alert-success alert-dismissible fade in" role="alert">
  <button type="button" class="close fade in" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{ flash.success }}
  </div>
{% endif %}
