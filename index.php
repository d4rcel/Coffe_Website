<?php

$db_name = 'mysql:host=localhost;dbname=coffe_db';
$username = 'root';
$password = '';

$conn = new PDO($db_name, $username, $password);

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $number = $_POST['number'];
    $number = filter_var($number, FILTER_SANITIZE_STRING);
    $guests = $_POST['guests'];
    $guests = filter_var($guests, FILTER_SANITIZE_STRING);

    $select_contact = $conn -> prepare("SELECT * FROM `contact_form` WHERE name = ? AND number = ? AND guests = ?");
    $select_contact->execute([$name, $number, $guests]);
    if($select_contact->rowCount() > 0){
        $message[] = 'Message sent already!';
    }else{
        $insert_contact = $conn->prepare("INSERT INTO `contact_form` (name, number, guests) VALUES(?,?,?)");
        $insert_contact->execute([$name, $number, $guests]);
        $message[] = 'Message sent successfully!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Coffe Website</title>
</head>
<body>
    
<?php

if(isset($message)){
    foreach($message as $message){
        echo '<div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick = "this.parentElement.remove();"></i>
        </div>';
    }
}

?>
    <!-- header section starts -->
    <header class="header">

        <section class="flex">
            <a href="#home" class="logo"><img src="images/logo.png" alt=""></a>
            <nav class="navbar">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#menu">Menu</a>
                <a href="#gallery">Gallery</a>
                <a href="#team">Team</a>
                <a href="#contact">Contact</a>
            </nav>
            <div id="menu-btn" class="fas fa-bars"></div>
        </section>
        
    </header>
    <!-- header section ends -->

    <!-- home section starts -->
    <div class="home-bg">

        <section class="home" id="home">
            <div class="content">
                <h3>Coffee Heaven</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Facilis atque maiores perferendsis impedit incidunt minima.</p>
                     <a href="#about" class="btn">About us</a>
            </div>
        </section>

    </div>
    <!-- home section ends -->

    <!-- About section starts -->

    <section class="about" id="about">

        <div class="image">
            <img src="images/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3> A cup of coffe can complete your day</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus corporis,
                 voluptate adipisci aut natus tempore architecto eos voluptas consectetur voluptatem.
                  Inventore, ipsum. Aliquam eos quia labore praesentium molestiae..</p>
            <a href="#menu" class="btn">Our menu</a>
        </div>
    </section>
    <!-- About section ends -->

    <!-- Facility section stats -->

    <section class="facility">

        <div class="heading">
            <img src="images/heading-img.png" alt="">
            <h3>Our facility</h3>
        </div>

        <div class="box-container">

            <div class="box">
                <img src="images/icon-1.png" alt="">
                <h3>Varieties of coffees</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia!</p>
            </div>

            <div class="box">
                <img src="images/icon-2.png" alt="">
                <h3>Coffe beans</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia!</p>
            </div>

            <div class="box">
                <img src="images/icon-3.png" alt="">
                <h3>Breakfast and Sweets</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia!</p>
            </div>

            <div class="box">
                <img src="images/icon-4.png" alt="">
                <h3>Read to coffee </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia!</p>
            </div>
        </div>
    </section>

    <!-- Facility section ends -->
    
    <!-- Menu section starts -->

    <section class="menu" id="menu">

        <div class="heading">
            <img src="images/heading-img.png" alt="">
            <h3>Popular menu</h3>
        </div>

        <div class="box-container">

            <div class="box">
                <img src="images/menu-1.png" alt="">
                <h3>Love your coffe</h3>
            </div>

            <div class="box">
                <img src="images/menu-2.png" alt="">
                <h3>Cappucino</h3>
            </div>

            <div class="box">
                <img src="images/menu-3.png" alt="">
                <h3>Mocha coffe</h3>
            </div>

            <div class="box">
                <img src="images/menu-4.png" alt="">
                <h3>Frappucino</h3>
            </div>

            <div class="box">
                <img src="images/menu-5.png" alt="">
                <h3>Black coffe</h3>
            </div>

            <div class="box">
                <img src="images/menu-6.png" alt="">
                <h3>Love heart coffe</h3>
            </div>
        </div>
    </section>

    <!-- Menu section ends -->

    <!-- Gallery section starts -->

    <section class="gallery" id="gallery">

        <div class="heading">
            <img src="images/heading-img.png" alt="">
            <h3>Our gallery</h3>
        </div>

        <div class="box-container">
            <img src="images/gallery-1.webp" alt="">
            <img src="images/gallery-2.webp" alt="">
            <img src="images/gallery-3.webp" alt="">
            <img src="images/gallery-4.webp" alt="">
            <img src="images/gallery-5.webp" alt="">
            <img src="images/gallery-6.webp" alt="">
        </div>

    </section>

    <!-- Gallery section ends -->

    <!-- Team section starts -->

    <section class="team" id="team">

        <div class="heading">
            <img src="images/heading-img.png" alt="">
            <h3>Our team</h3>
        </div>

        <div class="box-container">

            <div class="box">
                <img src="images/our-team-1.jpg" alt="">
                <h3>John Doe</h3>
            </div>

            <div class="box">
                <img src="images/our-team-2.jpg" alt="">
                <h3>John Doe</h3>
            </div>

            <div class="box">
                <img src="images/our-team-3.jpg" alt="">
                <h3>John Doe</h3>
            </div>

            <div class="box">
                <img src="images/our-team-4.jpg" alt="">
                <h3>John Doe</h3>
            </div>

            <div class="box">
                <img src="images/our-team-5.jpg" alt="">
                <h3>John Doe</h3>
            </div>

            <div class="box">
                <img src="images/our-team-6.jpg" alt="">
                <h3>John Doe</h3>
            </div>
            
        </div>
    </section>

    <!-- Team section ends -->

    <!-- Contact section starts -->

    <section class="contact" id="contact">

        <div class="heading">
            <img src="images/heading-img.png" alt="">
            <h3>Contact us</h3>
        </div>

        <div class="row">

            <div class="image">
                <img src="images/contact-img.svg" alt="">
            </div>

            <form action="" method="post">
                <h3>book a table</h3>
                
                <input type="text" name="name" class="box" required maxlength="20" 
                 placeholder="Enter your name">

                <input type="number" name="number" class="box box-number" required maxlength="20"
                 placeholder="Enter your number" min="0" max="999999999" >

                <input type="number" name="guests" class="box box-guests" required maxlength="20"
                 placeholder="How many guests" min="0" max="99">

                <input type="submit" name="send" value="Send message" class="btn">
            </form>
        </div>

    </section>

    <!-- Contact section endss -->

    <!-- Footer section starts -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>Our mail</h3>
                <p>coffeebar@drink.com</p>
                <p>coffeebar@drink.com</p>
            </div>

            <div class="box">
                <i class="fas fa-clock"></i>
                <h3>Openings hours</h3>
                <p>07:00am to 09:00pm</p>
            </div>

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Shop location</h3>
                <p>Cotonou, Bénin - 400104</p>
            </div>

            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>Our number</h3>
                <p>+09958-212-785</p>
                <p>+09958-212-786</p>
            </div>
        </div>

        <div class="credit">&copy; copyright @ 2022 by <span>Mr coffe love</span> | all
        rights reserved!</div>
    </section>

    <!-- Footer section ends -->
    <script src="js/app.js" ></script>
</body>
</html>