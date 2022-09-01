<!DOCTYPE html>
<html class="light-style layout-menu-fixed" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Check Out Coupong</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/scanner.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
    <style>
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 0 10px;
            background: #E3F2FD;
        }

        .wrapper {
            height: 270px;
            width: 420px;
            border-radius: 7px;
            background: #0B85FF;
            padding: 30px 30px 35px;
            transition: height 0.2s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .wrapper.active {
            height: 525px;
        }

        .wrapper form {
            height: 210px;
            display: flex;
            cursor: pointer;
            user-select: none;
            text-align: center;
            border-radius: 7px;
            background: #fff;
            align-items: center;
            justify-content: center;
            transition: height 0.2s ease;
        }

        .wrapper.active form {
            height: 225px;
            pointer-events: none;
        }

        form img {
            display: none;
            max-width: 148px;
        }

        .wrapper.active form img {
            display: block;
        }

        .wrapper.active form .content {
            display: none;
        }

        form .content i {
            color: #0B85FF;
            font-size: 55px;
        }

        form .content p {
            color: #0B85FF;
            margin-top: 15px;
            font-size: 16px;
        }

        .wrapper .details {
            opacity: 0;
            margin-top: 25px;
            pointer-events: none;
        }

        .wrapper.active .details {
            opacity: 1;
            pointer-events: auto;
            transition: opacity 0.5s 0.05s ease;
        }

        .details textarea {
            width: 100%;
            height: 128px;
            outline: none;
            resize: none;
            color: #fff;
            font-size: 18px;
            background: none;
            border-radius: 5px;
            padding: 10px 15px;
            border: 1px solid #fff;
        }

        textarea::-webkit-scrollbar {
            width: 0px;
        }

        textarea:hover::-webkit-scrollbar {
            width: 5px;
        }

        textarea:hover::-webkit-scrollbar-track {
            background: none;
        }

        textarea:hover::-webkit-scrollbar-thumb {
            background: #fff;
            border-radius: 8px;
        }

        .details .buttons {
            display: flex;
            margin-top: 20px;
            align-items: center;
            justify-content: space-between;
        }

        .buttons button {
            height: 55px;
            outline: none;
            border: none;
            font-weight: 500;
            font-size: 16px;
            cursor: pointer;
            color: #0B85FF;
            border-radius: 5px;
            background: #fff;
            transition: transform 0.3s ease;
            width: calc(100% / 2 - 10px);
        }

        .buttons button:active {
            transform: scale(0.95);
        }

        @media (max-width: 450px) {
            .wrapper {
                padding: 25px;
                height: 260px;
            }

            .wrapper.active {
                height: 520px;
            }
        }
    </style>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar layout-without-menu">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <h3 class="mb-0">Check Out Coupong</h3>
                            </div>
                        </div>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl  container-p-y center">
                        <div class="row pb-3">
                            <div class="col-lg-12 mb-12 order-0">

                                <div class="row ">
                                    <div class="wrapper">
                                        <form action="#">
                                            <input type="file" hidden>
                                            <img src="#" alt="qr-code">
                                            <div class="content">
                                                <i class="fas fa-cloud-upload"></i>
                                                <p>Scan QR Code</p>
                                            </div>
                                        </form>
                                        <div class="details">
                                            <textarea spellcheck="false" disabled></textarea>
                                            <div class="buttons">
                                                <button class="close">Close</button>
                                                <button class="copy">Copy Text</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script src="../js/script.js"></script>
                            </div>
                        </div>
                        <!-- / Content -->

                        <!-- Footer -->
                        <footer class="content-footer footer bg-footer-theme">
                        </footer>
                        <!-- / Footer -->

                        <div class="content-backdrop fade"></div>
                    </div>
                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>
        </div>
        <!-- / Layout wrapper -->

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="../assets/vendor/libs/jquery/jquery.js"></script>
        <script src="../assets/vendor/libs/popper/popper.js"></script>
        <script src="../assets/vendor/js/bootstrap.js"></script>
        <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

        <script src="../assets/vendor/js/menu.js"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->

        <!-- Main JS -->
        <script src="../assets/js/main.js"></script>

</body>
<!-- Display the countdown timer in an element -->



</html>