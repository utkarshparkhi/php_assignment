<script src ="script.js">



</script>
<form method="post" action = "signup.php" onsubmit="return verifyall()">
    

    <label>phone number</label>
    <input type="number" name="phone"  onchange=" phonenumberverify()">
    <div id = "phoneinvalid" style="display: none;color: red">invalid phone number</div>
    <div id = "phoneavail" style="display: none">phone number available</div>
    <div id = "phonenot" style="display: none">phone number already in use</div>
    <br>

    <label>gender</label>
    <input type="radio" name="gender" value="male" checked> Male
    <input type="radio" name="gender" value="female"> Female
    <input type="radio" name="gender" value="other">other<br><br>

    <label>age</label>
    <input type="number" name = "age"  onchange="ageverify()"> <div id = "ageinvalid" style="display: none;color: red">age invalid</div><br><br>

    <label>Email Address</label>
    <input type="text" name = "email"  onchange="emailverify()"><div id="emailinvalid" style="display: none;color: red">email invalid </div> <div id = "emailavail"style="display: none">email available</div>
    <div id ="emailnot" style="display: none">email already in use</div>
<br><br>

    <label>password</label>
    <input type="password" name = "password" >
    <label>confirm password</label>
    <input type="password" name="confirmpassword" onchange="confpass()" ><div id = "conpassword" style="display: none;color: red">password not matching</div>
    <br><br>



    <label>name</label>
    <input type="text" name = "name" ><br><br>

    <input type="submit" >


</form>
<form method ="post" action ="upload.php" enctype="multipart/form-data">
<input type ="file" name = "profile">
<button type="submit" name = 'submit'>UPLOAD PHOTO</button>
</form>
