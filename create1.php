<?php
include "connection.php"; 

if(isset($_POST['submit'])){
   
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $join_date = date('Y-m-d H:i:s'); 

   
    $q = "INSERT INTO crud2 (name, email, phone, join_date) VALUES ('$name', '$email', '$phone', '$join_date')";

    
    if (mysqli_query($conn, $q)) {
      header('location:index.php');
    } else {
        echo "Error: " . $q . "<br>" . mysqli_error($conn);
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        nav {
            background-color: #343a40;
            padding: 1px;
        }
        nav .navbar-brand {
            color: white;
            font-size: 24px;
            text-decoration: none;
        }
        nav .navbar-nav {
            list-style: none;
            padding: 0;
        }
        nav .navbar-nav .nav-item {
            display: inline;
            margin-right: 15px;
        }
        nav .navbar-nav .nav-link {
            color: white;
            text-decoration: none;
        }
        nav .navbar-nav .nav-link:hover {
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
    <div>
        <a class="navbar-brand" href="index.php">DAILY QUOTES</a>
        <div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="create1.php"><span style="font-size:larger;">Add New</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <form method="post">
        <div class="card">
            <div class="card-header">
                <h1>Create New Quotes</h1>
            </div>
            <div style="padding: 100px;">
                <label>NAME:</label>
                <input type="text" name="name" class="form-control"> 

                <label>QUOTES:</label>
                <input type="text" name="email" class="form-control1"> 

                <label>USERNAME:</label>
                <input type="text" name="phone" class="form-control"> 

                <button class="btn btn-success" type="submit" name="submit">Submit</button>
                <button a class="cancel-button" href="index.php">Cancel</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>