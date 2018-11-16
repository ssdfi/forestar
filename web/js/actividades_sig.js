$(document).ready(function () {

  $('#add-actividad-sig').click(function (e) {
    e.preventDefault();
    actividadSigAdd();
    return;
  });


  $(document).on( "click",'.remove-actividad-sig',function (e) {
    e.preventDefault();
    actividadSigRemove(this);
    return;
  });

  function actividadSigAdd() {
      var collectionHolder = $('.actividadesSig');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.find('.combobox').combobox();
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function actividadSigRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
