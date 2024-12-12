<?php
session_start();

if (isset($_SESSION['customer_id'])) {
    header("Location: homecustomer.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    
    <style type="text/css">
        body {
            background-color: #f5f5dc; /* Light beige background */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #4a4a4a; 
            margin: 0;
            padding: 0;
        }
        .container {
            background: rgba(255, 248, 240, 0.95); /* Soft white background */
            border-radius: 15px;
            padding: 30px;
            max-width: 400px;
            margin: 5% auto;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        h4 {
            color: #6d4c41; /* Warm brown color */
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            position: relative;
            margin-bottom: 20px;
        }
        .form-group i {
            position: absolute;
            top: 50%;
            left: 12px;
            transform: translateY(-50%);
            color: #b68d6a; /* Warm beige for icons */
            font-size: 18px;
        }
        .form-control {
            background: #fffaf3; /* Light cream input background */
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px 10px 10px 40px; /* Left padding for icons */
            font-size: 14px;
            width: 100%;
            color: #4a4a4a;
            box-sizing: border-box;
        }
        .form-control:focus {
            outline: none;
            border-color: #d2a679;
            box-shadow: 0 0 5px rgba(210, 166, 121, 0.5);
        }
        .btn-primary {
            background-color: #d2a679;
            border: none;
            font-size: 16px;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            width: 100%;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #b68d6a;
        }
        .form-text {
            margin-top: 15px;
            text-align: center;
            color: #5a5a5a;
            font-size: 14px;
        }
        .form-text a {
            color: #d2a679;
            text-decoration: none;
            font-weight: bold;
        }
        .form-text a:hover {
            text-decoration: underline;
        }
        /* Responsive Design */
        @media (max-width: 480px) {
            .container {
                padding: 20px;
            }
            .btn-primary {
                font-size: 14px;
                padding: 10px;
            }
        }
        #icon{
            margin-top: -4%;
        }

    </style>
    <title>Foodee | Staff Login</title>
</head>
<body>
    <div class="container">
        <form action="../dbserver/loginS.php" method="POST">
            <h4>Staff Login</h4>
            <div class="form-group">
                <i class="fas fa-user"></i> 
                <input type="text" class="form-control" name="email" id="username" placeholder="Username" required />
            </div>
            <div class="form-group">
                <i  id="icon"  class ="fas fa-lock"></i> 
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required />
                <div class="form-text">
                    <a href="#">Forgot password?</a>
                </div>
            </div>
            <button type="submit" class="btn-primary">Login</button>
           
        </form>
    </div>
</body>
</html>
