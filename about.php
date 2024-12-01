 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.navbar {
    background-color: #007bff; 
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

    </style>
 </head>
 <body>
    
 </body>
 </html>
 <nav class="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Quotes of the Day</a>
        <div class="navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create1.php">Add New</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<nav class="container">
    <h2>This DAILY QUOTES to motivate us in our daily life</h2>
</nav>