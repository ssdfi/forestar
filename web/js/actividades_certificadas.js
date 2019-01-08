$(document).ready(function () {

  $('.add-actividad-certificada').click(function (e) {
    e.preventDefault();
    actividadCertificadaAdd($(this).data('type'));
    return;
  });


  $(document).on( "click",'.remove-actividad-certificada',function (e) {
    e.preventDefault();
    actividadCertificadaRemove(this);
    return;
  });

  function actividadCertificadaAdd(type) {
      var collectionHolder = $('.prototype');
      var table = $('.actividadesCertificadas_'+type);
      var collectionCount = $('.prototype').data('index');
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      $('.prototype').attr('index', (collectionCount+1))
      var newLi = $('<tr class="fields"></tr>').html(prototipo);
      newLi.find('.combobox').combobox();
      hideFields(type, collectionCount, newLi);
      newLi.appendTo(table).trigger('create');
      $("input[data-label]").each(function() {
          $(this).bootstrapSwitch({
              labelText: this.dataset.label,
              onText: "SI",
              offText: "NO"
          });
      });
      return;
  }

  function actividadCertificadaRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }
  function hideFields(type, count, tr){
    switch (type) {
      case 'raleo':
        $(tr).find(`[data-attr='alturaPoda']`).remove();
        $(tr).find(`[data-attr='alturaPromedioPlantacion']`).remove();
        $(tr).find(`[data-attr='cantidadArbolesPodados']`).remove();
        $(tr).find(`[data-attr='numeroPoda']`).remove();
        $(tr).find(`[data-attr='porcentajeFallas']`).remove();
        $(tr).find(`[data-attr='turnoCorta']`).remove();
        $(tr).find(`[data-attr='riego']`).remove();
        $(tr).find(`[data-attr='edadCepa']`).remove();
        $(tr).find(`[data-attr='edadRebrote']`).remove();
        $(tr).find(`[data-attr='numeroBrotesCepas']`).remove();
        $(tr).find(`[data-attr='longitudFilas']`).remove();
        $(tr).find(`[data-attr='numeroFilas']`).remove();
        $(tr).find(`[data-attr='distanciaPlantas']`).remove();
        $(tr).find(`[data-attr='cantidadArboles']`).remove();
        break;
      case 'poda':
        $(tr).find(`[data-attr='densidadPrevia']`).remove();
        $(tr).find(`[data-attr='densidad']`).remove();
        $(tr).find(`[data-attr='numeroArbolesExtraidos']`).remove();
        $(tr).find(`[data-attr='porcentajeFallas']`).remove();
        $(tr).find(`[data-attr='turnoCorta']`).remove();
        $(tr).find(`[data-attr='riego']`).remove();
        $(tr).find(`[data-attr='edadCepa']`).remove();
        $(tr).find(`[data-attr='edadRebrote']`).remove();
        $(tr).find(`[data-attr='numeroBrotesCepas']`).remove();
        $(tr).find(`[data-attr='longitudFilas']`).remove();
        $(tr).find(`[data-attr='numeroFilas']`).remove();
        $(tr).find(`[data-attr='distanciaPlantas']`).remove();
        $(tr).find(`[data-attr='cantidadArboles']`).remove();
        break;
      case 'macizo':
        $(tr).find(`[data-attr='edadPlantacion']`).remove();
        $(tr).find(`[data-attr='dapPromedio']`).remove();
        $(tr).find(`[data-attr='densidadPrevia']`).remove();
        $(tr).find(`[data-attr='numeroArbolesExtraidos']`).remove();
        $(tr).find(`[data-attr='alturaPoda']`).remove();
        $(tr).find(`[data-attr='alturaPromedioPlantacion']`).remove();
        $(tr).find(`[data-attr='cantidadArbolesPodados']`).remove();
        $(tr).find(`[data-attr='numeroPoda']`).remove();
        $(tr).find(`[data-attr='edadCepa']`).remove();
        $(tr).find(`[data-attr='edadRebrote']`).remove();
        $(tr).find(`[data-attr='numeroBrotesCepas']`).remove();
        $(tr).find(`[data-attr='longitudFilas']`).remove();
        $(tr).find(`[data-attr='numeroFilas']`).remove();
        $(tr).find(`[data-attr='distanciaPlantas']`).remove();
        $(tr).find(`[data-attr='cantidadArboles']`).remove();
        break;
      case 'cortina':
        $(tr).find(`[data-attr='edadPlantacion']`).remove();
        $(tr).find(`[data-attr='dapPromedio']`).remove();
        $(tr).find(`[data-attr='densidadPrevia']`).remove();
        $(tr).find(`[data-attr='numeroArbolesExtraidos']`).remove();
        $(tr).find(`[data-attr='alturaPoda']`).remove();
        $(tr).find(`[data-attr='alturaPromedioPlantacion']`).remove();
        $(tr).find(`[data-attr='cantidadArbolesPodados']`).remove();
        $(tr).find(`[data-attr='numeroPoda']`).remove();
        $(tr).find(`[data-attr='porcentajeFallas']`).remove();
        $(tr).find(`[data-attr='densidad']`).remove();
        $(tr).find(`[data-attr='edadCepa']`).remove();
        $(tr).find(`[data-attr='edadRebrote']`).remove();
        $(tr).find(`[data-attr='numeroBrotesCepas']`).remove();
        break;
      case 'manejoRebrote':
        $(tr).find(`[data-attr='edadPlantacion']`).remove();
        $(tr).find(`[data-attr='dapPromedio']`).remove();
        $(tr).find(`[data-attr='densidadPrevia']`).remove();
        $(tr).find(`[data-attr='numeroArbolesExtraidos']`).remove();
        $(tr).find(`[data-attr='alturaPoda']`).remove();
        $(tr).find(`[data-attr='alturaPromedioPlantacion']`).remove();
        $(tr).find(`[data-attr='cantidadArbolesPodados']`).remove();
        $(tr).find(`[data-attr='numeroPoda']`).remove();
        $(tr).find(`[data-attr='densidad']`).remove();
        $(tr).find(`[data-attr='porcentajeFallas']`).remove();
        $(tr).find(`[data-attr='turnoCorta']`).remove();
        $(tr).find(`[data-attr='riego']`).remove();
        $(tr).find(`[data-attr='longitudFilas']`).remove();
        $(tr).find(`[data-attr='numeroFilas']`).remove();
        $(tr).find(`[data-attr='distanciaPlantas']`).remove();
        $(tr).find(`[data-attr='cantidadArboles']`).remove();
        break;
      case 'enriquecimientoBN':
        $(tr).find(`[data-attr='edadPlantacion']`).remove();
        $(tr).find(`[data-attr='dapPromedio']`).remove();
        $(tr).find(`[data-attr='densidadPrevia']`).remove();
        $(tr).find(`[data-attr='numeroArbolesExtraidos']`).remove();
        $(tr).find(`[data-attr='alturaPoda']`).remove();
        $(tr).find(`[data-attr='alturaPromedioPlantacion']`).remove();
        $(tr).find(`[data-attr='cantidadArbolesPodados']`).remove();
        $(tr).find(`[data-attr='numeroPoda']`).remove();
        $(tr).find(`[data-attr='porcentajeFallas']`).remove();
        $(tr).find(`[data-attr='turnoCorta']`).remove();
        $(tr).find(`[data-attr='riego']`).remove();
        $(tr).find(`[data-attr='edadCepa']`).remove();
        $(tr).find(`[data-attr='edadRebrote']`).remove();
        $(tr).find(`[data-attr='numeroBrotesCepas']`).remove();
        $(tr).find(`[data-attr='longitudFilas']`).remove();
        $(tr).find(`[data-attr='numeroFilas']`).remove();
        $(tr).find(`[data-attr='distanciaPlantas']`).remove();
        $(tr).find(`[data-attr='cantidadArboles']`).remove();
        $(tr).find(`[data-attr='tuvietan']`).remove();
        $(tr).find(`[data-attr='tuvietan']`).remove();
        $(tr).find(`[data-attr='tuvietan']`).remove();
        break;
      default:

    }
  }
});
