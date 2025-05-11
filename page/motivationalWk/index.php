<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weekly Motivational Quotes</title>
    <link rel="stylesheet" href="/page/motivationalWk/assets/css/style.css">
</head>
<body>
    <!-- navigation bar for site branding and page links -->
    <nav id="navbar">
        <div id="nav-brand"> Motivational Quotes </div>
        <ul id="nav-links">
            <li><a href="/index.php"> Home </a></li>
            <li><a href="/page/motivationalWk/index.php" id="active"> Weekly Quotes </a></li>
        </ul>
    </nav>

    <!-- array of motivational quotes for each day of the week -->
    <?php
        $days = [
            'Monday' => "The only way to do great work is to love what you do.",
            'Tuesday' => "Success is not final, failure is not fatal: it is the courage to continue that counts.",
            'Wednesday' => "Believe you can and you're halfway there.",
            'Thursday' => "Don't watch the clock; do what it does. Keep going.",
            'Friday' => "The future belongs to those who believe in the beauty of their dreams.",
            'Saturday' => "Everything you've ever wanted is on the other side of fear.",
            'Sunday' => "The best way to predict the future is to create it."
        ];
    ?>

    <!-- creates a visual box for each day and its name -->
    <div id="week-container">
        <?php
            $dayKeys = array_keys($days);
            $i = 0;
            while ($i < count($dayKeys)) {
                $day = $dayKeys[$i];
                $quote = $days[$day];
                echo "<div id=\"day-box{$i}\" data-day=\"{$day}\" data-quote=\"{$quote}\">";
                echo "<h2>{$day}</h2>";
                echo "<p>Click to see today's quote</p>";
                echo "</div>";
                $i++;
        }
        ?>
    </div>

    <!-- modal to show the day's quote -->
    <div id="quoteModal">
        <div id="modal-content">
            <h2 id="modalDay"></h2>
            <p id="modalQuote"></p>
            <button id="close-button">Close</button>
        </div>
    </div>

    <script src="/page/motivationalWk/assets/js/modalQuote.js"></script>
</body>
</html>