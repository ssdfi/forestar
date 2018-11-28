$(document).ready(function () {

  $('#add-otbn').click(function (e) {
    e.preventDefault();
    otbnAdd();
    return;
  });


  $(document).on( "click",'.remove-otbn',function (e) {
    e.preventDefault();
    otbnRemove(this);
    return;
  });

  function otbnAdd() {
      var collectionHolder = $('.otbns');
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

  function otbnRemove(btn) {
    var row = $(btn).closest('.fields');
    row.remove();
    return false;
  }

});
