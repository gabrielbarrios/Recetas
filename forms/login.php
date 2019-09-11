<?php 
	//Form Add user
	echo "<br>seccion var = ".session_id()." ------<br>";
?>
<form class="cmxform" id="commentForm" method="get" action="../loads/loginuser.php">
  <fieldset>
    <legend>Login</legend>
    <p>
      <label for="cname">User Name</label>
      <input id="cname" name="nickname" minlength="4" type="text" class="inputForm" required>
    </p>
    <p>
      <label for="cpassword">Password</label>
      <input id="cpassword" name="loginpass" minlength="4" type="password" class="inputForm" required>
    </p>
    
    <p>
	    <label class='message-form'></label>
    </p>
    
    <p>
      <input class="submit" type="submit" value="Submit">
    </p>
  </fieldset>
</form>

