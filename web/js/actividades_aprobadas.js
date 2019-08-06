$(document).ready(function () {

  $('#add-actividad-aprobada').click(function (e) {
    e.preventDefault();
    actividadAprobadaAdd();
    return;
  });


  $(document).on( "click",'.remove-actividad-aprobada',function (e) {
    e.preventDefault();
    actividadAprobadaRemove(this);
    return;
  });

  function actividadAprobadaAdd() {
      var collectionHolder = $('.actividadesAprobadas');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.find('.combobox').combobox();
      newLi.appendTo(collectionHolder).trigger('create');
      $("input[data-label]").each(function() {
          $(this).bootstrapSwitch({
              labelText: this.dataset.label,
              onText: "SI",
              offText: "NO"
          });
      });
      return;
  }

  function actividadAprobadaRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

  $(document).on('change', '.actividadesAprobadas_inspeccion', function(){
        var id = $(this).children("option:selected").val();
        var index =$(this).closest("tr").index();
        $('.wait').show();
        $.ajax({
          url:  '/actividades/inspeccionadas/'+id,
          type: "GET",
          dataType: 'JSON',
          success:function(data) {
            $('.wait').hide();
            var superficie = '#appbundle_expedientes_actividadesAprobadas_'+index+'_superficieHa';
            var densidad = '#appbundle_expedientes_actividadesAprobadas_'+index+'_densidad';
            var tipoActividad = '#appbundle_expedientes_actividadesAprobadas_'+index+'_tipoActividad';
            var etapa = '#appbundle_expedientes_actividadesAprobadas_'+index+'_etapa';
            var especie = '#appbundle_expedientes_actividadesAprobadas_'+index+'_especie';

            if ($(superficie).val().length === 0){
              $(superficie).val(data.superficie);
            }
            if ($(densidad).val().length === 0){
              $(densidad).val(data.densidad);
            }
            if ($(tipoActividad).val().length === 0){
              $(tipoActividad).val(parseInt(data.tipoActividad));
            }
            if ($(especie).val().length === 0){
              $(especie).val(parseInt(data.especie));
            }
            if ($(etapa).length && $(etapa).val().length === 0){
              $(etapa).val(data.etapa);
            }
          },
          error: function(log){
            $('.wait').hide();
          }
       });
     });

     var clickCount = 0;
     $(document).on('click', '.especies', function(){
       var index = $(this).closest("tr").index();
       changeState('especie',index);
     });

     $(document).on('click', '.tipoActividades', function(){
       var index = $(this).closest("tr").index();
       changeState('tipoActividad',index);
     });

     function changeState(name, index){
       var collectionName = 'appbundle_expedientes_actividadesAprobadas_' ;
       clickCount += 1;
       if (clickCount >= 4) {
         $("#"+collectionName+index+"_"+name).prop("disabled", false);
       }
       clearTimeout(this.enableServerTimeout);
       this.enableServerTimeout = setTimeout(function () {
          clickCount = 0;
        }, 1000);
     }


});
