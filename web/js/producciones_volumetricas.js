$(document).ready(function () {
  $('.combobox').combobox();
  $('#add-produccion-volumetrica').click(function (e) {
    e.preventDefault();
    produccionVolumetricaAdd();
    return;
  });


  $(document).on( "click",'.remove-produccion-volumetrica',function (e) {
    e.preventDefault();
    produccionVolumetricaRemove(this);
    return;
  });

  function produccionVolumetricaAdd() {
      var collectionHolder = $('.produccionesVolumetricas');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.find('.combobox').combobox();
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function produccionVolumetricaRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
