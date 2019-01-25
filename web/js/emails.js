$(document).ready(function () {

  $('#add-email').click(function (e) {
    e.preventDefault();
    emailAdd();
    return;
  });


  $(document).on( "click",'.remove-email',function (e) {
    e.preventDefault();
    emailRemove(this);
    return;
  });

  function emailAdd() {
      var collectionHolder = $('.emails');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.find('.combobox').combobox();
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function emailRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
