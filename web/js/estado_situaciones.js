$(document).ready(function () {

  $('#add-estado-situacion').click(function (e) {
    e.preventDefault();
    estadoSituacionAdd();
    return;
  });


  $(document).on( "click",'.remove-estado-situacion',function (e) {
    e.preventDefault();
    estadoSituacionRemove(this);
    return;
  });

  function estadoSituacionAdd() {
      var collectionHolder = $('.estadoSituaciones');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function estadoSituacionRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
