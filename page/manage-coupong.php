<?php
session_start();
if (isset($_SESSION["loggedin"]) === false || $_SESSION["loggedin"] === false) {
    header("location: login.php");
    exit;
}

require_once "config.php";
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html class="light-style layout-menu-fixed" data-assets-path="../assets/">
<meta charset="utf-8" />
<meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<title>Manage QR-Code</title>
<meta name="description" content="" />
<link rel="icon" type="image/x-icon" href="../assets/img/favicon/scanner.ico" />
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

<link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />
<link rel="stylesheet" href="../css/style.css">

<!-- Page CSS -->

<!-- Helpers -->
<script src="../assets/vendor/js/helpers.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />

<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="../assets/js/config.js"></script>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- เมนูด้านข้าง -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <!-- Logo -->
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo" style="padding-top: 15px;">
                            <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <image href="../assets/img/favicon/scanner.ico" height="25" width="25" />
                            </svg>
                        </span>
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">scanner</span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>
                <!-- Menu -->
                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item">
                        <a href="admin.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>
                    <!--
                    <li class="menu-item">
                        <a href="cread-qr-code.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Create QR-Code</div>
                        </a>
                    </li>
-->
                    <li class="menu-item active">
                        <a href="manage-coupong.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Manage QR-Code</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- จบเมนูด้านข้าง -->

            <div class="layout-page">
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                Manage QR-Code
                            </div>
                        </div>


                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item lh-1 me-3">
                                Hello Artit
                            </li>

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../assets/img/avatars/admin.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../assets/img/avatars/admin.png" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">Artit Samchoosri</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="logout.php">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="table-wrapper">
                                <div class="table-title">
                                    <div class="row align-items-center ms-auto">
                                        <div class="col-lg-6 col-sm-12">
                                            <h2 class="text-white">Manage <b>QR Code</b></h2>
                                        </div>
                                        <div class="col-lg-6 col-sm-12">
                                            <a href="#addEmployeeModal" class="btn btn-success"
                                                data-bs-toggle="modal"><i class="menu-icon tf-icons bx bx-qr-scan"></i>
                                                <span>Add New User</span></a>
                                            <a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i
                                                    class="menu-icon tf-icons bx bx-trash-alt"></i>
                                                <span>Delete</span></a>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-hover" id="example" class="display">
                                    <thead>
                                        <tr>
                                            <th style="width:10%">
                                                <span class="custom-checkbox">
                                                    <input type="checkbox" id="selectAll">
                                                    <label for="selectAll"></label>
                                                </span>
                                            </th>
                                            <th style="width:15%">QR Code</th>
                                            <th style="width:15%">Key Number</th>
                                            <th style="width:15%">ID</th>
                                            <th style="width:10%">Create Date</th>
                                            <th style="width:10%">EXP Date</th>
                                            <th style="width:10%">Check Out Date</th>
                                            <th style="width:10%">Status</th>
                                            <th style="width:20%">ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
                                        $sql = "SELECT\n" .
                                            "coupong.uuid,\n" .
                                            "coupong.`cread-date`,\n" .
                                            "coupong.`keynumber`,\n" .
                                            "coupong.`exp-date`,\n" .
                                            "coupong.`checkout-date`,\n" .
                                            "coupong.`status`,\n" .
                                            "coupong.`url-coupong`,\n" .
                                            "coupong.filename\n" .
                                            "FROM\n" .
                                            "coupong  ORDER BY `coupong`.`cread-date` DESC";
                                        $result = mysqli_query($conn, $sql);
                                        mysqli_close($conn);
                                        $i = 1;
                                        while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <tr id="<?php echo $row["uuid"]; ?>">
                                            <td>
                                                <span class="custom-checkbox">
                                                    <input type="checkbox" class="user_checkbox"
                                                        data-user-id="<?php echo $row["uuid"]; ?>">
                                                    <label for="checkbox2"></label>
                                                </span>
                                            </td>
                                            <td><?php echo '<img src="../temp/' . $row["filename"] . '" style="width:50px; height:50px;">'; ?>
                                            </td>
                                            <td><?php echo $row["keynumber"]; ?></td>
                                            <td><?php echo $row["uuid"]; ?></td>
                                            <td><?php echo date_format(new DateTime($row["cread-date"]), "d/m/Y H:i:s"); ?>
                                            </td>
                                            <td><?php echo date_format(new DateTime($row["exp-date"]), "d/m/Y H:i:s"); ?>
                                            </td>
                                            <td>
                                                <?php
                                                    if ($row["checkout-date"] == "") {
                                                        echo $row["checkout-date"];
                                                    } else {
                                                        echo date_format(new DateTime($row["checkout-date"]), "d/m/Y H:i:s");
                                                    }

                                                    ?>
                                            </td>
                                            <td><?php echo $row["status"]; ?></td>
                                            <td>
                                                <a href="#editEmployeeModal" class="edit" data-bs-toggle="modal">

                                                    <i class="menu-icon tf-icons bx bx-edit update"
                                                        data-toggle="tooltip" data-uuid="<?php echo $row["uuid"]; ?>"
                                                        data-cread-date="<?php echo $row["cread-date"]; ?>"
                                                        data-keynumber="<?php echo $row["keynumber"]; ?>"
                                                        data-exp-date="<?php echo $row["exp-date"]; ?>"
                                                        data-checkout-date="<?php echo $row["checkout-date"]; ?>"
                                                        data-status="<?php echo $row["status"]; ?>" title="Edit"></i>
                                                </a>
                                                <a href="download.php?file=<?php echo $row["filename"]; ?>"
                                                    class="download">
                                                    <i class="menu-icon tf-icons bx bx-download" data-toggle="tooltip"
                                                        title="Download"></i>
                                                </a>
                                                <a href="#deleteEmployeeModal" class="delete"
                                                    data-id="<?php echo $row["uuid"]; ?>" data-bs-toggle="modal">
                                                    <i class="menu-icon tf-icons bx bx-trash-alt" data-toggle="tooltip"
                                                        title="Delete"></i>
                                                </a>

                                            </td>
                                        </tr>
                                        <?php
                                            $i++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Add Modal HTML -->
                        <div id="addEmployeeModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form id="user_form">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Generate QR Code</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Key Number</label>
                                                <input type="text" id="keynumber_c" name="keynumber"
                                                    class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <input type="text" id="quantity_c" name="quantity" class="form-control"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <label>Exp Date</label>
                                                <input class="form-control" type="datetime-local" id="exp_date_c"
                                                    name="exp_date" value="" required />
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="hidden" value="1" name="type">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-success" id="btn-add">Generate</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Edit Modal HTML -->
                        <div id="editEmployeeModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form id="update_form">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <input type="hidden" id="id_u" name="id" class="form-control" required>
                                            <div class="form-group align-items-center">
                                                <img id="img_u" src="" style="width:150px; height:150px;">
                                            </div>
                                            <div class="form-group">
                                                <label>ID</label>
                                                <input class="form-control" type="text" id="uuid_u" name="uuid" value=""
                                                    readonly required />

                                            </div>
                                            <div class="form-group">
                                                <label>Key Number</label>
                                                <input class="form-control" type="text" id="keynumber_u"
                                                    name="keynumber" value="" required />

                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-select" id="status_u" name="status"
                                                    class="form-control" required>
                                                    <option selected>Open this select menu</option>
                                                    <option value="used">Used</option>
                                                    <option value="available">Available</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Create Date</label>
                                                <input class="form-control" type="datetime-local" id="cread_date_u"
                                                    name="cread_date" value="" required />
                                            </div>
                                            <div class="form-group">
                                                <label>Exp Date</label>
                                                <input class="form-control" type="datetime-local" id="exp_date_u"
                                                    name="exp_date" value="" required />
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="hidden" value="2" name="type">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-info" id="update">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Delete Modal HTML -->
                        <div id="deleteEmployeeModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form>

                                        <div class="modal-header">
                                            <h4 class="modal-title">Delete QR Code</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="hidden" id="id_d" name="id" class="form-control">
                                            <p>คุณต้องการที่จะลบ QR Code นี้ใช่หรือไม่ ?</p>
                                            <p class="text-warning"><small>เมื่อลบแล้วจะไม่สามารถย้อนกลับได้.</small>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-danger" id="delete">Delete</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Content wrapper -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">

                        </div>
                    </footer>
                    <!-- / Footer -->
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
    </div>





    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
    $(document).on('click', '#btn-add', function(e) {
        var data = $("#user_form").serialize();
        $.ajax({
            data: data,
            type: "post",
            url: "save.php",
            success: function(dataResult) {
                var dataResult = JSON.parse(dataResult);
                if (dataResult.statusCode == 200) {
                    $('#addEmployeeModal').modal('hide');
                    alert('Data added successfully !');
                    location.reload();
                } else if (dataResult.statusCode == 201) {
                    alert(dataResult);
                }
            }
        });
    });
    $(document).on('click', '.update', function(e) {
        var id = $(this).attr("data-uuid");
        var filename = id + ".png"
        var status = $(this).attr("data-status");
        var keynumber = $(this).attr("data-keynumber");
        var cread_date = $(this).attr("data-cread-date");
        var exp_date = $(this).attr("data-exp-date");
        var checkout_date = $(this).attr("data-checkout-date");
        document.getElementById("img_u").src = "../temp/" + filename;
        $('#uuid_u').val(id);
        $('#keynumber_u').val(keynumber);
        $('#id_u').val(id);
        $('#status_u').val(status);
        $('#cread_date_u').val(cread_date);
        $('#exp_date_u').val(exp_date);
        $('#checkout_date_u').val(checkout_date);
    });
    $(document).on('click', '#update', function(e) {
        var data = $("#update_form").serialize();
        $.ajax({
            data: data,
            type: "post",
            url: "save.php",
            success: function(dataResult) {
                var dataResult = JSON.parse(dataResult);
                if (dataResult.statusCode == 200) {
                    $('#editEmployeeModal').modal('hide');
                    alert('Data updated successfully !');
                    location.reload();
                } else if (dataResult.statusCode == 201) {
                    alert(dataResult);
                }
            }
        });
    });
    $(document).on("click", ".delete", function() {
        var id = $(this).attr("data-id");
        $('#id_d').val(id);

    });
    $(document).on("click", "#delete", function() {
        $.ajax({
            url: "save.php",
            type: "POST",
            cache: false,
            data: {
                type: 3,
                id: $("#id_d").val()
            },
            success: function(dataResult) {
                $('#deleteEmployeeModal').modal('hide');
                $("#" + dataResult).remove();
                location.reload();
            }
        });
    });
    $(document).on("click", "#delete_multiple", function() {
        var user = [];
        $(".user_checkbox:checked").each(function() {
            user.push($(this).data('user-id'));
        });
        if (user.length <= 0) {
            alert("Please select records.");
        } else {
            WRN_PROFILE_DELETE = "Are you sure you want to delete " + (user.length > 1 ? "these" : "this") +
                " row?";
            var checked = confirm(WRN_PROFILE_DELETE);
            if (checked == true) {
                var selected_values = user.join(",");
                console.log(selected_values);
                $.ajax({
                    type: "POST",
                    url: "save.php",
                    cache: false,
                    data: {
                        type: 4,
                        id: selected_values
                    },
                    success: function(response) {
                        var ids = response.split(",");
                        for (var i = 0; i < ids.length; i++) {
                            $("#" + ids[i]).remove();
                        }
                        location.reload();
                    }
                });
            }
        }
    });
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
        var checkbox = $('table tbody input[type="checkbox"]');
        $("#selectAll").click(function() {
            if (this.checked) {
                checkbox.each(function() {
                    this.checked = true;
                });
            } else {
                checkbox.each(function() {
                    this.checked = false;
                });
            }
        });
        checkbox.click(function() {
            if (!this.checked) {
                $("#selectAll").prop("checked", false);
            }
        });
    });
    </script>



</body>

</html>