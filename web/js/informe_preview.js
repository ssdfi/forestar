$(document).ready(function () {
  $('#appbundle_informeslegales_tipoInforme').change(function() {
    var id = this.value;
    if (id > 0) {
      showPreview(id);
    }
  });

  function showPreview(id) {
    switch (id) {
      case '1':
          $.ajax({
                type: "GET",
                url: '../../informes/1/json_preview',
                success: function (data) {
                    $('.preview').html(data['html']);
                    completeFields();
                    $( "#appbundle_informeslegales_fs1" ).keyup(function( event ) {
                      $('#fs1').text($(this).val());
                    });
                },
            });
        break;
      case '5':
        $.ajax({
              type: "GET",
              url: '../../informes/5/json_preview',
              success: function (data) {
                  $('.preview').html(data['html']);
                  completeFields();
                  $( "#appbundle_informeslegales_fs1" ).keyup(function( event ) {
                    $('#fs1').text($(this).val());
                  });
                  $( "#appbundle_informeslegales_fs2" ).keyup(function( event ) {
                    $('#fs2').text($(this).val());
                  });
              },
          });
        break;
      case '6':
        $.ajax({
              type: "GET",
              url: '../../informes/6/json_preview',
              success: function (data) {
                  $('.preview').html(data['html']);
                  completeFields();
                  $('#observacion').text($('#appbundle_informeslegales_observacion').val());
              },
          });
        break;
      case '9':
        $.ajax({
              type: "GET",
              url: '../../informes/9/json_preview',
              success: function (data) {
                  $('.preview').html(data['html']);
                  completeFields();
                  $( "#appbundle_informeslegales_fs1" ).keyup(function( event ) {
                    $('#fs1').text($(this).val());
                  });
                  $( "#appbundle_informeslegales_fs2" ).keyup(function( event ) {
                    $('#fs2').text($(this).val());
                  });
                  $( "#appbundle_informeslegales_disposicionProvincialNro" ).keyup(function( event ) {
                    $('#disposicionProvincialNro').text($(this).val());
                  });
              },
          });
        break;
      case '10':
        $.ajax({
              type: "GET",
              url: '../../informes/10/json_preview',
              success: function (data) {
                  $('.preview').html(data['html']);
                  completeFields();
                  $( "#appbundle_informeslegales_fs1" ).keyup(function( event ) {
                    $('#fs1').text($(this).val());
                  });
                  $( "#appbundle_informeslegales_fs2" ).keyup(function( event ) {
                    $('#fs2').text($(this).val());
                  });
                  $( "#appbundle_informeslegales_disposicionProvincialNro" ).keyup(function( event ) {
                    $('#disposicionProvincialNro').text($(this).val());
                  });
              },
          });
        break;
      case '11':
        $.ajax({
              type: "GET",
              url: '../../informes/11/json_preview',
              success: function (data) {
                  $('.preview').html(data['html']);
                  completeFields();
                  $( ".trumbowyg-editor" ).keyup(function( event ) {
                    $('#parrafo1').html($('#appbundle_informeslegales_parrafo1').val());
                  });
              },
          });
        break;
      default:
      $.ajax({
            type: "GET",
            url: '../../informes/'+id+'/json_preview',
            success: function (data) {
                $('.preview').html(data['html']);
                completeFields();
            },
        })
    }
  }

  function completeFields(){
    $('#appbundle_informeslegales_areaEnviar').change(function() {
      $('#areaEnviar').text($("#appbundle_informeslegales_areaEnviar option:selected").text());
    });
    $('#numeroExpediente').text($('#appbundle_informeslegales_numeroExpediente').val());
    $('#numeroInterno').text($('#appbundle_informeslegales_numeroInterno').val());
    $('#titular').text($('#appbundle_informeslegales_titular').val());
    $('#numeroRegistroTitular').text($('#appbundle_informeslegales_numeroRegistroTitular').val());
    var today = new Date().toISOString().slice(0, 10);
    $('#fechaCreacion').text(today);
  }
});
