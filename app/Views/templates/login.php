<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kedai-J</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/slogin.css">
</head>

<body>
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <label for="reg-log"></label>
                    <div class="card-3d-wrap mx-auto">
                        <div class="card-3d-wrapper">
                            <div class="card-front">
                                <div class="center-wrap">
                                    <div class="section text-center">
                                        <h4 class="mb-4 pb-3">Log In</h4>
                                        <!-- Form -->
                                        <form action="loginAuth" method="post">
                                            <!-- Username Input -->
                                            <div class="form-group">
                                                <input type="text" name="username" class="form-style" placeholder="Username" required>
                                                <i class="input-icon uil uil-at"></i>
                                            </div>
                                            <!-- Password Input -->
                                            <div class="form-group mt-2">
                                                <input type="password" name="password" class="form-style" placeholder="Password" required>
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <!-- Level Input (Hidden) -->
                                            <input type="hidden" name="level" value="1"> <!-- Default level, change as needed -->
                                            <!-- Submit Button -->
                                            <button type="submit" class="btn mt-4">Login</button>
                                        </form>

                                        <!-- End Form -->
                                        <p class="mb-0 mt-4 text-center"><a href="https://www.web-leb.com/code" class="link">Forgot your password?</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>