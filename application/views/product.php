<?php require_once "includes/header.php" ?>
<?php require_once "includes/menu.php"?>

<header class="masthead" style="background-image: url('<?php echo STATIC_URL; ?>/img/contact-bg.jpg')">

    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h2>Make the Right Choice</h2>
                </div>
            </div>
        </div>
    </div>
</header>


<body>
<main class="container">
    <!--  Heels Image -->
    <div class="left-column">
        <img data-image="maroon" src="<?php echo STATIC_URL; ?>images/23.jpeg" alt="">
        <img data-image="blue" src="<?php echo STATIC_URL; ?>images/25.jpeg" alt="">
        <img data-image="red" class="active" src="<?php echo STATIC_URL; ?>images/24.jpeg" alt="">
    </div>
    <div class="right-column">
        <!--  Heel description -->
        <div class="product-description">
            <span>Heels</span>
            <h1>For Classy Women</h1>
            <p>The preferred choice for a Classy Walk</p>
        </div>

        <div class="product-configuration">
            <div class="product-color">
                <span>Color</span>

                <div class="color-choose">
                    <div>
                        <input data-image="red" type="radio" id="red" name="color" value="red" checked>
                        <label for="red"><span></span></label>
                    </div>
                    <div>
                        <input data-image="blue" type="radio" id="blue" name="color" value="blue">
                        <label for="blue"><span></span></label>
                    </div>
                    <div>
                        <input data-image="maroon" type="radio" id="maroon" name="color" value="black">
                        <label for="maroon"><span></span></label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Price -->
        <div class="product-price">
            <span>R1200</span>
            <a href="#" class="cart-btn">Add to cart</a>
        </div>
    </div>
</main>
</body>
<?php require_once "includes/footer.php" ?>
