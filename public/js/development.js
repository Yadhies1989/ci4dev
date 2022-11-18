$(document).ready(function () {
  $("#btn1").click(function () {
    var pilihan1 = $("#select1").val();
    var pilihan2 = $("#select2").val();

    console.log(pilihan1);
    console.log(pilihan2);
    $.ajax({
      url: baseURL + "/home/action",
      method: "GET",
      data: {
        pilihan1: pilihan1,
        pilihan2: pilihan2,
      },
      dataType: "JSON",
      success: function (data) {
        $("#staticEmail").val(data[0].biaya_materai);
        $("#biaya").val(data[0].biaya_panggilan_t);

        // var html = "<p>test : " + data[0].biaya_mediasi + "</p>";
        // $("#show-data").html(html);
        // jQuery("#no-radius").modal("show");
        // console.log(data[0].biaya_materai);
      },
    });
  });

  $("#btn2").click(function () {
    $("#biaya").val("test");
  });
});
