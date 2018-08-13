$(document).ready(function () {

  $('#add-sistematizacion').click(function (e) {
    e.preventDefault();
    sistematizacionAdd();
    return;
  });


  $(document).on( "click",'.remove-sistematizacion',function (e) {
    e.preventDefault();
    sistematizacionRemove(this);
    return;
  });

  function sistematizacionAdd() {
      var collectionHolder = $('.sistematizaciones');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function sistematizacionRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
