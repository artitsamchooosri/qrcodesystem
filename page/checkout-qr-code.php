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
        echo '<script>alert("QR Code ถูกใช้ไปแล้ว กรุณาใช้ QR Code โค้ดใหม่") </script>';
        
        header( "Refresh:0.1; url=index.php", true, 303);
        $returnerr = $check_coupong;
        exit;
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
        .bg-blacks{
            background:#17202A;
            background-color:black;
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
        .border_blue{
            border-radius: 15px;
            border: 3px solid #5050DB;
            padding: 5px;
            background:#00008B
        }
        .border_green{
            border-radius: 15px;
            border: 3px solid #50DC50;
            padding-top: 5px;
            margin-bottom: 10px;
            background:#008C00
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
            margin-top: 15vmin;

            width: 100%;

            height: 18vmin;
            cursor: pointer;
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
            height: 30vmin;
            width: 30vmin;
            max-width: 25vmin;
            max-height: 100px;
            padding: 8px;
        }

        .column-img {


            padding: 10px;

        }

        .img-re {
            max-width: 85vmin;
            max-height: 40vmin;
            position: absolute;
            vertical-align: middle;
            margin-top: 18vmin;

        }

        .column-img img {
            margin-top: 8px;
            vertical-align: middle;
        }

        .box-card {
            border-radius: 20px;
            border-color: #FFF700;
            padding: 15px;
            border: 2px solid #FFF700;
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
    <div class="layout-wrapper layout-content-navbar layout-without-menu bg-blacks">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y ">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="">
                                    <div class="row text-center">
                                        <div class="col-sm-12 ">
                                            <p class="text-yello border_blue" style="font-size:3vmax;">Realtime QRcode Lock Bonus Success</p>
                                            <p class="text-yello" style="font-size:2vmax;">ระบบ QRcode ล็อกโบนัส</p>
                                        </div>
                                        <div class="col-sm-12 text-center border_green">
                                            <?php
                                            if (!empty($returnerr)) {
                                            ?>
                                                <h5 class="text-yello" style="font-size:3vmax;color:#E59866 "><small class="text-yello" style="color:#EDBB99 "><?php echo @$returnerr; ?></small></h5>
                                            <?php
                                            } else if (!empty($returnok)) {
                                            ?>
                                                <h5 class="text-yello" style="font-size:3vmax;color:#76D7C4">หมดอายุ ภายใน<small class="text-yello" style="color:#76D7C4" id="demo"></small></h5>

                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="box-card" style="height: 100%;">
                                    <div class="text-center">
                                        <h5 class="text-yello" style="font-size:2vmax;color: #DAF7A6;">เกมส์ที่ล็อกโบนัส สำเร็จ</h5>
                                        <p class="text-yello" style="font-size:1.5vmax;color: #DAF7A6;">กรุณาแคปภาพนี้ไว้</p>
                                    </div>
                                    <?php
                                    for ($x = 0; $x < 3; $x++) {
                                    ?>
                                        <div class=" centercol">
                                            <?php
                                            for ($i = 0; $i < 3; $i++) {
                                                $dir_path = "../assets/img/game/";
                                                $files = scandir($dir_path);
                                                $count = count($files);
                                                $index = rand(2, ($count - 1));
                                                $filenams = $files[$index];
                                            ?>
                                                <a href="https://monaco88.imember.cc/login"><img class="responsive" src="<?php echo $dir_path . "/" . $filenams ?>" alt="Card image cap" /></a>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class=" box-card m-2" style="height: 100%;">
                                    <div class="text-center">
                                        <!-- <h5 class="text-yello" style="font-size:2vmax;padding: 8px;color:#CCD1D1">เรียลไทม์ ที่เจาะสำเร็จแล้ว</h5> -->
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row centercol">
                                                <img class="img-re " src="../assets/img/tab/bg_message.png" alt="bonus game">
                                            </div>
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
                    if (document.getElementById('demo')){
                    document.getElementById("demo").innerHTML = "   " + hourss + " ชั่วโมง " + minutes + " นาที " + seconds + " วินาที";

                    // If the count down is finished, write some text
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("demo").innerHTML = "EXPIRED";
                    }
                }}, 1000);
            </script>
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
                        var piceran=parseInt(generate(3))
                        var text_pice=document.createTextNode((" Lock Bonus สำเร็จ  "+ piceran.toLocaleString('en-US') +" บาท").substring(add));
                        var text = text_pice;
                        if(piceran < 10000){
                            tag.style.color = "#808000";
                        }else if(piceran >=10000 &&  piceran <30000){
                            tag.style.color = "#FFA500";
                        }else if(piceran >=30000 &&  piceran <50000){
                            tag.style.color = "#FB00FF";
                        }else{
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
                    return pice+"00";
                }

                function randomIntFromInterval(min, max) {
                    return Math.floor(Math.random() * (max - min + 1) + min)
                }
            </script>
</body>
<!-- Display the countdown timer in an element -->



</html>