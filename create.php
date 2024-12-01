<?php
$servername = "localhost";
$username = "root";
$password="";
$database = "myshop";

$connection = new mysqli($servername, $username, $password, $database);


$email = "";
$password = "";

$errorMessage = "";


if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $email = $_POST["email"];
    $password = $_POST["password"];
   
    do {
        if ( empty($email) || empty($password) ) {
        $errorMessage = "All the fields are required";
            break;
        }

        $sql = "INSERT INTO students (email, password) " .
                "VALUES ('$email', '$password') " ;
        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }


        $email = "";
        $password = "";
        
       
        header("location: index.php");

    } while (false);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    padding: 40px; /* Padding around the form */
}

h1 {
    color: #333; /* Dark gray color for the heading */
    margin-bottom: 30px; /* Space below the heading */
}

.form-control {
    border: 1px solid #ccc; /* Light gray border */
    border-radius: 4px; /* Rounded corners for input fields */
    padding: 10px; /* Padding inside input fields */
    transition: border-color 0.3s; /* Smooth transition for border color */
}

.form-control:focus {
    border-color: #66afe9; /* Change border color on focus */
    outline: none; /* Remove default outline */
}

.btn {
    background-color: #28a745; /* Green button */
    color: white; /* White text on button */
    border: none; /* Remove border */
    border-radius: 4px; /* Rounded corners */
    padding: 10px 20px; /* Padding for the button */
    cursor: pointer; /* Pointer cursor on hover */
    transition: background-color 0.3s; /* Smooth transition for hover effect */
}

.btn:hover {
    background-color: #218838; /* Darker green on hover */
}

.alert {
    margin-top: 20px; /* Space above alerts */
}
    </style>
</head>
<body>
    <div class="container my-5 text-center">
        <h1>Log In</h1>

        <?php
        if ( !empty($errorMessage) ) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type = 'button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>

        <form method="post">
          
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label"></label>
                <div class="col-sm-6">
                <input class="form-control" placeholder="E-mail" name="email" type="email" value="<?php echo $email;?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label"></label>
                <div class="col-sm-6">
                <input class="form-control" placeholder="Password" name="password" type="password" value="<?php echo $password;?>">
                </div>
            </div>
            

            <?php
            if ( !empty($successMessage) ) {
                echo"
                <div class = 'row mb-3'>
                <div class= 'offset-sm-3 col-sm-6'>
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>$successMessage</strong>
                    <button type = 'button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            </div>
        </div>
        ";
            }
            ?>

            <!-- Change this to a button or input when using this as a form -->
                <button class="btn btn-lg btn-success btn-block">Login</button>
        </form>
    </div>
    
</body>
</html>