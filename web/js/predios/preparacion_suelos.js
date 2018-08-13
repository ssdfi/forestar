$(document).ready(function () {

  $('#add-preparacion-suelo').click(function (e) {
    e.preventDefault();
    preparacionSueloAdd();
    return;
  });


  $(document).on( "click",'.remove-preparacion-suelo',function (e) {
    e.preventDefault();
    preparacionSueloRemove(this);
    return;
  });

  function preparacionSueloAdd() {
      var collectionHolder = $('.preparacionesSuelo');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function preparacionSueloRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
