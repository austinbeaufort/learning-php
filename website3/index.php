<?php 
    // Message vars
    $msg = '';
    $msgClass = '';

    // Check for Submit
    if(filter_has_var(INPUT_POST, 'submit')) {
        // Get Form Data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Check Required Fields
        if(!empty($email) && !empty($name) && !empty($message)) {
            // Passed
            // Check Email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                $msg = 'Please use a valid email';
                $msgClass = 'alert-danger';
            } else {
                // passed
                $toEmail = 'austinbeaufort7@gmail.com';
                $subject = 'Contact Request from '.$name;
                $body = '<h2> Contact Request</h2>
                        <h4>Name</h4><p>'.$name.'</p>
                        <h4>Email</h4><p>'.$email.'</p>
                        <h4>Message</h4><p>'.$message.'</p>
                ';

                // Email Headers
                $headers = "MIME-Version: 1.0" ."\r\n";
                $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
                // Additional Headers
                $headers .= "From: " .$name. "<".$email.">". "\r\n";
                
                if(mail($toEmail, $subject, $body, $headers)) {
                    // Email Sent
                    $msg = 'Your email has been sent';
                    $msgClass = 'alert-success';
                } else {
                    $msg = 'Your email was not sent';
                    $msgClass = 'alert-danger';
                }
            }
        } else {
            // Failed
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
    <title>Contact Us</title>
</head>
<body>
    <nav class="navbar navbar-default  bg-dark">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand text-light">My Website</a>
            </div>
        </div>
    </nav>
    <?php if($msg != ''): ?>
        <div class="alert <?php echo $msgClass; ?>"><?php echo $msg ?></div>
    <?php endif; ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
        </div>
        <div class="form-group">
            <label>Message</label>
            <textarea type="text" name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
        </div>
        <br>
        <button class="btn btn-primary" name="submit" type="submit">Submit</button>
    </form>
</body>
</html>