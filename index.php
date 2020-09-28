<?php include_once '/opt/lampp/htdocs/first-php/includes/dbh.php'; ?>
<!-- above line sets up $conn variable for later use -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First php website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php 
    echo "<h1>Usernames: </h1><br>";
    $sqlRq = "SELECT username FROM login;";
    $fetched = mysqli_query($conn, $sqlRq);
    $numRows = mysqli_num_rows($fetched);    
    
    if ($numRows > 0 ) {
        while ($row = mysqli_fetch_assoc($fetched)) {
            echo $row['username'];
            echo "<br>";
        }
    }
?>
    <hr>
    <h1 style="text-decoration: underline;">Contact</h1>
    <form id="contactForm" action="contactform.php" method="post">
        <input type="text" name="name" placeholder="First name is fine" required>
        <input type="text" name="email" placeholder="Your email..." required>
        <input type="text" name="subject" placeholder="Subject of mail...">
        <textarea name="message" placeholder="Message"></textarea>
        <button type="submit" name="submit">Send</button>
    </form>
</body>
</html>