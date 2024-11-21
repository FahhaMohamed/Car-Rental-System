$(document).ready(function () {
  $("#save").click(function (event) {
    event.preventDefault();
    // alert("Details saved");

    //get current date
    const today = new Date();
    const year = today.getFullYear();
    const month = String(today.getMonth() + 1).padStart(2, "0");
    const day = String(today.getDate()).padStart(2, "0"); 
    const now =  `${year}-${month}-${day}`;

    document.getElementById("today").value = now;

    if ($("#rental")[0].checkValidity()) {
      $.ajax({
        url: "database/operations/rentals/rental_insert.php",
        type: "post",
        data: $("#rental").serialize(),
        success: function (d) {
          console.log(d);

          $("<tr></tr>").prepend(d).prependTo(".rentalTable");

          $("#rental")[0].reset();
          
        },
        error: function () {
          alert("Something went wrong!");
        },
      });
    } else {
      alert("All Fields are Required!");
    }
  });
});
