function validateForm() {
  var x = document.forms["form"]["cin"].value;
  if (x == "") {
    alert("Reference must be filled out");
    return false;
  }
  var y = document.forms["form"]["nom"].value;
  if (y == "") {
    alert("First Name must be filled out");
    return false;
  }
  var z = document.forms["form"]["prenom"].value;
  if (z == "") {
    alert("Last Name must be filled out");
    return false;
  }
  
  var v = document.forms["form"]["mail"].value;
  if (v == "") {
    alert("Mail must be filled out");
    return false;
  }
  var u = document.forms["form"]["adresse"].value;
  if (u == "") {
    alert("Adress must be filled out");
    return false;
  }
  var m = document.forms["form"]["num"].value;
  if (m == "") {
    alert("Number must be filled out");
    return false;
  }
  
  var n = document.forms["form"]["mot_dp"].value;
  if (n == "") {
    alert("Password must be filled out");
    return false;
  }
}
