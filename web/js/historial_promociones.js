$(document).ready(function () {

  $('#add-historial-promocion').click(function (e) {
    e.preventDefault();
    historialPromocionAdd();
    return;
  });


  $(document).on( "click",'.remove-historial-promocion',function (e) {
    e.preventDefault();
    historialPromocionRemove(this);
    return;
  });

  function historialPromocionAdd() {
      var collectionHolder = $('.historialPromociones');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      $("input[data-label]").each(function() {
          $(this).bootstrapSwitch({
              labelText: this.dataset.label,
              onText: "SI",
              offText: "NO"
          });
      });
      return;
  }

  function historialPromocionRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
