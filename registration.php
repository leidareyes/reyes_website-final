<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="city.js"></script>
    <style>
        body {
            max-width: 500px;
            margin: 0px auto;
            background: #f0f0f0;
        }

        .container {
            font-size: 20px;
            margin-bottom: 20px; /* Added margin for spacing between sections */
        }

        select {
            width: 100%;
            height: 40px;
            display: block;
            margin: 2px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Registration</h2>
    <form action="register.php" method="post">
        <!-- Form Row for First Name, Middle Name, and Last Name -->
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="firstname">First Name:</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>
            <div class="form-group col-md-4">
                <label for="middlename">Middle Name:</label>
                <input type="text" class="form-control" id="middlename" name="middlename">
            </div>
            <div class="form-group col-md-4">
                <label for="lastname">Last Name:</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>
        </div>
        <!-- Address Section -->
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control mb-2" id="Block" name="Block" placeholder="Block">
            <input type="text" class="form-control mb-2" id="LotStreet" name="LotStreet" placeholder="Lot/Street">
            <input type="text" class="form-control mb-2" id="phase" name="phase" placeholder="Phase/Subdivision">
        </div>

        <!-- Additional dropdowns -->
        <div class="container">
            <select id="province"></select>
            <select id="city"></select>
        </div>

        <!-- Contact Number and Email Section -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="contact">Contact Number:</label>
                <input type="text" class="form-control" id="contact" name="contact">
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
        </div>
        <!-- Password Section -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group col-md-6">
                <label for="repeatpassword">Repeat Password:</label>
                <input type="password" class="form-control" id="repeatpassword" name="repeatpassword" required>
            </div>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
    <!-- Link to Login Page -->
    <p style="margin-top: 20px;"> Already have an account? <a href="login.php">Login</a></p>
</div>

</body>
</html>