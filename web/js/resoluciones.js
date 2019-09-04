$(document).ready(function() {

  $('#add-resolucion').click(function(e) {
    e.preventDefault();
    resolucionAdd();
    return;
  });


  $(document).on("click", '.remove-resolucion', function(e) {
    e.preventDefault();
    resolucionRemove(this);
    return;
  });

  function resolucionAdd() {
    var collectionHolder = $('.resoluciones');
    var collectionCount = collectionHolder.children().length;
    var prototipo = collectionHolder.attr('data-prototype');
    prototipo = prototipo.replace(/__name__/g, collectionCount);
    collectionCount++;
    var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
    newLi.appendTo(collectionHolder).trigger('create');
    $.fn.bootstrapSwitch.defaults.labelWidth = '150';
    $("input[data-label]").each(function() {
      $(this).bootstrapSwitch({
        labelText: this.dataset.label,
        onText: "SI",
        offText: "NO"
      });
    });
    return;
  }

  $(document).on('change', '.resoluciones_actividadAprobada', function() {
    var id = $(this).children("option:selected").val();
    var index = $(this).closest("tr").index();
    var bundle = '#appbundle_expedientes_resoluciones_' + index;
    if (!$(bundle + '_montoPago').val() > 0) {
      $('.wait').show();
      $.ajax({
        url: '/actividades/aprobadas/' + id,
        type: "GET",
        dataType: 'JSON',
        success: function(data) {

          var superficie = bundle + '_superficieHa';
          var densidad = bundle + '_densidad';
          var tipoActividad = bundle + '_tipoActividad';
          var etapa = bundle + '_etapa';
          var especie = bundle + '_especie';
          if ($(superficie).val().length === 0) {
            $(superficie).val(data.superficie);
          }
          if ($(densidad).val().length === 0) {
            $(densidad).val(data.densidad);
          }
          if ($(tipoActividad).val().length === 0) {
            $(tipoActividad).val(parseInt(data.tipoActividad));
          }
          if ($(especie).val().length === 0) {
            $(especie).val(parseInt(data.especie));
          }
          if ($(etapa).length && $(etapa).val().length === 0) {
            $(etapa).val(data.etapa);
          }
          $.ajax({
            url: '/resoluciones/calculate/' + id,
            type: "GET",
            dataType: 'JSON',
            success: function(data) {
              var pago = bundle + '_montoPago';
              var observacion = bundle + '_observacion';
              var pagoRest = data.costo;
              $(pago).val(pagoRest.toString());
              $(observacion).val(data.detalle);
              $('.wait').hide();
            },
            error: function(log) {
              $('.wait').hide();
            }
          });
        },
        error: function(log) {
          $('.wait').hide();
        }
      });
    }
  });

  $("form[name='appbundle_expedientes']").on('submit', function() {
    $('input, select').prop('disabled', false);
  });


  function resolucionRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});