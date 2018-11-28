$(document).ready(function () {

  $('#add-evaluacion-tecnico').click(function (e) {
    e.preventDefault();
    evaluacionTecnicoAdd();
    return;
  });


  $(document).on( "click",'.remove-evaluacion-tecnico',function (e) {
    e.preventDefault();
    evaluacionTecnicoRemove(this);
    return;
  });

  function evaluacionTecnicoAdd() {
      var collectionHolder = $('.evaluacionTecnicos');
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

  function evaluacionTecnicoRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
