<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes</title>

    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Crete+Round&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
        <?php include 'assets/css/style.css';?>
        <?php include 'assets/css/nextpage.css';?>
        <?php include 'assets/css/navbar.css';?>
        <?php include 'assets/css/mediaQueries.css';?>
        <?php include 'assets/css/recipes.css';?>
        <?php include 'assets/css/about.css';?>
        <?php include 'assets/css/footer.css';?>
        <?php include 'assets/css/login.css';?>
        <?php include 'assets/css/contacts.css';?>
    </style>
</head>
<body>
    <header>
        <div class="banner">
            <nav class="navbar ">
                <img src="assets/img/bake-logo.png" class="logo">
                <ul class="nav_links">
                    <li><a href="main.php">Home</a></li>
                    <li>
                        <a class="recipes" href="#">Recipes</a>
                        
                        <div class="dropdown_menu">
                            <ul>
                                <li><a href="ChocolateCookies.php">Cookies</a></li>
                                <li><a href="Blueberry Cheesecake.php">Cheesecake</a></li>
                                <li><a href="Cinnabon.php">Cinnabon</a></li>
                                <li><a href="Brownies.php">Brownies</a></li>
                                <li><a href="Doughnuts.php">Doughnuts</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contacts.php">Contacts</a></li>
                    <li class="login-col"><a  href="login.php">Log In</a></li>
                </ul>
                <div class="toggle_btn">
                    <i class="fa-sharp fa-solid fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>
        <div class="rcontainer">
            <div class="rtitle">
                <h1>Our Menu Recipes</h1>
            </div>
            <div class="sub-container">
                <div class="submeunu">
                    <div class="submeunu-item">
                        <img src="assets/RecipesList/Blueberry_Cheesecake.jfif" alt="">
                        <h2>Blueberry Cheesecake</h2>
                        <button class="btn"><a href="Blueberry Cheesecake.php">Recipe</a></button>
                    </div>
                    <div class="submeunu-item">
                        <img src="assets/RecipesList/Brownies.webp" alt="">
                        <h2>Brownies</h2>
                        <button class="btn"><a href="Brownies.php">Recipe</a></button>
                    </div>
                    <div class="submeunu-item">
                        <img src="assets/RecipesList/Chocolate_cookies.webp" alt="">
                        <h2>Chocolate Cookies</h2>
                        <button class="btn"><a href="ChocolateCookies.php">Recipe</a></button>
                    </div>
                    <div class="submeunu-item">
                        <img src="assets/RecipesList/Cinnabon.webp" alt="">
                        <h2>Cinnabon</h2>
                        <button class="btn"><a href="Cinnabon.php">Recipe</a></button>
                    </div>
                    <div class="submeunu-item">
                        <img src="assets/RecipesList/Doughnuts.jpg" alt="">
                        <h2>Doughnuts</h2>
                        <button class="btn"><a href="Doughnuts.php">Recipe</a></button>
                    </div>
                    <div class="submeunu-item">
                        <img src="assets/RecipesList/lolasempanada-2.jpg" alt="">
                        <h2>Curry Empanadas</h2>
                        <button class="btn"><a href="">Recipe</a></button>
                    </div>
                </div>
            </div>
        </div>  
        <footer class="footer-container">
            <div class="footer-content">
                <h3>Bake With Me</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo iste corrupti doloribus odio sed!</p>
                <ul class="socials">
                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.google.com/"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin-square"></i></a></li>
                </ul>
            </div>
            <div class="footer-bottom">
                <p>copyright &copy;2023 BakeWithMe. designed Jason &amp; Aillen</p>
            </div>
        </footer> 
     

    <script src="https://kit.fontawesome.com/5245bddf71.js" crossorigin="anonymous"></script>
    <script src="assets/js/index.js"></script>
</body>
</php>