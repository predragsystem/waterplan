<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pure Water, Pure Wellness</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/login.css"> -->
     <style>
        body, html {
    height: 100%;
    margin: 0;
    /* background-color: #007bff; */
}

.login-page {
    background-image: url('img/bodybg.webp'); /* Replace with the path to your image */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    
}


.card {
    background: rgba(255, 255, 255, 0.9);
    border-radius: 10px;
}

.card-title {
    color: #007bff;
    font-weight: bold;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}
     </style>
    
</head>
<body>
    <div class="container-fluid login-page ">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow">
                    <div class="card-body">
                       
                        <!-- <h3 class="card-title text-center">Pure Water, Pure Wellness</h3> -->
                        <img src="Img/logo5.png" alt="logo"  style="width: 200px; height: 150px;"  class="rounded mx-auto d-block">
                        <form>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                        <p class="text-center mt-3">
                            <a href="#">Forgot password?</a>
                        </p>
                        <p class="text-center">
                            <a href="regitraionwater.html">Don't have an account? Sign up</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
