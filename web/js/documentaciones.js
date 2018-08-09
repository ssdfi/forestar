$(document).ready(function () {

  $('#add-documentacion').click(function (e) {
    e.preventDefault();
    documentacionAdd();
    return;
  });


  $(document).on( "click",'.remove-documentacion',function (e) {
    e.preventDefault();
    documentacionRemove(this);
    return;
  });

  function documentacionAdd() {
      var collectionHolder = $('.documentaciones');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function documentacionRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
