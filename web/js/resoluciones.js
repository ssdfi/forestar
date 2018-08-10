$(document).ready(function () {

  $('#add-resolucion').click(function (e) {
    e.preventDefault();
    resolucionAdd();
    return;
  });


  $(document).on( "click",'.remove-resolucion',function (e) {
    e.preventDefault();
    resolucionRemove(this);
    return;
  });

  function resolucionAdd() {
      var collectionHolder = $('.resoluciones');
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

  function resolucionRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
