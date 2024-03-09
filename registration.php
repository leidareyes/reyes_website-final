<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a7742dae7e.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="registration.css">

    <style>

        body {
            max-width: 700spx;
            margin: 0px auto;
            background: #f0f0f0;
        }

        .container {
            font-size: 25spx;
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
    <form action="registration.php" method="post">
        <!-- Form Row for First Name, Middle Name, and Last Name -->
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="firstname">First Name:</label>
                <input type="text" class="form-control" id="firstname" name="FirstName" required>
            </div>
            <div class="form-group col-md-4">
                <label for="middlename">Middle Name:</label>
                <input type="text" class="form-control" id="middlename" name="middlename">
            </div>
            <div class="form-group col-md-4">
                <label for="lastname">Last Name:</label>
                <input type="text" class="form-control" id="lastname" name="LastName" required>
            </div>
        </div>

        <!-- Address Section -->
        <h2> Address Information </h2>
            <div class="form-group">
                <label for="country">Country</label>
                <select class="form-control" id="country" name="country" required>
                    <option selected>Choose...</option>
                </select>
            </div>

            <div class="form-group">
                <label for="state">State/Province</label>
                <select class="form-control" id="state" name="state" required>
                    <option selected>Choose...</option>
                </select>
            </div>

            <div class="form-group">
                <label for="city">City/Municipality</label>
                <select class="form-control" id="city" name="city" >
                    <option selected>Choose...</option>
                </select>
            </div>
            
            <div class = "form-group">
                <label for="barangay">Barangay</label>
                <input type = "text" class = "form-control" name = "barangay" placeholder="Barangay: ">
            </div>

            <div class="form-group">
        <label for="phase">Phase/Subdivision</label>
        <input type="text" class="form-control" id="phase" name="phase" placeholder="Phase/Subdivision">
        </div>

        <div class="form-group">
        <label for="lot_block">Lot and Block</label>
        <input type="text" class="form-control" id="lot_block" name="lot_block" placeholder="Lot and Block">
        </div>

        <div class="form-group">
        <label for="street">Street</label>
        <input type="text" class="form-control" id="street" name="street" placeholder="Street">
        </div>

        <div class="form-group">
        <label for="contact_number">Contact Number</label>
        <input type="tel" class="form-control" id="contact_number" name="contact_number" placeholder="+63 (Philippine Number)" required>
        </div>

    <script>
            document.getElementById('contact_number').addEventListener('input', function(event) {
    // Get the input value
                    let inputValue = event.target.value;

    // Remove any non-numeric characters
                    let numericValue = inputValue.replace(/\D/g, '');

    // Update the input field with the numeric value
                    event.target.value = numericValue;
});
</script>


     <!-- End of Address Section -->

        <!-- Contact Number and Email Section -->
        <h2> Email and Password </h2>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="Email" required>
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
                <input type="password" class="form-control" id="repeat_password" name="repeat_password" required>
            </div>

            <!-- Submit Button -->        
            <div class="form-group col-md-6">
            <input type="submit" name="submit" class="btn btn-primary"></input>                
            </div>
        </div>                        
    </form>
        

<!-- SQL INSERT -->
<?php
    if(isset($_POST["submit"])){
        $FirstName = $_POST["FirstName"];
        $LastName = $_POST["LastName"];
        $email = $_POST["Email"];
        $password = $_POST["password"];
        $repeat_password = $_POST["repeat_password"];
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $errors = array();

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){

            array_push($errors,"Email is not valid");
        }
        if(strlen($password)<8){
            array_push($errors,"Password must be at least 8 characters long");
        }
        if($password != $repeat_password){
            array_push($errors,"Password does not match");
        }
        require_once "database.php";
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        if ($rowCount>0) {
            array_push($errors, "Email Already Exist");
        }
        if (count($errors)>0){
            foreach( $errors as $error){
                echo"<div class = 'alert alert-danger'>$error</div>";
                }
            } else {
                require_once "database.php";
                $sql = "INSERT INTO users (First_name, Last_name, email, password) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                $preparestmt = mysqli_stmt_prepare($stmt, $sql);
                if ($preparestmt){
                    mysqli_stmt_bind_param($stmt,"ssss", $FirstName, $LastName, $email, $passwordHash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class = 'alert alert-success'> You are Registered Successfully! </div>";
                } else {
                    dir("Something went wrong");
                }
            }
        }  
?>

    
    <!-- Link to Login Page -->
    <p style="margin-top: 20px;"> Already have an account? <a href="index.php">Login</a></p>
</div>

<!-- Java Script -->
<script>
    
    let data = [];

    document.addEventListener('DOMContentLoaded', function() {
        fetch('https://raw.githubusercontent.com/dr5hn/countries-states-cities-database/master/countries%2Bstates%2Bcities.json')
            .then(response => response.json())
            .then(jsonData => {
                data = jsonData;
                const countries = data.map(country => country.name);
                populateDropdown('country', countries);
            })
            .catch(error => console.error('Error fetching countries:', error));
    });

    function populateDropdown(dropdownId, data) {
        const dropdown = document.getElementById(dropdownId);
        dropdown.innerHTML = '';
        data.forEach(item => {
            const option = document.createElement('option');
            option.value = item;
            option.text = item;
            dropdown.add(option);
        });
    }

    document.getElementById('country').addEventListener('change', function() {
        const selectedCountry = this.value;
        const countryData = data.find(country => country.name === selectedCountry);
        if (countryData && countryData.states) {
            const states = countryData.states.map(state => state.name);
            populateDropdown('state', states);
        }
        const phoneCode = countryData ? countryData.phone_code : '';
        document.getElementById('phoneCode').value = phoneCode;
    });

    document.getElementById('state').addEventListener('change', function() {
        const selectedState = this.value;
        const countryData = data.find(country => country.name === document.getElementById('country').value);
        if (countryData) {
            const stateData = countryData.states.find(state => state.name === selectedState);
            if (stateData && stateData.cities) {
                const cities = stateData.cities.map(city => city.name);
                populateDropdown('city', cities);
            } else {
                console.log('No cities found for state:', selectedState);
            }
        } else {
            console.log('Country data not found for state:', selectedState);
        }
    });
</script>
<!-- Your custom JavaScript for populating dropdowns dynamically -->

</body>
</html>
