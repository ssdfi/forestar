$(document).ready(function () {

  $('#add-telefono').click(function (e) {
    e.preventDefault();
    telefonoAdd();
    return;
  });


  $(document).on( "click",'.remove-telefono',function (e) {
    e.preventDefault();
    telefonoRemove(this);
    return;
  });

  function telefonoAdd() {
      var collectionHolder = $('.telefonos');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.find('.combobox').combobox();
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

  function telefonoRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
