<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }
        form {
            margin-bottom: 20px;
        }
        table {
            margin: 0 auto; 
            border-collapse: collapse;
            background-color: #f9f9f9;
        }
        table, th, td {
            border: 1px solid #4CAF50;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        td {
            background-color: #e0f7fa;
        }
        h2, h3 {
            color: #333;
        }
        input[type="number"] {
            padding: 5px;
            border: 1px solid #4CAF50;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h2>Multiplication Table</h2>

<form method="post" action="">
    <label for="rows">Enter number of rows:</label>
    <input type="number" name="rows" id="rows" required>
    <br><br>
    <label for="columns">Enter number of columns:</label>
    <input type="number" name="columns" id="columns" required>
    <br><br>
    <input type="submit" value="Generate Table">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $rows = (int)$_POST['rows'];
    $columns = (int)$_POST['columns'];

    if ($rows > 0 && $columns > 0) {
        echo "<h3>Multiplication Table of $rows x $columns</h3>";
        echo "<table>";
        
        
        echo "<tr><th></th>";
        for ($i = 1; $i <= $columns; $i++) {
            echo "<th>$i</th>";
        }
        echo "</tr>";

       
        for ($i = 1; $i <= $rows; $i++) {
            echo "<tr>";
            echo "<th>$i</th>"; 
            for ($j = 1; $j <= $columns; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Please enter valid numbers for rows and columns.";
    }
}
?>

</body>
</html>
