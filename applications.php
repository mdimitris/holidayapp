<?php

include_once  'config.php';
require_once 'app/classes/user.php';

if (isset($_POST['employeeSubm'])) {

	userApplication($pdo);
} elseif (isset($_POST['applist'])) {

	listApplications($pdo);

}


function userApplication($pdo) {

    $date_from_init = $_POST['date_from'];
    $date_to_init = $_POST['date_to'];

    $date_from = date_format(date_create_from_format('d/m/Y', $_POST['date_from']), 'Y-m-d'); 
    $date_to = date_format(date_create_from_format('d/m/Y', $_POST['date_to']), 'Y-m-d');
    $reason = $_POST['comments'];
    $user_id = $_SESSION['user']['user_id'];
    $userData = $_SESSION['user'];

$sql = 'INSERT INTO application (date_created,date_from,date_to,reason,status_id,user_id) VALUES(now(),:date_from,:date_to,:reason,:status_id,:user_data_id)';
$stmt = $pdo->prepare($sql);

$stmt->execute([
	':date_from' => $date_from,
    ':date_to' => $date_to,
    ':reason' => $reason,
    ':status_id' => 1,
    ':user_data_id' => $user_id
]);

sendMailToAdmin($userData,$date_from_init,$date_to_init);

$_SESSION['import_success']=1;
header("Location: dashboard.php");


}

function listApplications($pdo) {

      $user_data_id = $_SESSION['user']['user_id'];

    //   $z= '"System Architect",
    //     "Edinburgh",
    //     "5421",
    //     "2011/04/25",
    //     "$320,800"';

    // echo $z;

    $stmt = $pdo->prepare("SELECT 
    DATE_FORMAT(date_created, '%d/%m/%Y %H:%i') as date_created, 
    CONCAT (DATE_FORMAT(date_from, '%d/%m/%Y'),'-',DATE_FORMAT(date_to, '%d/%m/%Y')) as dates_requested, 
    DATEDIFF(date_from,date_to) as days_diff,
    name as status
    FROM application
    inner join status
    ON status.status_id=application.status_id
    WHERE user_id=:user_data_id");

    $stmt->execute([':user_data_id' => $user_data_id ]); 
	
	if ($stmt->rowCount() > 0) {

/* Fetch all of the remaining rows in the result set */

$result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
$z = json_encode($result);
print_r($z);
return $z;
} else {
    return '[]';
}

}

?>