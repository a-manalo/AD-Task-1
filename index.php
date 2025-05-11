<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <!-- navigation bar for site branding and page links -->
    <nav id="navbar">
        <div id="nav-brand"> Motivational Quotes </div>
        <ul id="nav-links">
            <li><a href="/index.php" id="active"> Home </a></li>
            <li><a href="./page/motivationalWk/index.php"> Weekly Quotes </a></li>
        </ul>
    </nav>

    <!-- container with welcome msg, description, and button to weekly quotes -->
    <div id="container">
        <h1 id="title"> Welcome to Motivational Quotes </h1>
        <p id="description"><?php echo "Discover daily inspiration with our motivational quotes for the week. Each day brings you a new perspective to help you stay motivated" ?></p>
        <a href="./page/motivationalWk/index.php" id="cta-button"> View Weekly Quotes </a>
    </div>

</body>
</html>