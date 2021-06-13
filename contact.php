<?php include('server.php')


?>
<!DOCTYPE html>
<html>
<head>

  <title>Contact Details</title>

  <style>
  body{
    background-color:#f7f3e9;
    background-size: auto;
      background-image: url("hi.webp");
      background-size:cover;
    }
  table {
  border-collapse: collapse;
  width: 100%;
  margin-top: 300px;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color:#aad8d3;

  color: white;
}

  .header {
  width: 30%;
  margin: 50px auto 0px;
  color: #000;
  background: #aad8d3;
  text-align: center;
  border: 1px solid #f7f3e9;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;}
  form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #f7f3e9;
  background: #f7f3e9;
  border-radius: 0px 0px 10px 10px;
  }
  .input-group {
  margin: 10px 0px 10px 0px;
  }
  .input-group label {
  display: block;
  text-align: left;
  margin: 3px;
  color: #000;
  }
  .input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
  }
  .btn {
  padding: 10px;
  font-size: 15px;
  color: d8e3e7;
  background: #aad8d3;
  border: none;
  border-radius: 5px;
  }
  .error {
  width: 92%;
  margin: 0px auto;
  padding: 10px;
  border: 1px solid #a94442;
  color: #a94442;
  background: #f2dede;
  border-radius: 5px;
  text-align: left;
  }
  .success {
  color:#df7f3e9;
  background: #aad8d3;
  border: 1px solid #f7f3e9;
  margin-bottom: 20px;
  }


  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="update-ajax.js"></script>
</head>


<body>


<div id="msg"></div>
  <div class="header">
  	<h2>Fill In The Contact Details</h2>

    <form method="post" action="">
            <div class="input-group">
      		<label>Name</label>
      		<input type="text" name="name" >
      	</div>
      	<div class="input-group">
      		<label style="color:#000">Contact Number</label>
      		<input type="tel" name="contact">
      	</div>
        <div class="input-group">
      		<label>Address</label>
      		<input type="text" name="address">
      	</div><div class="input-group">
      		<label>Email</label>
      		<input type="email" name="email">
      	</div>
      	<div class="input-group">
      		<button type="submit" class="btn" name="submit">Submit Details</button>
<input type="submit" name="submit1" value="delete selected">

</div>
</table>
  <div class="input-group">
  <a href="#demo" class="btn">Display Contacts</a>



</div>
</div>

<div id="demo">

      <title>contact book details</title>
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
    </tr>


      <?php
      $username = $_SESSION['username'];
    	$query = "SELECT * FROM details WHERE username='$username'";
      	$results=mysqli_query($db, $query);

    $user_id= mysqli_fetch_assoc($results)['id'];
    $res=mysqli_query($db, "SELECT * FROM contact WHERE userid='$user_id'");

       while($rows=mysqli_fetch_array($res))
        		{
  ?>       		<tr> <td><?php echo $rows['id']; ?></td>
         <td><?php echo $rows['userid']; ?></td>
        		<td><?php echo $rows['name']; ?></td>
        		<td><?php echo $rows['contact']; ?></td>
        		<td><?php echo $rows['address']; ?></td>
            	<td><?php echo $rows['email']; ?></td>
<td><input type="checkbox" name="records[]" value="<?php echo $rows['id'];?>"/></td>
              <td><a href='javascript:void(0)' onclick="editData(<?php echo $rows['id'] ?>)">Edit</a></td></tr>
           <?php
        	   }
             ?>
            </table>
</div>
<?php
if(isset($_POST['submit1']))
{
$box=count($_POST['records']);
$i=0;
while($i<$box) {
  $keyToDelete= $_POST['records'][$i];
  mysqli_query($db,"DELETE FROM contact WHERE id='$keyToDelete'");
  $i++;
}
header("Location:contact.php");

}
?>


</form>

<div id="update-container"></div>
</body>
</html>
