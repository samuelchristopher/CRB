{% if flash.danger %}
  <div class="flash-alert alert alert-danger alert-dismissible fade in" role="alert" style="margin:0;position: absolute;z-index: 2;width: 100%;text-align: center;border-radius: 0px;font-family: 'Source Sans Pro';font-size: 14px;">
  <button type="button" class="close fade in" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Oh snap!</strong> {{ flash.danger }}
  </div>
{% elseif flash.success %}
  <div class="flash-alert alert alert-success alert-dismissible fade in" role="alert" style="margin:0;position: absolute;z-index: 2;width: 100%;text-align: center;border-radius: 0px;font-family: 'Source Sans Pro';font-size: 14px;">
  <button type="button" class="close fade in" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Yes!<strong> {{ flash.success }}
  </div>
{% endif %}
