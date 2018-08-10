$(document).ready(function () {

  $('#add-estabilidad-fiscal').click(function (e) {
    e.preventDefault();
    estabilidadFiscalAdd();
    return;
  });


  $(document).on( "click",'.remove-estabilidad-fiscal',function (e) {
    e.preventDefault();
    estabilidadFiscalRemove(this);
    return;
  });

  function estabilidadFiscalAdd() {
      var collectionHolder = $('.estabilidadFiscales');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function estabilidadFiscalRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
