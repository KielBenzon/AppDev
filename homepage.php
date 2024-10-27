<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Portfolio</title>
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
            background-color: rgba(0, 0, 0, 0.5); 
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


        h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #f8f9fa; 
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7); 
        }

        h2, h3, p {
            color: #f8f9fa; 
        }

        p.lead {
            font-size: 1.5rem;
        }

       
        .btn-custom {
            font-size: 1.5rem;
            padding: 15px 40px;
            border-radius: 50px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-primary-custom {
            background-color: #007bff;
            border: none;
            color: white;
        }

        .btn-primary-custom:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .btn-success-custom {
            background-color: #28a745;
            border: none;
            color: white;
        }

        .btn-success-custom:hover {
            background-color: #218838;
            transform: scale(1.05);
        }

       
        .container {
            margin-top: 50px;
            background-color: rgba(0, 0, 0, 0.6); 
            padding: 30px;
            border-radius: 15px;
        }

       
        h1 {
            text-align: center;
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

    <div class="container text-justify">
        <h1>Welcome to the Course Portfolio</h1>
        <hr>
        <h2>Course Description</h2>
        <p>This course is designed to introduce students to the fundamentals of <strong>Information Technology</strong>. Through interactive lab exercises and real-world applications, students will develop the skills necessary for success in the IT industry.</p>
        <h3>Course Objectives</h3>
        <ul>
            <li>Understand key IT concepts and theories.</li>
            <li>Develop hands-on skills with various tools and software.</li>
            <li>Apply IT principles in practical scenarios.</li>
        </ul>
        <h3>Course Outcomes</h3>
        <ul>
            <li>Gain proficiency in IT fundamentals.</li>
            <li>Complete various lab exercises.</li>
            <li>Work effectively in team-based projects.</li>
        </ul>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
