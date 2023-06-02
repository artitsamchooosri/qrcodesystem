<!DOCTYPE html>
<html class="light-style layout-menu-fixed" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Check Out Coupong</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/scanner.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

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
    .bg {
        background: linear-gradient(-45deg, #FFF700, #20201D, #08570D);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
        height: 100%;
    }

    .bg-blacks {
        background: #17202A;
        background-color: #17202A;
        color: #17202A;
        height: 100%;
    }

    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .center {
        position: fixed;
        top: 50%;
        left: 50%;
        margin-top: -100px;
        margin-left: -200px;
    }

    .centercol {
        display: flex;
        justify-content: center;
        align-items: center;
    }



    .wrapper {
        height: 5vh;
        width: 220px;
        border-radius: 7px;
        padding: 5px 3px 3px;
        transition: height 0.2s ease;

    }

    .wrapper.active {
        height: 525px;
    }

    .wrapper form {

        height: 5vh;
        font-size: 3vh;
        display: flex;
        cursor: pointer;
        user-select: none;
        text-align: center;
        border-radius: 20px;
        background: #FFF700;
        align-items: center;
        justify-content: center;
        transition: height 0.2s ease;
    }

    .wrapper.active form {
        height: 63px;
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
        color: #E7F8E8;
        margin-top: 15px;
        font-size: 15px;
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
        height: 70px;
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



    .Css3Marquee-demo {
        margin-top: 20%;
        height: 20vw;
        font-size: 20px;
        text-align: center;
    }

    .bg-bar {
        background: #08570D;
        color: #FFF700;
    }

    .text-yello {
        color: #FFF700;
    }

    .responsive {
        max-width: 100%;
        height: auto;
    }

    .column-img {
        float: left;
        width: 33%;
        padding: 3px;

    }

    .column-img img {
        margin-top: 8px;
        vertical-align: middle;
    }

    .smashinglogo {

        height: 40vw;
        background-position: center;
        background-size: contain;
        background-repeat: no-repeat;
        position: relative;
    }

    .img-re {
        max-width: 70%;
        min-width: 90vmin;
        max-height: 100%;
        position: absolute;
        vertical-align: middle;
        margin-top: 9vmin;
    }

    .hero-text {
        text-align: center;

        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #FFF700;
    }

    .clr {
        clear: both;
    }
    </style>
</head>

<body>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar layout-without-menu">

        <div class="layout-container bg-blacks">
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->


                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="">
                    <!-- Content -->

                    <div class="container-xxl container-p-y " style=" padding: 30px;">
                        <div class="row">
                            <div class="col-lg-12 mb-12 centercol">
                                <img src="../assets/img/logo/1-200x200.png" alt="bonus game"
                                    style="width:70vmin;max-width:70vw">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mb-12 centercol">
                                <img src="../assets/img/tab/r2.png" alt="bonus game"
                                    style="border-radius: 7px;width:70vw;height:8vmin;margin-bottom: 10px;">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-lg-12 mb-12 centercol ">

                                <div class="wrapper">
                                    <form action="#">
                                        <input type="file" hidden>
                                        <img src="#" alt="qr-code">
                                        <div class="content ">
                                            <i class="fas fa-cloud-upload"></i>
                                            <p style="color:#08570D;font-size: 20px;">Scan QR Code</p>
                                        </div>
                                    </form>
                                </div>
                                <script src="../js/script.js"></script>
                            </div>
                        </div>
                        <div class="row smashinglogo centercol">
                            <img class="img-re centercol" src="../assets/img/tab/bg_message.png" alt="bonus game">
                            <div class="Css3Marquee-demo ">
                                <div class="demo-top-bottom hero-text" id="new">

                                </div>
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
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>

        <script src="../assets/vendor/libs/jquery/jquery.js"></script>
        <script src="../assets/vendor/libs/popper/popper.js"></script>
        <script src="../assets/vendor/js/bootstrap.js"></script>
        <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

        <script src="../assets/vendor/js/menu.js"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->

        <!-- Main JS -->
        <script src="../assets/js/main.js"></script>
        <script type="text/javascript" src="../js/marquee.js"></script>
        <script>
        $('.demo-top-bottom').Css3Marquee({
            direction: 'top',
            speed: 2
        });
        </script>
        <script>
        setInterval(myMethod, 1000);

        function myMethod() {
            var add = 1,
                max = 12 - add;
            let numb = document.getElementById("new").children.length;
            var c = document.getElementById('new');
            var i, item = c.childNodes;

            if (Math.random() >= 0.4) {
                var tag = document.createElement("p");
                var piceran = parseInt(generate(3))
                var text_pice = document.createTextNode((" Lock Bonus สำเร็จ  " + piceran.toLocaleString('en-US') +
                    " บาท").substring(add));
                var text = text_pice;
                if (piceran < 10000) {
                    tag.style.color = "#808000";
                } else if (piceran >= 10000 && piceran < 30000) {
                    tag.style.color = "#FFA500";
                } else if (piceran >= 30000 && piceran < 50000) {
                    tag.style.color = "#FB00FF";
                } else {
                    tag.style.color = "#54FF50";
                }

                tag.style.fontSize = "2vw";
                tag.appendChild(text);
                var element = document.getElementById("new");
                element.appendChild(tag);
            }
            for (i = item.length; i--;) {
                if (i >= 10) {
                    c.removeChild(item[i - 11]);
                }
            }
        }

        function generate(n) {
            var add = 1,
                max = 12 - add;
            if (n > max) {
                return generate(max) + generate(n - max);
            }
            max = Math.pow(10, n + add);
            var min = max / 10;
            var number = Math.floor(Math.random() * (max - min + 1)) + min;
            var pice = randomIntFromInterval(50, 1000);
            return pice + "00";
        }

        function randomIntFromInterval(min, max) {
            return Math.floor(Math.random() * (max - min + 1) + min)
        }
        </script>
</body>



</html>