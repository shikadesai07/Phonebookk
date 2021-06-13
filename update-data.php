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
     $query="UPDATE contact
             SET name='$name',
                contact='$contact',
                 address='$address',
                 email= '$email'
                  WHERE id=$id";
     $exec= mysqli_query($db,$query);

     if($exec){
   
        echo '<title>contact book details</title>
        <table align="center" border="1px" style="width:600px; line-height:40px;">
              <tr>
                <th colspan="8"><h2>Contact Record</h2></th>
                </tr>
                  <tr>
                    <td>contact id</td>
                    <td>userid</td>
                    <td> Name</td>
                    <td> Contact Number </td>
                    <td>Address</td>
                    <td>Email</td>
                    <td>check</td>
                    <td>edit</td>
            </tr>';

            $username = $_SESSION['username'];
    	$query = "SELECT * FROM details WHERE username='$username'";
      	$results=mysqli_query($db, $query);

    $user_id= mysqli_fetch_assoc($results)['id'];
    $res=mysqli_query($db, "SELECT * FROM contact WHERE userid='$user_id'");

       while($rows=mysqli_fetch_array($res))
        		{
                 echo '<tr> <td>'.$rows['id'].'</td>
                 <td>'.$rows['userid'].'</td>
                      <td>'.$rows['name'].'</td>
                      <td>'.$rows['contact'].'</td>
                      <td>'.$rows['address'].'</td>
                       <td>'.$rows['email'].'</td>
        <td><input type="checkbox" name="records[]" value="'.$rows['id'].'"/></td>
                      <td><a href="javascript:void(0)" onclick="editData('.$rows['id'].')">Edit</a></td></tr>';
              }
         echo '</table>';
     }
     
     else{
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
