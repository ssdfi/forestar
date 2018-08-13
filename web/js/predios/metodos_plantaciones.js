$(document).ready(function () {

  $('#add-metodo-plantacion').click(function (e) {
    e.preventDefault();
    metodoPlantacionAdd();
    return;
  });


  $(document).on( "click",'.remove-metodo-plantacion',function (e) {
    e.preventDefault();
    metodoPlantacionRemove(this);
    return;
  });

  function metodoPlantacionAdd() {
      var collectionHolder = $('.metodosPlantaciones');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function metodoPlantacionRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
