<!DOCTYPE html>
<html lang="en">
<head>
    <title>Teamistry</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
            color: #343a40; /* Dark gray text */
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            background-color: #343a40; /* Dark navbar background */
        }
        .navbar-brand {
            color: #ffffff; /* White text for brand */
        }
        .jumbotron {
            background: linear-gradient(to right, #007bff, #00c6ff); /* Gradient background */
            color: #ffffff; /* White text */
            text-align: center;
            margin-top: 20px;
            padding: 80px 20px;
            border-bottom-left-radius: 50% 20%;
            border-bottom-right-radius: 50% 20%;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            margin-right: 10px;
        }
        .btn-outline-light {
            border-color: #ffffff;
            color: #ffffff;
        }
        .container {
            margin-top: 30px;
        }
        .card {
            margin: 15px 0;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color: #343a40; /* Dark footer background */
            color: #ffffff; /* White text */
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="#">Teamistry</a>
            <!-- Links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="jumbotron">
        <div class="container">
            <h1>We provide solutions for your business!</h1>
            <p>Your partner in building efficient and effective teams.</p>
            <a href="#" class="btn btn-primary btn-lg">Get Started</a>
            <a href="#" class="btn btn-outline-light btn-lg">Our Services</a>
        </div>
    </div>

    <div class="container text-center">
        <h2>About Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Our Mission</h5>
                        <p class="card-text">To foster collaboration and innovation within teams.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Our Vision</h5>
                        <p class="card-text">To be the leading provider of team-building solutions worldwide.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Our Values</h5>
                        <p class="card-text">Integrity, Collaboration, Innovation, Excellence.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>&copy; PSO Kelas B, 2024. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
