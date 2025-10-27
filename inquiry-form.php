
<?php
// Database connection
$host = "localhost";   // Change if needed
$user = "root";        // Change if you set another MySQL user
$pass = "";            // Change if password is set
$db = "csmss";       // Database name (from your .sql file)

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data when form is submitted
if (isset($_POST['Submit-Enquiry'])) {
    $fullname = $_POST['Full-Name'];
    $email = $_POST['Email-Address'];
    $phone = $_POST['Phone-Number'];
    $city = $_POST['City'];
    $qualification = $_POST['Qualification'];
    $course = $_POST['Course-Interested'];
    $additional = $_POST['Additional_Info_Optional'] ?? '';

    // Prepare SQL query
    $sql = "INSERT INTO enquiry_form (fullname, email, phone, city, qualification, course_interested, additional_info) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $fullname, $email, $phone, $city, $qualification, $course, $additional);

    if ($stmt->execute()) {
        echo "<script>alert('Enquiry submitted successfully!');            window.location.href='" . $_SERVER['PHP_SELF'] . "'; 
</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    $stmt->close();
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from live.themewild.com/eduka/academic-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jul 2025 10:30:27 GMT -->

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">






    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .custom-icon-box {
            background-color: #1e1e1e;
            /* dark background */
            color: #ffa600;
            /* orange icon */
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: start;
            font-size: 24px;
            border-radius: 30px;
            border-bottom-right-radius: 0;
            /* flat bottom-right corner */
            box-shadow: 0 0 10px rgba(255, 165, 0, 0.3);
            /* soft glow */
        }


        body,
        html {
            height: 100%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .slideshow {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .slideshow div {
            position: absolute;
            height: 100%;
            width: 100%;
            background-size: cover;
            background-position: center;
            animation: fade 15s infinite;
            opacity: 0;
        }

        .enquiry-form {
            max-width: 600px;
            background-color: rgba(22, 27, 34, 0.95);
            /* 85% opacity */
            color: #fff;
            padding: 50px 40px;
            border-radius: 50px;
            border-bottom-right-radius: 0;
            border-top-left-radius: 0;
            margin: 80px auto;
            box-shadow: 0 0 25px rgba(255, 165, 0, 0.15);
        }

        .enquiry-form h3 {
            font-size: 28px;
            font-weight: 700;
            text-align: center;
            background-color: #1e1e1e;
            /* 85% opacity */

            color: #f48a19;
            padding: 10px 20px;
            border-radius: 25px;
            border-bottom-right-radius: 0;
            border-top-left-radius: 0;
            box-shadow: 0 0 10px rgba(255, 165, 0, 0.1);
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .input-group-text {
            background-color: #222;
            color: #ffa600;
            border: 1px solid #444;
            border-radius: 25px 0 0 25px;
            border-bottom-right-radius: 0;
            border-top-left-radius: 0;
            padding: 10px 15px;
            font-size: 16px;
        }

        .form-control {
            background-color: #1e1e1e;
            color: #fff;
            border: 1px solid #444;
            padding: 12px 14px;
            border-radius: 0 25px 25px 0;
            border-bottom-right-radius: 0;
            border-top-left-radius: 0;
            transition: 0.3s ease;
        }

        .form-control:focus {
            box-shadow: 0 0 10px #F48A19;
            border-color: #F48A19;
            background-color: #292929;
        }

        .form-control::placeholder {
            color: #aaa;
        }

        textarea.form-control {
            border-radius: 0 25px 25px 0;
            border-bottom-right-radius: 0;

        }

        .btn-submit {
            background: linear-gradient(135deg, #f48a19, #ff9900);
            color: white;
            font-weight: 600;
            font-size: 18px;
            border: none;
            padding: 12px 20px;
            width: 40%;
            border-radius: 25px;
            border-bottom-right-radius: 0;
            border-top-left-radius: 0;
            transition: all 0.3s ease;
            box-shadow: 0 0 15px rgba(255, 165, 0, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-left: 160px;

        }

        @media screen and (max-width: 426px) {
            .btn-submit {
                background: linear-gradient(135deg, #f48a19, #ff9900);
                color: white;
                font-weight: 600;
                font-size: 16px;
                border: none;
                padding: 12px 20px;
                width: 100%;
                border-radius: 25px;
                border-bottom-right-radius: 0;
                border-top-left-radius: 0;
                transition: all 0.3s ease;
                box-shadow: 0 0 15px rgba(255, 165, 0, 0.4);
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
                margin-left: auto;
                margin-right: auto;
            }
        }

        .btn-submit i {
            font-size: 18px;
        }

        .btn-submit:hover {
            background: linear-gradient(135deg, #e07a0d, #cc6c00);
            transform: translateY(-2px);
            box-shadow: 0 0 20px rgba(255, 153, 0, 0.5);
        }

        p.text-muted {
            text-align: center;
            color: #ccc !important;
            font-size: 14px;
            margin-bottom: 30px;
        }

        .input-group-text {
            background-color: #222;
            color: #ffa600;
            border: 1px solid #444;
            border-radius: 25px;
            border-bottom-right-radius: 0;
            /* only bottom-right is 0 */
            border-top-left-radius: 0;
            /* only bottom-right is 0 */
            padding: 10px 15px;
            font-size: 16px;
            box-shadow: 0 0 5px rgba(255, 165, 0, 0.2);
        }

        .slideshow div:nth-child(1) {
            background-image: url('assets/img/form-img/14.jpeg');
            animation-delay: 0s;
        }

        .slideshow div:nth-child(2) {
            background-image: url('assets/img/form-img/16.jpeg');
            animation-delay: 5s;
        }

        .slideshow div:nth-child(3) {
            background-image: url('assets/img/form-img/14.jpeg');
            animation-delay: 10s;
        }

        /* Ensure white text while typing */
        input.form-control,
        textarea.form-control,
        select.form-control {
            color: black !important;
        }

        /* Override browser autofill yellow background (for Chrome) */
        input:-webkit-autofill,
        textarea:-webkit-autofill {
            -webkit-box-shadow: 0 0 0 1000px #1e1e1e inset !important;
            -webkit-text-fill-color: black !important;
            transition: background-color 5000s ease-in-out 0s;
        }


        @keyframes fade {
            0% {
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            30% {
                opacity: 1;
            }

            40% {
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
        }

        .enquiry-form {
            position: relative;
            /* REQUIRED for button positioning */
            /* other existing styles */
        }

        .close-btn {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 26px;
            color: #f48a19;
            background: transparent;
            border: none;
            cursor: pointer;
            transition: 0.3s;
            z-index: 99;
        }

        .close-btn:hover {
            color: #fff;
            transform: scale(1.3);
        }


        .close-btn:hover {
            color: #fff;
            transform: scale(1.2);
        }
    </style>



<body>
    <!-- Slideshow Background -->
    <div class="slideshow">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="enquiry-form-main">
        <div class="enquiry-form">
            <a href="index.php" class="close-btn"
                onclick="document.querySelector('.enquiry-form').style.display='none'">
                &times;
            </a>


            <h3>🎓 Enquire Now</h3>
            <p class="text-muted">Fields marked with * are mandatory.</p>

            <form action="" method="POST">

                <div class="form-group input-group">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                    <input type="text" name="Full-Name" class="form-control" placeholder="Full Name *" required>
                </div>

                <div class="form-group input-group">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    <input type="email" name="Email-Address" class="form-control" placeholder="Email Address *"
                        required>
                </div>

                <div class="form-group input-group">
                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    <input type="tel" name="Phone-Number" id="phone" class="form-control" placeholder="Phone Number *"
                        pattern="[0-9]{10}" required>
                </div>

                <div class="form-group input-group">
                    <span class="input-group-text"><i class="fa fa-city"></i></span>
                    <input type="text" name="City" class="form-control" placeholder="City">
                </div>

                <div class="form-group input-group">
                    <span class="input-group-text"><i class="fa fa-user-graduate"></i></span>
                    <input type="text" name="Qualification" class="form-control" placeholder="Qualification *" required>
                </div>

                <div class="form-group input-group">
                    <span class="input-group-text"><i class="fa fa-book-open"></i></span>
                    <input type="text" name="Course-Interested" class="form-control" placeholder="Course Interested *"
                        required>
                </div>

                <div class="form-group input-group">
                    <span class="input-group-text"><i class="fa fa-comment-dots"></i></span>
                    <textarea class="form-control" name="Additional_Info_Optional"
                        placeholder="Additional Info (Optional)" rows="3"></textarea>
                </div>

                <button type="submit" name="Submit-Enquiry" class="btn btn-submit">
                    <i class="fa fa-paper-plane"></i> Submit Enquiry
                </button>
            </form>

        </div>
    </div>


    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbxyM_CCibhHkOARebRW1SOHWcItgFBMkcphC7s3MTTzrp9DBFgwqUHDo5wWen4ElL99/exec';
        const form = document.forms['google-sheet'];

        form.addEventListener('submit', e => {
            e.preventDefault();
            fetch(scriptURL, { method: 'POST', body: new FormData(form) })
                .then(response => {
                    alert("Thanks for Contacting us..! We Will Contact You Soon...");
                    form.reset(); // clear form after submission
                })
                .catch(error => console.error('Error!', error.message));
        });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>


<!-- Mirrored from live.themewild.com/eduka/academic-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jul 2025 10:30:32 GMT -->

</html>