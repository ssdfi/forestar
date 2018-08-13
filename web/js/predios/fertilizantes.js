$(document).ready(function () {

  $('#add-fertilizante').click(function (e) {
    e.preventDefault();
    fertilizanteAdd();
    return;
  });


  $(document).on( "click",'.remove-fertilizante',function (e) {
    e.preventDefault();
    fertilizanteRemove(this);
    return;
  });

  function fertilizanteAdd() {
      var collectionHolder = $('.fertilizantes');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function fertilizanteRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
