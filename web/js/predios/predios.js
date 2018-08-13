$(document).ready(function () {

  $('#add-predio').click(function (e) {
    e.preventDefault();
    predioAdd();
    return;
  });


  $(document).on( "click",'.remove-predio',function (e) {
    e.preventDefault();
    predioRemove(this);
    return;
  });

  function predioAdd() {
      var collectionHolder = $('.predios');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/___count___/g, (collectionCount+1));
      prototipo = prototipo.replace(/___heading___/g, 'heading'+(collectionCount+1));
      prototipo = prototipo.replace(/___collapse___/g, 'collapse'+(collectionCount+1));
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<div class="row"></div>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function predioRemove(btn) {
    var row = $(btn).closest('.card');
    row.remove();
    return false;
  }

});
