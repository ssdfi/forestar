$(document).ready(function () {

  $('#add-beneficio-fiscal').click(function (e) {
    e.preventDefault();
    beneficioFiscalAdd();
    return;
  });


  $(document).on( "click",'.remove-beneficio-fiscal',function (e) {
    e.preventDefault();
    beneficioFiscalRemove(this);
    return;
  });

  function beneficioFiscalAdd() {
      var collectionHolder = $('.beneficiosFiscales');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      $.fn.bootstrapSwitch.defaults.labelWidth = '150';
      $("input[data-label]").each(function() {
          $(this).bootstrapSwitch({
              labelText: this.dataset.label,
              onText: "SI",
              offText: "NO"
          });
      });
      return;
  }

  function beneficioFiscalRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
