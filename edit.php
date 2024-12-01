<?php
  include "connection.php";
  $id="";
  $name="";
  $email="";
  $phone="";

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:index.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from crud2 where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location:index.php");
      exit;
    }
    $name=$row["name"];
    $email=$row["email"];
    $phone=$row["phone"];

  }
  else{
    $id = $_POST["id"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];

    $sql = "update crud2 set name='$name', email='$email', phone='$phone' where id='$id'";
    $result = $conn->query($sql);
   
    header("location:index.php");
    
  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #343a40;
            padding: 1rem;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            width: 200%;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #ffc107;
            color: white;
            padding: 1rem;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }

        label {
            margin-top: 10px;
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="hidden"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }

        button:hover {
            background-color: #218838;
        }

        .cancel-button {
            background-color: blue;
        }

        .cancel-button:hover {
            background-color: #138496;
        }
    </style>
</head>
<body>
    <nav>
        <a href="index.php">DAILY QUOTES</a>
        <a href="index.php">Home</a>
        <a href="create1.php">Add New</a>
    </nav>

    <div class="container">
        <form method="post">
            <div class="card-header">
                <h1>Update Quotes</h1>
            </div>

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <label>NAME:</label>
            <input type="text" name="name" value="<?php echo $name; ?>">

            <label>QUOTES:</label>
            <input type="text" name="email" value="<?php echo $email; ?>">

            <label>USERNAME:</label>
            <input type="text" name="phone" value="<?php echo $phone; ?>">

            <button type="submit" name="submit">Submit</button>
            <button a class="cancel-button" href="index.php">Cancel</button>
        </form>
    </div>
</body>
</html>