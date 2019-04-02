function validateForm() {
  var x = document.forms["form"]["num"].value;
  if (x == "") {
    alert("Number must be filled out");
    return false;
	}
    var y = document.forms["form"]["nom"].value;
  if (y == "") {
    alert("First Name must be filled out");
    return false;}
    var z = document.forms["form"]["prenom"].value;
  if (z == "") {
    alert("Last Name must be filled out");
    return false;}
    var w = document.forms["form"]["adress"].value;
  if (w == "") {
    alert("Adress must be filled out");
    return false;}
    var v = document.forms["form"]["date"].value;
  if (v == "") {
    alert("Date must be filled out");
    return false;}
    var b = document.forms["form"]["prix"].value;
  if (b == "") {
    alert("Total Price must be filled out");
    return false;
  }
    var o = document.forms["form"]["etat"].value;
  if (o == "") {
    alert("State must be filled out");
    return false;}
   
}
