$(document).ready(function () {

  $('#add-beneficio-fiscal-solicitado').click(function (e) {
    e.preventDefault();
    beneficioFiscalSolicitadoAdd();
    return;
  });


  $(document).on( "click",'.remove-beneficio-fiscal-solicitado',function (e) {
    e.preventDefault();
    beneficioFiscalSolicitadoRemove(this);
    return;
  });

  function beneficioFiscalSolicitadoAdd() {
      var collectionHolder = $('.beneficiosFiscalesSolicitados');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function beneficioFiscalSolicitadoRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
