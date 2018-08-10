$(document).ready(function () {

  $('#add-historial-legal').click(function (e) {
    e.preventDefault();
    historialLegalAdd();
    return;
  });


  $(document).on( "click",'.remove-historial-legal',function (e) {
    e.preventDefault();
    historialLegalRemove(this);
    return;
  });

  function historialLegalAdd() {
      var collectionHolder = $('.historialLegales');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function historialLegalRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
