<html>
<body style="background-color: #cccccc">

<section class="container">
    <div class="sidebar">
        <div class="sidebar_top"></div>
        <div class="sidebar_item">
            <div class="col-md-7">
                <h2>Choose A Color</h2>
                <form id="frmCart" action="<?php echo ROOT_URL; ?>product/cart" method="post" class="form-area">

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
        <img data-image="maroon" src="<?php echo STATIC_URL; ?>images/23.jpg" style="..." alt="">
        <img data-image="blue" src="<?php echo STATIC_URL; ?>images/25.jpg" style="..." alt="">
        <img data-image="red" class="active" src="<?php echo STATIC_URL; ?>images/24.jpg" style="..." alt="">
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
                        <input data-image="maroon" type="radio" id="maroon" name="color" value="maroon">
                        <label for="maroon"><span></span></label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Price -->
        <div class="product-price">
            <span>R1200</span>
            <div> <button type="submit" id="btnCart" name="submit" class="btn btn-primary btn-lg" required="required">Add To Cart</button></div>
        </div>
    </div
 </form>
</div>
</div>
    </div>
    <script src="<?php echo STATIC_URL?>https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="<?php echo STATIC_URL?>script.js" charset="utf-8"></script>

</section>

</body>
</html>
