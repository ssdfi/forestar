$(document).ready(function () {

  $('#add-cronograma-plantacion').click(function (e) {
    e.preventDefault();
    cronogramaPlantacionAdd();
    return;
  });


  $(document).on( "click",'.remove-cronograma-plantacion',function (e) {
    e.preventDefault();
    cronogramaPlantacionRemove(this);
    return;
  });

  function cronogramaPlantacionAdd() {
      var collectionHolder = $('.cronogramaPlantaciones');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function cronogramaPlantacionRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
