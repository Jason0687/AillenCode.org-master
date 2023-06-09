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
        <nav class="navbar"
        data-aos="fade-up"
        data-aos-anchor-placement="top-center"
        data-aos-doration="3000"
        >
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
                <img src="assets/RecipesList/Doughnuts.jpg" alt="Doughnuts">
            </div>

        </div>
        
        <div class="right" data-aos="fade-up" data-aos-anchor-placement="top-center">
        <table>
            <tbody>
                <div class="header" data-aos="fade-left">
                    <h1>Doughnuts Recipe</h1>
                </div>
                <tr> 
                    <th> Name </th>
                    <th> Qty </th>
                </tr>
                <tr>  
                    <td>Butter</td>
                    <td>4 tbsp (57g)</td>
                </tr>
                <tr>
                    <td>Vegetable oil</td>
                    <td>1/4 cup (50g)</td>
                </tr>
                <tr>
                    <td>Granulated sugar</td>
                    <td>1/2 cup (99g)</td>
                </tr>
                <tr>
                    <td>Light brown sugar or dark brown sugar, packed</td>
                    <td>1/3 cup (71g)</td>
                </tr>
                <tr>
                    <td>Eggs</td>
                    <td>2 large</td>
                </tr>
                <tr>
                    <td>Baking powder</td>
                    <td>1 1/2 tsp</td>
                </tr>
                <tr>
                    <td>Baking soda</td>
                    <td>1/4 tsp</td>
                </tr>
                <tr>
                    <td>Nutmeg, to taste</td>
                    <td>1/2 to 1 tsp</td>
                </tr>
                <tr>
                    <td>Salt</td>
                    <td>3/4 tsp</td>
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
                <tr>
                    <td>King Arthur Pure Vanilla Extract</td>
                    <td>1 tsp</td>
                </tr>
                <tr>
                    <td>King Arthur Unbleached All-Purpose Flour</td>
                    <td>2 2/3 cups (320g)</td>
                </tr>
                <tr>
                    <td>Milk</td>
                    <td>1 cup (227g)</td>
                </tr>                
            </tbody>
        </table>
                
        </div>
        <div class="buttom">
            <h2 class="steps-col" data-aos="fade-left"  >Steps</h2>
                    <ol data-aos="fade-up" data-aos-anchor-placement="top-center">
                        <li>Preheat the oven to 425°F. Lightly grease two standard doughnut pans.</li>
                        <li>In a medium-sized mixing bowl, beat together the butter, vegetable oil, and sugars until smooth.</li>
                        <li>Add the eggs, beating to combine.</li>
                        <li>Stir in the baking powder, baking soda, nutmeg, salt, and vanilla.</li>
                        <li>Stir the flour into the butter mixture alternately with the milk, beginning and ending with the flour and making sure everything is thoroughly combined. The batter will be fairly thick; when you draw your spatula through the batter, it will leave a furrow.</li>
                        <li>Spoon the batter into the lightly greased doughnut pans, filling the wells to about 1/4" shy of the rim.</li>
                        <li>Bake the doughnuts for 10 minutes. Remove them from the oven, and wait 5 to 7 minutes before turning them out of the pans onto a rack.</li>
                        <li>For cinnamon doughnuts, shake warm doughnuts in a plastic bag with about 1/4 (50g) to 1/3 cup (68g) cinnamon sugar. For sugar-coated doughnuts, shake doughnuts in a plastic bag with about 1/2 cup (57g) non-melting topping sugar (for best results), or confectioners' sugar.</li>
                        <li>For frosted doughnuts, see our three easy doughnut glazes. Sprinkle the glazed doughnuts with toasted coconut or chopped nuts, if desired.</li>
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
</div> 
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