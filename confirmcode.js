function confirmPasscode(code) {
  $.post("confirmcode.php", { password: code }, function (data) {
    if (data != "") {
      if (data == "success") {
        console.log("Correct Password");
        //TODO code for success
      } else {
        console.log("Incorrect Password: " + data);
        //TODO code for failed
      }
    } else {
      console.log("No Data");
    }
  });
}
