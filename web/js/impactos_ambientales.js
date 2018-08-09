$(document).ready(function () {

  $('#add-impacto-ambiental').click(function (e) {
    e.preventDefault();
    impactoAmbientalAdd();
    return;
  });


  $(document).on( "click",'.remove-impacto-ambiental',function (e) {
    e.preventDefault();
    impactoAmbientalRemove(this);
    return;
  });

  function impactoAmbientalAdd() {
      var collectionHolder = $('.impactosAmbientales');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function impactoAmbientalRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
