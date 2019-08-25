<?php
echo("<br>add user");
include_once '../database/connection.php';

// Set the variables for the person we want to add to the database
$id = null;
$first_Name = "ana";
$last_Name = "montoya";
$email = "ana@some.com";

// Here we create a variable that calls the prepare() method of the database object
// The SQL query you want to run is entered as the parameter, and placeholders are written like this :placeholder_name
$my_Insert_Statement = $my_Db_Connection->prepare("INSERT INTO Students (id, name, lastname, email) VALUES (:id, :first_name, :last_name, :email)");

// Now we tell the script which variable each placeholder actually refers to using the bindParam() method
// First parameter is the placeholder in the statement above - the second parameter is a variable that it should refer to
$my_Insert_Statement->bindParam(':id', $id);
$my_Insert_Statement->bindParam(':first_name', $first_Name);
$my_Insert_Statement->bindParam(':last_name', $last_Name);
$my_Insert_Statement->bindParam(':email', $email);

// Execute the query using the data we just defined
// The execute() method returns TRUE if it is successful and FALSE if it is not, allowing you to write your own messages here
if ($my_Insert_Statement->execute()) {
  echo "New record created successfully";
} else {
  echo "Unable to create record";
}


?>