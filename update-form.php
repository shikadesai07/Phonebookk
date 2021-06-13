<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>
<!--====form section start====-->
<div class="user-detail">
    <h2>Update User Data</h2>
    <p id="msg"></p>
    <form id="updateForm" method="POST">
      <input type="hidden" name="id" id="updateId">
          <label>name</label>
          <input type="text" placeholder="Enter Full Name" id="updateName" name="name" required>
          <label>contact</label>
          <input type="number" placeholder="Enter contact" id="updateContact" name="contact" required>
          <label>address</label>
          <input type="address" placeholder="Enter  Address" id="updateAddress" name="address" required>
          <label>Email</label>
          <input type="email" placeholder="Enter email" id="updateEmail" name="email" required>
          <button type="submit" name="update">Submit</button>
    </form>
        </div>
</div>
</body>
</html>
