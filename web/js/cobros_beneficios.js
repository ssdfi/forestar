$(document).ready(function () {

  $('#add-cobro-beneficio').click(function (e) {
    e.preventDefault();
    cobroBeneficioAdd();
    return;
  });


  $(document).on( "click",'.remove-cobros-beneficio',function (e) {
    e.preventDefault();
    cobroBeneficioRemove(this);
    return;
  });

  function cobroBeneficioAdd() {
      var collectionHolder = $('.cobrosBeneficios');
      var collectionCount = collectionHolder.children().length;
      var prototipo = collectionHolder.attr('data-prototype');
      prototipo = prototipo.replace(/___count___/g, (collectionCount+1));
      prototipo = prototipo.replace(/___heading___/g, 'heading'+(collectionCount+1));
      prototipo = prototipo.replace(/___collapse___/g, 'collapse'+(collectionCount+1));
      prototipo = prototipo.replace(/__name__/g, collectionCount);
      collectionCount++;
      var newLi = jQuery('<div class="card"></tr>').html(prototipo);
      newLi.appendTo(collectionHolder).trigger('create');
      var nombre = 'appbundle_expedientes_cobroBeneficios_'+(collectionCount-1)+'_nombreBanco';
      var nombreBanco = document.getElementById(nombre);
      var headName = ".head-name"+(collectionCount);
      $(nombreBanco).keyup(function() {
          $(headName).text(this.value);
      });
      return;
  }

  function cobroBeneficioRemove(btn) {
    var row = $(btn).closest('.card');
    console.log(row);
    row.remove();
    return false;
  }

});
