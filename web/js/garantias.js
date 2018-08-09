$(document).ready(function () {

  $('#add-garantia').click(function (e) {
    e.preventDefault();
    garantiaAdd();
    return;
  });


  $(document).on( "click",'.remove-garantia',function (e) {
    e.preventDefault();
    garantiaRemove(this);
    return;
  });

  function garantiaAdd() {
      var collectionHolder = $('.garantias');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function garantiaRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
