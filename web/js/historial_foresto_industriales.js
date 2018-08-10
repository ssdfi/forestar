$(document).ready(function () {

  $('#add-historial-foresto-industrial').click(function (e) {
    e.preventDefault();
    historialForestoIndustrialAdd();
    return;
  });


  $(document).on( "click",'.remove-historial-foresto-industrial',function (e) {
    e.preventDefault();
    historialForestoIndustrialRemove(this);
    return;
  });

  function historialForestoIndustrialAdd() {
      var collectionHolder = $('.historialForestoIndustriales');
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

  function historialForestoIndustrialRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
