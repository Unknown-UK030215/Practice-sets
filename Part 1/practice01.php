<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Three Sides Calculator - Santos</title>
</head>
<body>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $s1 = $_POST['side1'];
            $s2 = $_POST['side2'];
            $s3 = $_POST['side3'];

            $s = ($s1 + $s2 + $s3) / 2;
            $area = sqrt($s * ($s - $s1) * ($s - $s2) * ($s - $s3));

            echo "<h2>Area: " . number_format($area, 2) . "</h2>";
        }
    ?>

    <h2>Three Sides Calculator</h2>
    <form method="POST" action="">
        Side 1: <input type="number" name="side1" placeholder="Enter any Number" required><br><br>
        Side 2: <input type="number" name="side2" placeholder="Enter any Number" required><br><br>
        Side 3: <input type="number" name="side3" placeholder="Enter any Number" required><br><br>
        <button type="submit">Calculate</button>
    </form>
</body>
</html>
