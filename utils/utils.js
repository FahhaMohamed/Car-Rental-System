$(document).ready(function () {

  $("#myTable").DataTable({
    paging: true,
    pageLength: 10,
    searching: true,
    ordering: true,
    info: false,
    order: [[ 0, "dec" ]],
    lengthMenu: [
      [10, 25, 50, -1],
      [10, 25, 50, "All"],
    ],
  });

  //show model form
  $(".add").on("click", function () {
    $(".new-table").css("display", "none");
    $("#sub").css("display", "none");
    $(".model").css("display", "flex");
    $(".add").css("display", "none");
  });

  //disable model form
  $("#close").on("click", function () {

    $(".new-table").css("display", "block");
    $("#sub").css("display", "block");
    $(".model").css("display", "none");
    $(".add").css("display", "flex");
  });
  
});
