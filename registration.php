<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<div id="preloader">
        <div>
            <img src="assets/images/loading-gif.gif" alt="Loading">
        </div>
    </div>
<main>
        <div class="row">
            
                    <h1>Register</h1>
                    <div id="registration_status"></div>
                    <form id="register">
                            <div class="form-group">
                                <label for="register_name">Name</label>
                                <input type="text" class="form-control" name="register_name" id="register_name">
                            </div>
                            <div class="form-group">
                                <label for="register_username">Username</label>
                                <input type="text" class="form-control" name="register_username" id="register_username">
                            </div>
                            <div class="form-group">
                                <label for="register_password">Password</label>
                                <input type="password" class="form-control" name="register_password" id="register_password">
                            </div>
                            <div>
                                <button type="button" class="btn btn-success mt-2 register">Register</button>
                            </div>
                    </form>
                        
                        
                    
        </div>
    </main>
</body>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/register.js"></script>

</html>