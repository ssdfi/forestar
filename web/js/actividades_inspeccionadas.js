$(document).ready(function () {

  $('.add-actividad-inspeccionada').click(function (e) {
    e.preventDefault();
    actividadInspeccionadaAdd($(this).data('type'));
    return;
  });


  $(document).on( "click",'.remove-actividad-inspeccionada',function (e) {
    e.preventDefault();
    actividadInspeccionadaRemove(this);
    return;
  });

    $("form[name='appbundle_expedientes']").on('submit', function() {
      $('input, select').prop('disabled', false);
    });

  function actividadInspeccionadaAdd(type) {
      var collectionHolder = $('.inspeccionada-prototype');
      var table = $('.actividadesInspeccionadas_'+type);
      var collectionCount = $('.inspeccionada-prototype').data('index');
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
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
      setTipoActividad(type,collectionCount);
      collectionCount+=1;
      $('.inspeccionada-prototype').data('index', collectionCount);
      return;
  }

  function actividadInspeccionadaRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

  function setTipoActividad(type, count){
    if ($('.'+type).is(":visible") === false) {
      $('.'+type).show();
    }
    switch (type) {
      case 'inspeccionadas-raleo':
        $('#appbundle_expedientes_actividadesInspeccionadas_'+count+'_tipoActividad').val(3);
        break;
      case 'inspeccionadas-poda':
        $('#appbundle_expedientes_actividadesInspeccionadas_'+count+'_tipoActividad').val(2);
        break;
      case 'inspeccionadas-macizo':
        $('#appbundle_expedientes_actividadesInspeccionadas_'+count+'_tipoActividad').val(1);
        break;
      case 'inspeccionadas-cortina':
        $('#appbundle_expedientes_actividadesInspeccionadas_'+count+'_tipoActividad').val(6);
        break;
      case 'inspeccionadas-manejoRebrote':
        $('#appbundle_expedientes_actividadesInspeccionadas_'+count+'_tipoActividad').val(4);
        break;
      case 'inspeccionadas-enriquecimientoBN':
        $('#appbundle_expedientes_actividadesInspeccionadas_'+count+'_tipoActividad').val(5);
        break;
      default:
    }
  }

  function hideFields(type, count, tr){
    switch (type) {
      case 'inspeccionadas-raleo':
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
      case 'inspeccionadas-poda':
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
      case 'inspeccionadas-macizo':
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
      case 'inspeccionadas-cortina':
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
      case 'inspeccionadas-manejoRebrote':
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
      case 'inspeccionadas-enriquecimientoBN':
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
        break;
      default:
    }
  }
});
