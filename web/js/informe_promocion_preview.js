$(document).ready(function () {
  $.ajax({
        type: "GET",
        url: '../informes/1/json_preview',
        success: function (data) {
            $('.preview').html(data['html']);
            completeFields();
            $( ".trumbowyg-editor" ).keyup(function( event ) {
              $('#parrafo1').html($('#appbundle_informespromocion_parrafo1').val());
            });
        },
    });

  function completeFields(){
    $('#appbundle_informespromocion_areaEnviar').change(function() {
      $('#areaEnviar').text($("#appbundle_informespromocion_areaEnviar option:selected").text());
    });
    $('#numeroExpediente').text($('#appbundle_informespromocion_numeroExpediente').val());
    $('#numeroInterno').text($('#appbundle_informespromocion_numeroInterno').val());
    $('#titular').text($('#appbundle_informespromocion_titular').val());
    $('#numeroRegistroTitular').text($('#appbundle_informespromocion_numeroRegistroTitular').val());
    var today = new Date().toISOString().slice(0, 10);
    $('#fechaCreacion').text(today);
  }
});
