$(document).ready(function () {

  $('#add-impacto-ambiental').click(function (e) {
    e.preventDefault();
    impactoAmbientalAdd();
    return;
  });


  $(document).on( "click",'.remove-impacto-ambiental',function (e) {
    e.preventDefault();
    impactoAmbientalRemove(this);
    return;
  });

  /* cuando se edita y hay items se ocultan columnas */
  $(".impactosAmbientales input[data-label]").each(function(number,obj) {
    $(obj).bootstrapSwitch({labelText: obj.dataset.label, onText: "SI", offText: "NO"});
    hideColumn(number,$("#appbundle_expedientes_impactosAmbientales_"+(number)+"_aprobado").bootstrapSwitch('state'));
    $("#appbundle_expedientes_impactosAmbientales_"+(number)+"_aprobado").on('switchChange.bootstrapSwitch', function (event, state) {
      hideColumn(number, state);
    });
  });

  function impactoAmbientalAdd() {
      var collectionHolder = $('.impactosAmbientales');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      $("input[data-label]").each(function() {
          $(this).bootstrapSwitch({
              labelText: this.dataset.label,
              onText: "SI",
              offText: "NO"
          });
      });
      hideColumn(collectionCount-1, false);
      $("#appbundle_expedientes_impactosAmbientales_"+(collectionCount-1)+"_aprobado").on('switchChange.bootstrapSwitch', function (event, state) {
        hideColumn(collectionCount-1, state);
      });

      return;
  }

  function hideColumn(number, state){
    if (state === false) {
      $('#appbundle_expedientes_impactosAmbientales_'+number+'_resolucionNumero').hide();
      $('#appbundle_expedientes_impactosAmbientales_'+number+'_observacion').hide();
    } else {
      $('#appbundle_expedientes_impactosAmbientales_'+number+'_resolucionNumero').show();
      $('#appbundle_expedientes_impactosAmbientales_'+number+'_observacion').show();
    }
  }

  function impactoAmbientalRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
