<?php
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U-MES</title>
    <link rel="stylesheet" href="log-in-page.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" href="../IMAGE/Header.png" type="img/x-icon">
</head>

<body>
    <!-- Main -->
    <main>
        <div class="logo-title">
            <img src="IMAGE/Header.png" alt="header" height="30px">
            <div class="title">
                <h1>U-MES</h1>
                <p>AI-Powered Motorcyle System</p>
            </div>
        </div>
        <!-- Section Login -->
        <section class="section-login" id="form">
            <div class="container">
                <!-- Card Header -->
                <div class="card-header">
                    <h3>Sign in</h3>
                    <p>Enter your credentials to access the system</p>
                </div>
                <!-- Content / Form-->
                <div class="card-content">
                    <form method="post" id="loginform">
                        <div class="email">
                            <label for="email">Email</label>
                            <div class="email-form">
                                <span class="fab fa-google"></span>
                                <input type="email" id="email" placeholder="your@gmail.com" name="email" autocomplete="email" required>
                            </div>
                        </div>
                        <div class="password">
                            <label for="password">Password</label>
                            <div class="password-form">
                                <img src="IMAGE/Password.png" alt="Password" width="18px">
                                <input type="password" id="password" placeholder="••••••••" name="password" required>
                            </div>
                        </div>

                        <div class="user_is_correct">
                            <img src="./IMAGE/Invalid.png" alt="err">
                            <span id="valid">Invalid Username or Password</span>
                        </div>

                        <button type="submit" class="submit-button" id="form_button">Sign in</button>
                    </form>
                </div>

                <!-- Break Line-->
                <div class="break-line"></div>

                <!-- Card Credentials -->
                <div class="card-credentials">
                    <p>Demo Credentials:</p>

                    <!-- Admin -->
                    <div class="card-admin">
                        <div>
                            <div class="account">
                                <h3>Shop Admin (Main User)</h3>
                                <p>andrei@aims.com / admin123</p>
                            </div>
                            <div class="card-user-content">
                                <p>• Manage customer records</p>
                                <p>• Register motorcycles & assign tasks</p>
                                <p>• Update service status & monitor progress</p>
                                <p>• Manage parts inventory</p>
                                <p>• Generate reports</p>
                            </div>
                        </div>
                        <div class="card-type">
                            <div>Primary</div>
                        </div>
                    </div>

                    <!-- Mechanic -->
                    <div class="card-mechanic">
                        <div>
                            <div class="account">
                                <h3>Shop Mechanic</h3>
                                <p>alyssa@aims.com / mechanic123</p>
                            </div>
                            <div class="card-user-content">
                                <p>• View assigned repair tasks</p>
                                <p>• Update repair progress</p>
                                <p>• Submit completed repair reports</p>
                            </div>
                        </div>
                        <div class="card-type">
                            <div>Workshop</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="./log-in-page.js"></script>
</body>

</html>