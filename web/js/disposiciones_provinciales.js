$(document).ready(function () {

  $('#add-disposicion-provincial').click(function (e) {
    e.preventDefault();
    disposicionProvincialAdd();
    return;
  });


  $(document).on( "click",'.remove-disposicion-provincial',function (e) {
    e.preventDefault();
    disposicionProvincialRemove(this);
    return;
  });

  function disposicionProvincialAdd() {
      var collectionHolder = $('.disposicionesProvinciales');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function disposicionProvincialRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
