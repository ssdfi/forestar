$(document).ready(function () {

  $('#add-declaracion-iva').click(function (e) {
    e.preventDefault();
    declaracionIvaAdd();
    return;
  });


  $(document).on( "click",'.remove-declaracion-iva',function (e) {
    e.preventDefault();
    declaracionIvaRemove(this);
    return;
  });

  function declaracionIvaAdd() {
      var collectionHolder = $('.declaracionesIva');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function declaracionIvaRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
