$(document).ready(function () {

  $('#add-historial-sig').click(function (e) {
    e.preventDefault();
    historialSigAdd();
    return;
  });


  $(document).on( "click",'.remove-historial-sig',function (e) {
    e.preventDefault();
    historialSigRemove(this);
    return;
  });

  function historialSigAdd() {
      var collectionHolder = $('.historialSigs');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function historialSigRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
