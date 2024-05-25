// kolom pencarian di laporan
var $rows = $("#table .data");
$("#carilaporan").keyup(function () {
  var val = $.trim($(this).val()).replace(/ +/g, " ").toLowerCase();

  $rows
    .show()
    .filter(function () {
      var text = $(this).text().replace(/\s+/g, " ").toLowerCase();
      return !~text.indexOf(val);
    })
    .hide();
});
