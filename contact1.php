
<?php
if(isset($_POST['submit'])){
    $to = "sanjivanimore315@gmail.com";

    $name = $_POST['name'];
    $email= $_POST['email'];
    $subject=$_POST['subject']
    $message= $_POST['message'];
    $headers = 'From: '.$email . "\r\n";


    $body = "Name : ".$name. "\r\n" .
        "Email : ".$email. "\r\n" .
        "Subject : ".$subject. "\r\n" .
        "Message : ".$message. "".;
    if(mail($to, $name, $subject, $message , $headers)){
        echo '<script>alert("Email sent successfully ! We will contact you soon.")</script>';
        echo '<script>window.location.href="contact-us.html"</script>';
    }else{
         echo '<script>alert("Failed to send Email !")</script>';
         echo '<script>window.location.href="contact-us.html"</script>';
    }
}

?>