$(document).ready(function () {

  $('#add-domicilio').click(function (e) {
    e.preventDefault();
    domicilioAdd();
    return;
  });

  $(document).on( "click",'.remove-domicilio',function (e) {
    e.preventDefault();
    domicilioRemove(this);
    return;
  });

  function domicilioAdd() {
      var collectionHolder = $('.domicilios');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function domicilioRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
