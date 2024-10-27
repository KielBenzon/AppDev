<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adamson University Online Registration</title>
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            
            flex-direction: column;
            
        }

        header {
            background-color: #0046a6;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            width: 50%;
            border-radius: 25px;
            margin-top: 30px;
        }

        .container {
            margin-top: 50px;
            display: flex;
            justify-content: center;
            width: 100%;
            max-width: 1200px;
            margin-bottom: 50px;
        }

        form {
            max-width: 400px;
            margin-right: 50px;
            padding: 20px;
            background-color: #ADD8E6;
            box-shadow: 0 0 10px #ADD8E6;
            border-radius: 8px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        input[type="submit"] {
            
            background-color: #0046a6;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            
            
        }

        input[type="submit"]:hover {
            background-color: #003580;
        }

        footer {
            text-align: center;
            margin-top: 80px;
            padding: 10px;
            background-color: #0046a6;
            color: #fff;
            width: 50%;
            border-radius: 25px;
        }

      
        .receipt-box {
           
            width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px #ADD8E6;
            display: none;
        }

        .receipt-header {
            font-weight: bold;
            margin-bottom: 20px;
            font-size: 18px;
        }
        #receiptContent > p {
            margin-top: 10px
        }
    </style>
</head>
<body>

    <header>
        <h1>Adamson University Online Registration</h1>
    </header>

    <div class="container">
       
        <form id="registrationForm">
            <label for="name">Student Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="course">Select Course:</label>
            <select id="course" name="course" required>
                <option value="IT">Information Technology (IT)</option>
                <option value="CE">Civil Engineering (CE)</option>
                <option value="ACC">Accountancy (ACC)</option>
                <option value="N">Nursing (N)</option>
            </select>

            <label for="units">Number of Units:</label>
            <input type="number" id="units" name="units" min="1" required>

            <input type="submit" value="Calculate Tuition Fee">
        </form>

      
        <div class="receipt-box" id="receiptBox">
            <div class="receipt-header">Tuition Fee Bill Receipt</div>
            <div id="receiptContent">
      
            </div>
        </div>
    </div>

    <footer>
        <p>© Adamson University 2024</p>
    </footer>

    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            event.preventDefault(); 

  
            var name = document.getElementById('name').value;
            var course = document.getElementById('course').value;
            var units = parseInt(document.getElementById('units').value);

         
            var tuitionRates = {
                'IT': 1500.25,
                'CE': 1000.75,
                'ACC': 800.25,
                'N': 1200.50
            };

            var labFee = 2500;
            var ratePerUnit = tuitionRates[course];
            var tuitionFeeBill = (ratePerUnit * units) + labFee;

        
            var downPayment;
            if (tuitionFeeBill > 10000) {
                downPayment = tuitionFeeBill * 0.25;
            } else {
                downPayment = tuitionFeeBill * 0.10;
            }

            var remainingBalance = tuitionFeeBill - downPayment;

       
            var receiptHtml = `
                <p><strong>Student Name:</strong> ${name}</p>
                <p><strong>Course Code:</strong> ${course}</p>
                <p><strong>Number of Units:</strong> ${units}</p>
                <p><strong>Tuition Rate per Unit:</strong> ₱${ratePerUnit.toFixed(2)}</p>
                <p><strong>Tuition Fee Bill:</strong> ₱${tuitionFeeBill.toFixed(2)}</p>
                <p><strong>Down Payment:</strong> ₱${downPayment.toFixed(2)}</p>
                <p><strong>Remaining Balance:</strong> ₱${remainingBalance.toFixed(2)}</p>
            `;

            document.getElementById('receiptContent').innerHTML = receiptHtml;

     
            document.getElementById('receiptBox').style.display = 'block';
        });
    </script>

</body>
</html>
