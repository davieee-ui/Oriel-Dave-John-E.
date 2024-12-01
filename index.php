<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>QUOTES</title>
    <style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.navbar {
    background-color: #007bff; /* Primary color */
    padding: 1rem;
}

.container-fluid {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar-brand {
    color: white;
    text-decoration: none;
    font-size: 1.5rem;
}

.navbar-nav {
    list-style-type: none;
    padding: 0;
}

.nav-item {
    display: inline;
    margin-right: 1rem;
}

.nav-link {
    color: white;
    text-decoration: none;
    padding: 0.5rem 1rem;
    border-radius: 5px;
}

.nav-link.active {
    background-color: rgba(255, 255, 255, 0.2);
}

.btn1 {
    background-color: white;
    color: #007bff;
    padding: 0.5rem 1rem;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.btn1:hover {
    background-color: rgba(255, 255, 255, 0.5);
}

.container {
    margin: 20px;
}

.table {
    width: 100%;
    border-collapse: collapse;
}

.table th, .table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.table th {
    background-color: #f2f2f2;
}

.btn {
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    color: white;
    margin-right: 5px;
}

.edit {
    background-color: #28a745; /* Green */
}

.delete {
    background-color: #dc3545; /* Red */
}

.edit:hover {
    background-color: #218838;
}

.delete:hover {
    background-color: #c82333;
}

    </style>
  </head>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes of the Day</title>
</head>
<body>
<nav class="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Quotes of the Day</a>
        <div class="navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create1.php">Add New</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>QUOTES</th>
                    <th>USERNAME</th>
                    <th>DATE</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "connection.php";
                $sql = "SELECT * FROM crud2";
                $result = $conn->query($sql);
                if (!$result) {
                    die("Invalid query!");
                }
                while ($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                        <th>$row[id]</th>
                        <td>$row[name]</td>
                        <td>$row[email]</td>
                        <td>$row[phone]</td>
                        <td>$row[join_date]</td>
                        <td>
                            <a class='btn edit' href='edit.php?id=$row[id]'>Edit</a>
                            <a class='btn delete' href='delete1.php?id=$row[id]'>Delete</a>
                        </td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>