$(document).ready(function () {
  hiddenFields();
  $('.content').trumbowyg({
  	semantic: true
  });
  $( "#appbundle_informeslegales_tipoInforme" ).change(function() {
    showFields(this.value);
  });
  function hiddenFields(){
    $("[hidden-field]").parent().closest('.form-group').hide();
  }
  function showFields(id) {
    switch (id) {
      case '1':
        hiddenFields();
        $('#appbundle_informeslegales_fs1').parent().closest('.form-group').show();
        break;
      case '5':
        hiddenFields();
        $('#appbundle_informeslegales_fs1').parent().closest('.form-group').show();
        $('#appbundle_informeslegales_fs2').parent().closest('.form-group').show();
        break;
      case '8':
        hiddenFields();
        $('#appbundle_informeslegales_numeroRenaf').parent().closest('.form-group').show();
        break;
      case '9':
        hiddenFields();
        $('#appbundle_informeslegales_fs1').parent().closest('.form-group').show();
        $('#appbundle_informeslegales_fs2').parent().closest('.form-group').show();
        $('#appbundle_informeslegales_disposicionProvincialNro').parent().closest('.form-group').show();
        break;
      case '10':
        hiddenFields();
        $('#appbundle_informeslegales_fs1').parent().closest('.form-group').show();
        $('#appbundle_informeslegales_fs2').parent().closest('.form-group').show();
        $('#appbundle_informeslegales_disposicionProvincialNro').parent().closest('.form-group').show();
        break;
      case '11':
        hiddenFields();
        $('#appbundle_informeslegales_parrafo1').parent().closest('.form-group').show();
        $('#appbundle_informeslegales_parrafo2').parent().closest('.form-group').show();
        $('#appbundle_informeslegales_parrafo3').parent().closest('.form-group').show();
        $('#appbundle_informeslegales_parrafo4').parent().closest('.form-group').show();
        break;
      default:
        hiddenFields();
    }
  }
});
