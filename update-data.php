<?php
include('server.php');
if(isset($_GET['editId'])){
  $id= $_GET['editId'];
   edit_data($db, $id);
}
if(isset($_POST['updateId'])){
  $id= $_POST['updateId'];
  update_data($db,$id);
}
// edit data query
function edit_data($db, $id){
   $que="SELECT * from contact WHERE id=$id";
   $exec=mysqli_query($db, $que);
   $row=mysqli_fetch_assoc($exec);
   echo json_encode($row);


}
// update data query
function update_data($db, $id){
     $name= legal_input($_POST['name']);
     $contact= legal_input($_POST['contact']);
     $address = legal_input($_POST['address']);
     $email = legal_input($_POST['email']);
     $query="UPDATE usertable
             SET name='$name',
                contact='$contact',
                 address='$address',
                 email= '$email',
                  WHERE id=$id";
     $exec= mysqli_query($db,$query);

     if($exec){

        echo "data was updated";

     }else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($db);
        echo $msg;
     }
}

// convert illegal input to legal input
function legal_input($value) {
 $value = trim($value);
 $value = stripslashes($value);
 $value = htmlspecialchars($value);
 return $value;
}
?>
