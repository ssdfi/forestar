$(document).ready(function () {

  $('#add-historial-contable').click(function (e) {
    e.preventDefault();
    historialContableAdd();
    return;
  });


  $(document).on( "click",'.remove-historial-contable',function (e) {
    e.preventDefault();
    historialContableRemove(this);
    return;
  });

  function historialContableAdd() {
      var collectionHolder = $('.historialContables');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function historialContableRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
