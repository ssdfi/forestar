$(document).ready(function () {

  $('#add-declaracion-iva-resolucion').click(function (e) {
    e.preventDefault();
    declaracionIvaResolucionAdd();
    return;
  });


  $(document).on( "click",'.remove-declaracion-iva-resolucion',function (e) {
    e.preventDefault();
    declaracionIvaResolucionRemove(this);
    return;
  });

  function declaracionIvaResolucionAdd() {
      var collectionHolder = $('.declaracionesIvaResoluciones');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function declaracionIvaResolucionRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
