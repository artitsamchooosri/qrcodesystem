<?php
require_once "config.php";
include('../libs/phpqrcode/qrlib.php');
include('fuc-coupong.php');
if (isset($_GET['id'])) {
    $tempDir = '../temp/';
    $idcoupong = $_GET['id'];
    $filename = $idcoupong . '.png';
    $check_coupong = checkuuid($idcoupong);
    if ($check_coupong == "pass") {
        $sql = "UPDATE `qrscan`.`coupong` SET `checkout-date` = '" . date("Y-m-d H:i:s") . "', `status` = 'used' WHERE `uuid` = '" . $idcoupong . "'";
        $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        $query = mysqli_query($conn, $sql);
        mysqli_close($conn);
        if ($query) {
            $returnok = "เพิ่มข้อมูลสำเร็จ";
        } else {
            $returnerr = "ส่งคำสั่งไม่ได้";
        }
    } else {
        $returnerr = $check_coupong;
    }
}
?>
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
        .bg {
            background: linear-gradient(-45deg, #FFF700, #20201D, #08570D);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            height: 100%;
            color: #FFF700;
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
            height: 73px;
            width: 320px;
            border-radius: 7px;
            padding: 3px 3px 3px;
            transition: height 0.2s ease;

        }

        .wrapper.active {
            height: 525px;
        }

        .wrapper form {
            height: 63px;
            display: flex;
            cursor: pointer;
            user-select: none;
            text-align: center;
            border-radius: 20px;
            background: #16A01F;
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
            font-size: 26px;
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

        @media (max-width: 100%) {
            .wrapper {
                padding: 5px;
                height: 70px;
            }

            .wrapper.active {
                height: 100%;
            }
        }

        .Css3Marquee-demo {
            width: 100%;
            height: 90vh;
            cursor: pointer;
            background: #20201D;
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
    </style>
</head>
<style>
    .center {
        padding: 70px 0;
    }
</style>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar layout-without-menu bg">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y ">
                        <div class="row  mb-12 p-3">
                            <div class="col-lg-12 mb-12">
                                <div class="card bg">
                                    <div class="row text-center">
                                        <div class="col-sm-12">
                                            <p class="text-yello" style="font-size:3vmax;">Realtime QRcode Lock Bonus Success</p>
                                            <p class="text-yello" style="font-size:2vmax;">ระบบ QRcode ล็อกโบนัส</p>
                                        </div>
                                        <div class="col-sm-12 text-center ">
                                            <?php
                                            if (!empty($returnerr)) {
                                            ?>
                                                <h5 class="text-yello" style="font-size:3vmax;"><small class="text-yello"><?php echo @$returnerr; ?></small></h5>
                                            <?php
                                            } else if (!empty($returnok)) {
                                            ?>
                                                <h5 class="text-yello" style="font-size:3vmax;">หมดอายุ ภายใน<small class="text-yello" id="demo"></small></h5>

                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-lg-6 mb-6 ">
                                <div class="bg-bar" style="height: 100%;">
                                    <div class="card-body text-center">
                                        <h5 class="text-yello" style="font-size:2vmax;">เกมส์ที่ล็อกโบนัส สำเร็จ</h5>
                                        <p class="text-yello" style="font-size:1.5vmax;">กรุณาแคปภาพนี้ไว้</p>
                                    </div>
                                    <?php
                                    $imagesDir = glob('../assets/img/game/*');

                                    $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

                                    $randomImage = $images[array_rand($imagesDir,9)];
                                    print_r($randomImage);
                                    ?>
                                    <div class="column-img">
                                        <img class="responsive" width="400" height="400" src="../assets/img/elements/4.png" alt="Card image cap" />
                                        <img class=" responsive" width="400" height="400" src="../assets/img/elements/4.png" alt="Card image cap" />
                                        <img class="responsive" width="400" height="400" src="../assets/img/elements/4.png" alt="Card image cap" />
                                    </div>
                                    <div class="column-img">
                                        <img class="responsive" width="400" height="400" src="../assets/img/elements/4.png" alt="Card image cap" />
                                        <img class="responsive" width="400" height="400" src="../assets/img/elements/4.png" alt="Card image cap" />
                                        <img class="responsive" width="400" height="400" src="../assets/img/elements/4.png" alt="Card image cap" />
                                    </div>
                                    <div class="column-img">
                                        <img class="responsive" width="400" height="400" src="../assets/img/elements/4.png" alt="Card image cap" />
                                        <img class="responsive" width="400" height="400" src="../assets/img/elements/4.png" alt="Card image cap" />
                                        <img class="responsive" width="400" height="400" src="../assets/img/elements/4.png" alt="Card image cap" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 mb-6 ">
                                <div class="bg-bar" style="height: 100%;">
                                    <div class="card-body text-center">
                                        <h5 class="card-text" style="font-size:1vw;">XXXXXXXXXXXXXX xxXX XXXXXXXXXXx</h5>
                                        <p class="card-text" style="font-size:0.5vw;">YYYYYYYYYYYYYYYYYYYYYYYYYY</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mb-12">
                                            <div class="Css3Marquee-demo " style="border-radius: 20px;">
                                                <div class="demo-top-bottom" id="new">

                                                </div>

                                            </div>
                                        </div>
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
            <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
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
            <script type="text/javascript" src="../js/marquee.js"></script>
            <script>
                var distance = 1296000000;
                // Update the count down every 1 second
                var x = setInterval(function() {

                    // Get today's date and time
                    var now = new Date().getTime();
                    distance = distance - 1000;
                    // Find the distance between now and the count down date
                    var hourss = Math.floor((distance / (1000 * 60 * 60 * 60)));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    // Display the result in the element with id="demo"
                    document.getElementById("demo").innerHTML = "   " + hourss + " : " + minutes + " ชั่วโมง";

                    // If the count down is finished, write some text
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("demo").innerHTML = "EXPIRED";
                    }
                }, 1000);
            </script>
            <script>
                $('.demo-top-bottom').Css3Marquee({
                    direction: 'top',
                    speed: 2
                });
            </script>
            <script>
                setInterval(myMethod, 800);

                function myMethod() {
                    let numb = document.getElementById("new").children.length;
                    var c = document.getElementById('new');
                    var i, item = c.childNodes;

                    if (Math.random() >= numb / 10) {
                        var tag = document.createElement("p");
                        var text = document.createTextNode(generate(3));
                        tag.style.color = "#FFF700";
                        tag.style.fontSize = "2vh;";
                        tag.appendChild(text);
                        var element = document.getElementById("new");
                        element.appendChild(tag);
                    }
                    for (i = item.length; i--;) {
                        if (i >= 10) {
                            c.removeChild(item[i - 5]);
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
                    var pice = randomIntFromInterval(50, 1000)
                    return ("" + number + "xx   " + pice + "00").substring(add);
                }

                function randomIntFromInterval(min, max) {
                    return Math.floor(Math.random() * (max - min + 1) + min)
                }
            </script>
</body>
<!-- Display the countdown timer in an element -->



</html>