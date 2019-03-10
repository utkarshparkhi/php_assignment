function phonenumberverify() {
  pnumber = document.getElementsByName("phone")[0].value;
  pnumberreg = /^[6-9][0-9]{9}$/;
  if (pnumber == "") {
    return false;
  }
  else if (pnumberreg.test(pnumber)) {
    document.getElementById("phoneinvalid").style.display = "none"
    return true;
  }
  else {
    document.getElementById("phoneinvalid").style.display = "flex"
    return false;
  }
}
function ageverify() {
  age = document.getElementsByName('age')[0].value;
  agereg = /^[0-9]+$/;
  if (age == "") {
    alert("please enter age");
    return false;
  } 
  else if (agereg.test(age)) {
        document.getElementById("ageinvalid").style.display = "none"
        return true;
  } 
  else {
        document.getElementById("ageinvalid").style.display = "flex"
        return false;
  }
}
function emailverify() {
  email = document.getElementsByName("email")[0].value;
  emailreg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (email == "") {
        ;
        return false;
  }
  else if (emailreg.test(email)) {
        document.getElementById("emailinvalid").style.display = "none"
        xhttp = new XMLHttpRequest();
        xhttp.open("GET",'checkusername.php?email='+email,true);
        xhttp.send();
        xhttp.onreadystatechange = function(){
        if(xhttp.responseText == 'gtg'){
          document.getElementById('emailavail').style.display = 'flex'
         
          document.getElementById('emailnot').style.display = 'none'
          return true
        }
        else{
          document.getElementById('emailnot').style.display = 'flex'
          document.getElementById('emailavail').style.display = 'none'
          return false
        }
        }
        }
      
   else {
        document.getElementById("emailinvalid").style.display = "flex"
        return false;

  }
}
function confpass() {
  pass = document.getElementsByName("password")[0].value;
  confpass1 = document.getElementsByName("confirmpassword")[0].value;
  if (pass == confpass1) {
      document.getElementById("conpassword").style.display = "none"
      return true;
  }
  else {
      document.getElementById("conpassword").style.display = "flex"
      return false
  }
}
function nameverify(){
  name = document.getElementsByName("name")[0].value
  namereg = "^[\\p{L} .'-]+$"
  if (namereg.test(name)){
    return true

  }
  else{
    alert("invalid name")
      return false
  }
}
function verifyall(){
  if (nameverify()&confpass()&emailverify()&ageverify()&phonenumberverify() ){
    return true

  }
  else{
    return false
  }
}








