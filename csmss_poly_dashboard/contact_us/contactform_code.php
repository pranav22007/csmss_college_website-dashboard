<?php include '../common/auth.php'; ?>
<?php
include('../common/dbcon.php');

 

// code start 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = mysqli_real_escape_string($conn, $_POST['name']);
    $email   = mysqli_real_escape_string($conn, $_POST['email']);
    $number  = mysqli_real_escape_string($conn, $_POST['number']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO contact_us (name, email, number, subject, message) VALUES ('$name', '$email', '$number', '$subject', '$message')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
            alert('Message sent successfully!');
            setTimeout(function() {
                window.history.back();
            }, 1000);
        </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>