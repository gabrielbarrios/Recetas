<?php 
	//Form Add user
?>
<form class="cmxform" id="commentForm" method="get" action="../loads/adduser.php">
  <fieldset>
    <legend>Create Count</legend>
    <p>
      <label for="cname">User Name</label>
      <input id="cname" name="nickname" minlength="4" type="text" required>
    </p>
    <p>
      <label for="cpassword">Password</label>
      <input id="cpassword" name="loginpass" minlength="4" type="password" required>
    </p>
    <p>
      <label for="cfirstname">First Name</label>
      <input id="cfirstname" name="firstname" minlength="1" type="text" required>
    </p>
    <p>
      <label for="clastname">Last Name</label>
      <input id="clastname" name="lastname" minlength="1" type="text" required>
    </p>
    <p>
      <label for="cemail">E-Mail (required)</label>
      <input id="cemail" type="email" name="email" required>
    </p>
    
    <p>
      <input class="submit" type="submit" value="Submit">
    </p>
  </fieldset>
</form>

