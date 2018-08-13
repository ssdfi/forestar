$(document).ready(function () {

  $('#add-material-plantacion').click(function (e) {
    e.preventDefault();
    materialPlantacionAdd();
    return;
  });


  $(document).on( "click",'.remove-material-plantacion',function (e) {
    e.preventDefault();
    materialPlantacionRemove(this);
    return;
  });

  function materialPlantacionAdd() {
      var collectionHolder = $('.materialesPlantaciones');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function materialPlantacionRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
