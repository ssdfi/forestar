(function() {
  $(document).ready(function() {
    /* Elimina los titulares seleccionados */
    $("#remove-titular").click(function() {
      var titular, _i, _len, _ref, _results;
      _ref = $("#appbundle_expedientes_titulares option:selected");
      _results = [];
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        titular = _ref[_i];
        _results.push(titular.remove());
      }
      return _results;
    });
  });
}).call(this);
