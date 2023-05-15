<!DOCTYPE php>
<php lang="en">
<head>
    <title>Bake With Me</title>
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
    
    <link rel="icon" href="assets/img/logo.png.png" type="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&family=PT+Sans&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Prism&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Crete+Round:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Crete+Round&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<header>
    <div class="banner-holder">
        <nav class="navbar">
            <img src="assets/img/bake-logo.png" class="logo">
            <ul class="nav_links">
                <li><a href="main.php">Home</a></li>
                <li>
                    <a href="Recipes.php">Recipes</a>
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
            </ul>
            <div class="toggle_btn">
                <i class="fa-sharp fa-solid fa-bars"></i>
            </div>
        </div>
        </nav>
</header>
<body>
    <div class="container">
	
        <div class="left">
            
            <div class="img-holder" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-doration="500">
                <img src="assets/RecipesList/Cinnabon.webp" alt="Cinnabon">
            </div>

        </div>
        
        <div class="right" data-aos="fade-up" data-aos-anchor-placement="top-center">
        <table>
            <tbody>
                <div class="header" data-aos="fade-left">
                    <h1>Cinnabon Recipe</h1>
                </div>
                <tr> 
                    <th> Dough: </th>
                    <th> Qty </th>
                </tr>
                <tr>  
                    <td>Warm milk (110 degrees F/45 degrees C)</td>
                    <td>1 cup</td>
                </tr>
                <tr>
                    <td>eggs, room temperature</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>Margarine, melted</td>
                    <td>⅓ cup</td>
                </tr>
                <tr>
                    <td>Bread flour</td>
                    <td>4 ½ cups</td>
                </tr>
                <tr>
                    <td>White sugar</td>
                    <td>1/2 cup</td>
                </tr><tr>
                    <td>Bread machine yeast</td>
                    <td>2 ½ tsp</td>
                </tr>
                <tr> 
                    <th> Filling: </th>
                    <th> Qty </th>
                </tr>
                <tr>
                    <td>Brown sugar, packed</td>
                    <td>1 cup</td>
                </tr>
                <tr>
                    <td>Ground cinnamon</td>
                    <td>2 ½ tbsp</td>
                </tr>
                <tr>
                    <td>Butter, softened</td>
                    <td>⅓ cup</td>
                </tr>
                <tr>
                    <th>Icing:</th>
                    <th> Qty </th>
                </tr>
                <tr>
                    <td>Confectioners' sugar</td>
                    <td>1 ½ cups</td>
                </tr>
                <tr>
                    <td>Butter, softened</td>
                    <td>¼ cup</td>
                </tr>
                <tr>
                    <td>(3 ounce) package cream cheese, softened</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Vanilla extract</td>
                    <td>½ tsp</td>
                </tr>
                <tr>
                    <td>Salt</td>
                    <td>⅛ tsp</td>
                </tr>
                
            </tbody>
    
        </table>
        
    </div>
    <div class="buttom">
        <h2 class="steps-col" data-aos="fade-left">Steps</h2>
        <ol data-aos="fade-up" data-aos-anchor-placement="top-center">
            <li>Prepare dough: Place milk, eggs, margarine, flour, salt, white sugar, and yeast in the pan of a bread machine in the order recommended by the manufacturer. Select dough cycle; press Start.</li>
            <li>When dough has doubled in size, turn it out onto a lightly floured surface. Cover it with a kitchen towel or plastic wrap and let it rest for 10 minutes.</li>
            <li>Roll dough on a lightly floured surface to a 16x21-inch rectangle</li>
            <li>Prepare filling: Combine brown sugar and cinnamon in a small bowl. Spread softened butter over the dough, then sprinkle cinnamon-sugar mixture evenly over top.</li>
            <li>Starting at the longer end, roll up the dough; cut into 12 rolls. Place rolls in a lightly greased 9x13-inch baking pan. Cover and let rise until nearly doubled, about 30 minutes.</li>
            <li>Meanwhile, preheat the oven to 400 degrees F (200 degrees C).</li>
            <li>Bake rolls in the preheated oven until golden brown, about 15 minutes.</li>
            <li>While rolls are baking, prepare icing: Beat confectioners' sugar, butter, cream cheese, confectioners' sugar, vanilla, and salt until creamy.</li>
            <li>Spread icing on warm rolls before serving.</li>
        </ol>
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
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://kit.fontawesome.com/5245bddf71.js" crossorigin="anonymous"></script>
<script>
    AOS.init();

    const toggleBtn = document.getElementsByClassName('toggle_btn')[0]
    const navbarLinks = document.getElementsByClassName('nav_links') [0]

    toggleBtn.addEventListener('click', () => {
        navbarLinks.classList.toggle('active')
    })
</script>
</body>
</php>