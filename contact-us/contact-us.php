<?php
date_default_timezone_set("Asia/Jakarta");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="../Sayuran-UTS/favicon/favicon.ico">
    <link rel="stylesheet" href="https://i.icomoon.io/public/temp/cf8da1bf21/UntitledProject/style.css">
    <title>Contact Us</title>
</head>
<body>
    <div class="container-navbar">
        <div class="navbar"><a href="../index.html">
                <img src="../Sayuran-UTS\Logo\Logo.png" alt="">
            </a>
            <div class="nav-list">
                <ul>
                    <li><a href="../index.html" class="link-item"><i class="icon-Home"></i></i>Home</a></li>
                    <li><a href="../card-product/products.html" class="link-item"><i class="icon-Box"></i>Product</a></li>
                    <li><a href="../About-us/about-us.html" class="link-item"><i class="icon-Seeding"></i>About Us</a></li>
                    <li><a href="../meet-author/meet.html" class="link-item"><i class="icon-Users"></i>Meet the Authors</a></li>
                    <li><a href="../contact-us/contact-us.php"><button>Contact Us</button></a></li>
                </ul>
            </div>      
        </div>
    </div>

    <div class="contactus-container">
            <div class="leftcontent">
                <img src="Sayuran-UTS\Contact-us/Img-banner contact us.svg" alt="" class="responsive">
            </div>
            <div class="rightcontent">
                <form action="submit.php" method="post">
                    <h1>Stay healty with sayuran</h1>
                    <h3>Your Name</h3>
                    <input type="text" name="name" placeholder="example: Angga Aditya">
                    <h3>Your Email</h3>
                    <input type="email" name="email" placeholder="example: sayuran@mail.com">
                    <h3>Tell us what your need?</h3>
                    <textarea cols="30" rows="10" name="message" placeholder="Message"></textarea>
                    <button type="submit" name="submit" value=<?php echo date ("h:i:sa") ?> >Contact Us </button>
                </form>
            </div>
    </div>

    <!-- <script>
        function myAlert(){
            let myAlert = confirm("Are you sure ?");
            if(myAlert){
                alert("Pesan Terkirim");
            } else {
                alert("Pesan gagal")
            }   
        }
    </script> -->
</body>