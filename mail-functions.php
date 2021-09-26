<?php
include_once  'config.php';

if (isset($_GET['status'])) {

    $status = $_GET['status'];
    $app_id = $_GET['application_id'];
    $date = $_GET['date'];
    $email = $_GET['email'];
    setAppStatus($status, $app_id, $email, $date, $pdo);
}


function sendMailToAdmin($user, $date_from, $date_to, $reason, $app_id, $submit_date)
{

    $to = "info@epignosis.gr";
    $subject = "Holiday Request";

    $message = "Dear supervisor, employee " . $user['first_name'] . ' ' . $user['last_name'] . " requested for some time off, starting on 
    " . $date_from . " and ending on " . $date_to . ", stating the reason:'<strong>" . $reason . "</strong>'<br/>
    Click on one of the below links to approve or reject the application:<br/>
    <a href='http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] . "/mail-functions.php?status=approve&application_id=" . $app_id . "&date=" . $submit_date . "&email=" . $user['email'] . "'><strong>Aprrove</strong></a><br/>
    <a href='http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] . "/mail-functions.php?status=decline&application_id=" . $app_id . "&date=" . $submit_date . "&email=" . $user['email'] . "'><strong>Reject</strong></a>";


    $header = "From:abc@somedomain.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    $retval = mail($to, $subject, $message, $header);

    // if ($retval == true) {
    //     echo "Message sent successfully...";
    // } else {
    //     echo "Message could not be sent...";
    // }
}


function setAppStatus($status, $app_id, $email, $date, $pdo)
{

    $status_id = '';

    if ($status == 'approved')
        $status_id = 2;
    else
        $status_id = 3;

    $sql = 'UPDATE application set status_id=:status_id where application_id=:app_id';
    //.$_SESSION['edit']['user_data_id'];


    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':app_id' => $app_id,
        ':status_id' => $status_id,
    ]);


    $to = $email;
    $subject = "Application Status Updated";

    $header = "From:info@epignosis.gr \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";


    $message = "Dear employee, your supervisor has " . $status . " your application
        submitted on " . $date;


    $retval = mail($to, $subject, $message, $header);

    $_SESSION['mail-sent'] = $retval;

    header("Location: users-dashboard.php");
}
