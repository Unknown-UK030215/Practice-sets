<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array of Fruits</title>
</head>
<body>

    <?php
     $vegetable_list = array("Carrot", "Cucumber", "Spinach", "Broccoli", "Pepper");

     echo "<h2>My Favorite Vegetables</h2>";
     echo "<ul>";
     for ($i = 0; $i < count($vegetable_list); $i++) {
         echo "<li>" . $vegetable_list[$i] . "</li>";
     }
     echo "</ul>";
     ?>

</body>
</html>
