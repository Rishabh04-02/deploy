  <?php
    
    $name1=$_POST['name'];
    $email1=$_POST['email'];
    $message1=$_POST['message'];
    mail("rishabh0402@gmail.com", "Response from website rishabhchaudhary.me - $name1 - $email1", "$message1");
    echo "Your mail has been sent<br>";
 
  ?>