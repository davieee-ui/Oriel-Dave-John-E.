<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        
body {
    font-family: Arial, sans-serif;
    background-color: blue;
    margin: 0;
    padding: 0;
}

.container {
    background-color: white; 
    border-radius: 8px; 
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); 
    padding: 50px; 
}

h1 {
    color: black; 
    margin-bottom: 30px; 
}

.form-control {
    border: 1px solid #ccc; 
    border-radius: 4px; 
    padding: 10px; 
    transition: border-color 0.3s; 
}

.form-control:focus {
    border-color: #66afe9; 
    outline: none; 
}

.btn {
    background-color: #28a745; 
    color: white; 
    border: none; 
    border-radius: 4px; 
    padding: 10px 20px; 
    cursor: pointer;
    transition: background-color 0.3s; 
}

.btn:hover {
    background-color: #218838; 
}
    </style>
</head>
<body>
<div class="container my-5 text-center">
        <h1>Registration</h1>


        <form action="register.php" method="post">
          <div class="row mb-3">
              <label class="col-sm-3 col-form-label"></label>
              <div class="col-sm-6">
              <input class="form-control" placeholder="FirstName" name="firstname" type="firstname" required>
              </div>
          </div>

          <div class="row mb-3">
              <label class="col-sm-3 col-form-label"></label>
              <div class="col-sm-6">
              <input class="form-control" placeholder="LastName" name="lastname" type="lastname" required>
              </div>
          </div>

          <div class="row mb-3">
              <label class="col-sm-3 col-form-label"></label>
              <div class="col-sm-6">
              <input class="form-control" placeholder="UserName" name="username" type="username" required>
              </div>
          </div>
          
          <button class="btn btn-lg btn-block">Register</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "login";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username']; 

    
    $stmt = $conn->prepare("INSERT INTO users (FirstName, LastName, Username) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $firstname, $lastname, $username);

    
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    
    $stmt->close();
    $conn->close();

    header("location: create.php");

}
?>