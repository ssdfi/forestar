$(document).ready(function () {

  $('#add-control-plaga').click(function (e) {
    e.preventDefault();
    controlPlagaAdd();
    return;
  });


  $(document).on( "click",'.remove-control-plaga',function (e) {
    e.preventDefault();
    controlPlagaRemove(this);
    return;
  });

  function controlPlagaAdd() {
      var collectionHolder = $('.controlPlagas');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function controlPlagaRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
