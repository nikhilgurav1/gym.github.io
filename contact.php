<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/contact.css" type="text/css">
    <title>Contact</title>

</head>
<body>

    <div class="form">
        <form action="addcontact.php" method="POST">
            <legend style="--clr:#0cdb39;" data-text="Share With Us"></legend>
            <input type="text" name="fname" placeholder="Enter Your Name">
            <input type="email" name="email" placeholder="E-mail">
            <input type="phone" name="phone" placeholder="Phone">
            <input type="textarea" name="msg" placeholder="Type Your Massege Here....">
        <button type="submit" name="submit" style="--clr:#0cdb39;" data-text="Submit">Submit</button>
    </form>
    </div>
    
</body>
</html>