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
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function actividadAprobadaRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
