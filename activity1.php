<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .container {
            background: #fff;
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-size: 14px;
        }
        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }
        button:hover {
            background-color: #45a049;
        }
        .results {
            margin-top: 20px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="activity1.php" method="POST">
            <label for="PatientName">
                Name:
                <input type="text" id="patientname" name="patientname">
            </label>
            <label for="Gender">
                Gender:
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female

            </label><label for="Age">
                Age:
                <input type="text" id="age" name="age">
            </label>
            <label for="NumberOfDays">
                Number of Days:
                <input type="text" id="noofdays" name="noofdays">
            </label>
            <label for="Deposit">
                Initial Deposit
                <input type="text" id="deposit" name="deposit">
            </label>
            <button type="submit">Submit</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $patientname = $_POST["patientname"];
            $gender = $_POST["gender"];
            $age = $_POST["age"];
            $noofdays = $_POST["noofdays"];
            $deposit = $_POST["deposit"];
            
     
            if ($gender = "male"){
                $intprice = 150;
            }
            else{
                $intprice = 8.5;
            }
            
            $intpricedays = $intprice * $noofdays;

            if($age < 7) {
                $total = $intpricedays - (.10 * $intpricedays)  ;
            }
            if($age >= 7 & 18 < $age) {
                $total = $intpricedays - (.075 * $intpricedays) ;
            }
            if($age >= 18 & 30 < $age) {
                $total = $intpricedays - (.0525 * $intpricedays) ;
            }
            if($age >= 30 & 60 < $age) {
                $total = $intpricedays - (.3 * $intpricedays)  ;
            }
            if($age >= 60 & 80 < $age) {
                $total = $intpricedays - (.0675 * $intpricedays)  ;
            }
            if($age >= 80) {
                $total = $intpricedays - (.08 * $intpricedays)  ;
            }

       

            $totalnodep =    $total - $deposit;

            echo "<div class='results'>";
            echo "<p>Name: " . $patientname . "</p>";
            echo "<p>Gender: " . $gender . "</p>";
            echo "<p>Age: " . $age . "</p>";
            echo "<p>No. of Days: " . $noofdays . "</p>";
            echo "<p>Initial Deposit: " . $deposit . "</p>";
            echo "<p>Net Amount: " . $total . "</p>";
            echo "<p>Total: " . $totalnodep . "</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>
