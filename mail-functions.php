<?php 


function sendMailToAdmin($user) {

    $to = "xyz@somedomain.com";
    $subject = "This is subject";
    
    $message ="Dear supervisor, employee ".$user['firstname'].' '.$user['lastname']." requested for some time off, starting on
    {vacation_start} and ending on {vacation_end}, stating the reason:
    {reason}
    Click on one of the below links to approve or reject the application:
    {approve_link} - {reject_link}";
    
    $header = "From:abc@somedomain.com \r\n";
    $header .= "Cc:afgh@somedomain.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    
    $retval = mail ($to,$subject,$message,$header);
    
    if( $retval == true ) {
       echo "Message sent successfully...";
    } else {
       echo "Message could not be sent...";
    }

}


function setAppStatus ($status) {

    if ($status==1)
        $decision ='rejected';
    else
        $decision = 'accepted';


            $to = "xyz@somedomain.com";
            $subject = "This is subject";
            
            $header = "From:info@epignosis.gr \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";

            
        $message = "Dear employee, your supervisor has beeen ".$decision." your application
        submitted on {submission_date.";
            
            $retval = mail ($to,$subject,$message,$header);
            
            if( $retval == true ) {
               echo "Message sent successfully...";
            } else {
               echo "Message could not be sent...";
            }
}
