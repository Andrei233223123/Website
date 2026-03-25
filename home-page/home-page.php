<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIMS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="home-page.css">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvzDg3hQ6MpJssvJqZsTWtOSF4k-eJWdVtzA&s" type="image/x-icon">
</head>

<body>

    <div class="px1">
        <div class="aside" id="navigation">
            <aside class="navigation">
                <div class="title">
                    <div>
                        <img src="../IMAGE/Service2.png" alt="Service">
                        <h2>U-MES</h2>
                    </div>
                </div>

                <div class="break-line"></div>

                <nav class="nav-component" id="nav">
                    <div class="px-1" id="dashboard">
                        <img src="../IMAGE/Dashboard.png" alt="Dashboard">
                        <h3>Dashboard</h3>
                    </div>
                    <div class="px-2" id="customer">
                        <img src="../IMAGE/Customer.png" alt="Customer">
                        <h3>Customers</h3>
                    </div>
                    <div class="px-3" id="service">
                        <img src="../IMAGE/Service.png" alt="Services">
                        <h3>Services</h3>
                    </div>
                    <div class="px-4" id="inventory">
                        <img src="../IMAGE/Inventory.png" alt="Inventory">
                        <h3>Inventory</h3>
                    </div>
                    <div class="px-5" id="catalog">
                        <img src="../IMAGE/Catalog.png" alt="Catalog">
                        <h3>Catalog</h3>
                    </div>
                    <div class="px-6" id="alerts">
                        <img src="../IMAGE/Alert.png" alt="Safety">
                        <h3>Safety</h3>
                        <img src="../IMAGE/Alert2.png" alt="" style="padding-top: 3px;" class="alert">
                    </div>
                    <div class="px-7" id="messages">
                        <img src="../IMAGE/Message.png" alt="Message">
                        <h3>Messages</h3>
                    </div>
                </nav>

                <div class="break-line"></div>

                <div class="user_profile">
                    <div class="user-round" id="avatar">
                        <span>AD</span>
                    </div>
                    <div>
                        <h4 id="user">Admin User</h4>
                        <p id="email" style="font-size: small;">admin@motoadmin.com</p>
                    </div>
                </div>

                <div class="sign-out-button">
                    <img src="../IMAGE/Sign-out.png" alt="out" height="24px" width="24px">
                    <h4 style="font-weight: 400;">Logout</h4>
                </div>

            </aside>
        </div>

        <div class="px2">

            <div>
                <header class="head" id="header">
                    <div class="head-nav">
                        <div class="menu" id="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="notify" id="notification">
                            <img src="../IMAGE/Notification.png" alt="notification">
                            <div><span id="num_notification">3</span></div>
                        </div>
                    </div>
                </header>
            </div>

            <div>
                <main>
                    <div class="card-dashboard">
                        <div class="dashboard-title">
                            <h1 style="font-weight: 500;">Dashboard</h1>
                            <h3 style="font-weight: 400; color: gray;">Welcome back! Here's your business overview</h3>
                        </div>

                        <section class="card-services">
                            <div class="card-1">
                                <div>
                                    <div>
                                        <h4>Active Services</h4>
                                        <span id="active-service" class="act-serv">2</span>
                                    </div>
                                    <div class="service-img">
                                        <img src="../IMAGE/Service2.png" alt="Services" height="50px">
                                    </div>
                                </div>


                                <div>
                                    <div>
                                        <h4>Total Customers</h4>
                                        <span id="active-customer" class="act-cust">2</span>
                                    </div>

                                    <div class="customer-img">
                                        <img src="../IMAGE/Customer2.png" alt="Customer" height="50px">
                                    </div>
                                </div>


                                <div>
                                    <div>
                                        <h4>Low Stock Items</h4>
                                        <span id="active-stock" class="act-stock">2</span>
                                    </div>
                                    <div class="stock-img">
                                        <img src="../IMAGE/Inventory2.png" alt="Inventory" height="50px">
                                    </div>
                                </div>


                                <div>
                                    <div>
                                        <h4>Safety Alerts</h4>
                                        <span id="active-alert" class="act-alt">2</span>
                                    </div>
                                    <div class="alert-img">
                                        <img src="../IMAGE/Alert2.png" alt="Alert" height="50px">
                                    </div>
                                </div>

                            </div>
                        </section>

                        <section class="card-comp">
                            <div class="pending-service" id="pending-services">
                                <div class="service-header-1">
                                    <div>
                                        <img src="../IMAGE/clock.png" alt="clock" height="25px">
                                        <span>Pending Service Requests</span>
                                    </div>
                                    <div class="pend-serv">1</div>
                                </div>

                                <div class="service-comp" id="service-card">
                                    <div class="service-comp-1" id="services">
                                        <h3><span id="user-name">John Ramirez</span></h3>
                                        <p id="description">Oil Change And Inspection</p>
                                    </div>
                                    <div>
                                        <span class="date" id="date-today">
                                            2026-03-18
                                        </span>
                                        <div class="Status" id="status">
                                            Pending
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="recent-service" id="record-card">
                                <div class="recent-header">
                                    <img src="../IMAGE/Trend.png" alt="trend" height="25px">
                                    <span>Recent Service Records</span>
                                </div>

                                <div class="record-comp" id="record">
                                    <div class="record-comp-1">
                                        <h3><span id="user-name">John Ramirez</span></h3>
                                        <p id="description">Oil Change And Inspection</p>
                                    </div>
                                    <div>
                                        <span class="date" id="date-today">
                                            2026-03-18
                                        </span>
                                        <div class="Status" id="status">
                                            Pending
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ai-asst" id="ai-assistance">
                                <div class="ai-header">
                                    <div>
                                        <img src="../IMAGE/Alert2.png" alt="err" height="25px">
                                        <span>AI Safety Alers Summary</span>
                                    </div>
                                    <div>
                                        <span class="alert-notif">
                                            2 New
                                        </span>
                                    </div>
                                </div>

                                <div class="ai-comp" id="ai-card">
                                    <div class="ai-comp-1">
                                        <div>
                                            <h3>
                                                <span id="issue">Worn Brake Pads Detection</span>
                                            </h3>
                                            <span id="issue-time">AI system detected critically worn brake pads on customer motorcycle during last service</span>
                                        </div>
                                        <div class="alert-status">high</div>
                                    </div>
                                </div>
                            </div>

                            <div class="stock-items" id="remain-stock">
                                <div class="stock-header">
                                    <div>
                                        <img src="../IMAGE/Inventory2.png" alt="err" height="25px">
                                        <span>Low Stock Items</span>
                                    </div>
                                    <div class="alert-stock">3</div>
                                </div>

                                <div class="stock-comp" id="ai-card">
                                    <div>
                                        <h3>
                                            <span id="low-item">Sport Brake Pads(Front)</span>
                                        </h3>
                                        <span>Brakes</span>
                                    </div>
                                    <div>
                                        <span id="last-stock">8/10</span>
                                        <p>Reorder needed</p>
                                    </div>
                                </div>
                            </div>


                        </section>
                    </div>
                </main>
            </div>




        </div>
    </div>









    <script src="./home-page.js"></script>
</body>

</html>