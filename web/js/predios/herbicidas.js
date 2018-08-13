$(document).ready(function () {

  $('#add-herbicida').click(function (e) {
    e.preventDefault();
    herbicidaAdd();
    return;
  });


  $(document).on( "click",'.remove-herbicida',function (e) {
    e.preventDefault();
    herbicidaRemove(this);
    return;
  });

  function herbicidaAdd() {
      var collectionHolder = $('.herbicidas');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function herbicidaRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
