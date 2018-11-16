$(document).ready(function () {

  $('#add-actividad-presentada').click(function (e) {
    e.preventDefault();
    actividadPresentadaAdd();
    return;
  });


  $(document).on( "click",'.remove-actividad-presentada',function (e) {
    e.preventDefault();
    actividadPresentadaRemove(this);
    return;
  });

  function actividadPresentadaAdd() {
      var collectionHolder = $('.actividadesPresentadas');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.find('.combobox').combobox();
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function actividadPresentadaRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
