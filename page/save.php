<?php
require_once "config.php";
include('../libs/phpqrcode/qrlib.php');
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
function guidv4($data = null)
{

	$data = $data ?? random_bytes(16);
	assert(strlen($data) == 16);


	$data[6] = chr(ord($data[6]) & 0x0f | 0x40);

	$data[8] = chr(ord($data[8]) & 0x3f | 0x80);


	return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}

if (count($_POST) > 0) {
	if ($_POST['type'] == 1) {
		$quantity = $_POST['quantity'];
		$exp_date = $_POST['exp_date'];
		for ($x = 0; $x <= $quantity; $x++) {
			$tempDir = '../temp/';
			$idcoupong = guidv4();
			$filename = $idcoupong . '.png';
			$body =  'https://' . htmlspecialchars($_SERVER['SERVER_NAME']) . '/qrscan-system/page/checkout-qr-code.php?id=' . $idcoupong;
			$codeContents = $body;
			QRcode::png($codeContents, $tempDir . $filename, QR_ECLEVEL_H, 9, 4);
			$returninsert = "";
			$sql = "INSERT INTO `qrscan`.`coupong`(`uuid`, `cread-date`, `exp-date`, `status`, `url-coupong`, `filename`) 
VALUES ('" . $idcoupong . "', '" . date("Y-m-d H:i:s") . "', '" . $exp_date . "', 'available', '" . $body . "', '" . $filename . "')";
			if (mysqli_query($conn, $sql)) {
				$check= json_encode(array("statusCode" => 200));
			} else {
				$check= "Error: " . $sql . "<br>" . mysqli_error($conn);
				break;
			}
		}
		echo $check;
		mysqli_close($conn);
	}
}
if (count($_POST) > 0) {
	if ($_POST['type'] == 2) {
		$uuid = $_POST['uuid'];
		$cread_date = $_POST['cread_date'];
		$exp_date = $_POST['exp_date'];
		$status = $_POST['status'];
		$sql = "UPDATE `coupong` SET `cread-date`='$cread_date',`exp-date`='$exp_date',`status`='$status' WHERE uuid='".$uuid."'";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode" => 200));
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if (count($_POST) > 0) {
	if ($_POST['type'] == 3) {
		$id = $_POST['id'];
		$sql = "DELETE FROM `coupong` WHERE uuid='".$id."'";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if (count($_POST) > 0) {
	if ($_POST['type'] == 4) {
		$id = $_POST['id'];
		$sql = "DELETE FROM coupong WHERE uuid='".$id."'";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
