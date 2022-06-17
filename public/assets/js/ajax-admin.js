$(document).ready(function () {
  loadData();
  function loadData() {
    $.ajax({
      url: "http://localhost:8080/KomikAddict/public/admin/tableContent",
      method: "POST",
      success: function (data) {
        $("#content").html(data);
      },
    });
  }
});
