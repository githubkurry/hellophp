<html>
<head>
<meta charset="utf-8">
</head>
<body>

<?php
$to = "clariton0627@gmail.com";
$subject = "hello";
$message = "hello";  
$from = "xzgogo1005@gmail.com";   
$headers = "From:" . $from;         
if (isset($_REQUEST['email'])) { 
    $email = $_REQUEST['email'] ;
    $subject = $_REQUEST['subject'] ;
    $message = $_REQUEST['message'] ;
    mail("clariton0627@gmail.com", $subject,
    $message, "From:" . $email);
    echo "success";
} else { 
    echo "<form method='post' action='mailform.php'>
    Email: <input name='email' type='text'><br>
    Subject: <input name='subject' type='text'><br>
    Message:<br>
    <textarea name='message' rows='15' cols='40'>
    </textarea><br>
    <input type='submit'>
    </form>";
}
?>

</body>
</html>