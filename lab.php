<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Exercises</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        body {
            background-image: url('poster.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed; 
            color: white; 
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /
            z-index: -1; 
        }

      
        .navbar {
            background-color: rgba(52, 58, 64, 0.9); 
        }

        .navbar-nav .nav-link {
            font-size: 1.25rem;
            color: white !important;
            font-weight: bold;
            margin-right: 20px;
            padding: 10px 20px;
            border-radius: 50px;
            transition: background-color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            background-color: rgba(73, 80, 87, 0.8);
        }


        .card {
            background-color: rgba(255, 255, 255, 0.1); 
            color: white;
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        }

        .card-body h5 {
            color: #f8f9fa;
            font-weight: bold;
        }


        .btn-primary {
            background-color: #007bff;
            border: none;
            color: white;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .container {
            margin-top: 50px;
            background-color: rgba(0, 0, 0, 0.6); 
            padding: 30px;
            border-radius: 15px;
        }

        h2 {
            color: #f8f9fa;
            text-align: center;
            margin-bottom: 30px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7); 
        }
    </style>
</head>
<body>


    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand text-white" >Kiel's Course Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="homepage.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lab.php">Lab Exercises</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="resource.php">Resources</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container my-5">
        <h2>Lab Exercises</h2>
        <div class="row">

            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Lab 1: Patient Reservation</h5>
                        <a href="activity1.php" class="btn btn-primary">View Activity</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Lab 2: Multiplication Table</h5>
                        <a href="Table.php" class="btn btn-primary">View Activity</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Lab 3: Adamson University Online Registration</h5>
                        <a href="activity3.php" class="btn btn-primary">View Activity</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
