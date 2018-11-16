$(document).ready(function () {

  $('#add-actividad-certificada').click(function (e) {
    e.preventDefault();
    actividadCertificadaAdd();
    return;
  });


  $(document).on( "click",'.remove-actividad-certificada',function (e) {
    e.preventDefault();
    actividadCertificadaRemove(this);
    return;
  });

  function actividadCertificadaAdd() {
      var collectionHolder = $('.actividadesCertificadas');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<tr class="fields"></tr>').html(prototipo);
      newLi.find('.combobox').combobox();
      newLi.appendTo(collectionHolder).trigger('create');
      return;
  }

  function actividadCertificadaRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
