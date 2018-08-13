$(document).ready(function () {

  $('#add-control-maleza').click(function (e) {
    e.preventDefault();
    controlMalezaAdd();
    return;
  });


  $(document).on( "click",'.remove-control-maleza',function (e) {
    e.preventDefault();
    controlMalezaRemove(this);
    return;
  });

  function controlMalezaAdd() {
      var collectionHolder = $('.controlMalezas');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function controlMalezaRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
