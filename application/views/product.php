<?php require_once "includes/header.php" ?>
<?php require_once "includes/menu.php" ?>

<html>
<div class="col-md-6">
    <h2>Shopping Cart</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($this->data as $product){
            ?>
            <tr>
                <td><?php echo $product->color; ?></td>
                <td><?php echo $product->price; ?></td>
                <td><?php echo $product->qty; ?></td>
                <td>
                    <a href="<?php echo ROOT_URL; ?>product/checkout?id=<?php echo $product->id; ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    <a href="<?php echo ROOT_URL; ?>product/delete?id=<?php echo $product->id; ?>"><i class="fa fa-trash text-danger fa-spin" ></i></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<body style="background-color: #cccccc">

<section class="container">
    <div class="sidebar">
        <div class="sidebar_top"></div>
        <div class="sidebar_item">
            <div class="col-md-7">
                <h2>Choose A Color</h2>


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
    <form id="frmCart" action="<?php echo ROOT_URL; ?>product/cart" method="post" class="form-area">
    <!--  Heels Image -->
    <div class="left-column">

        <img data-image="maroon" src="<?php echo STATIC_URL; ?>images/23.jpg" style="..." alt="">
        <br>
        <br>
        <img data-image="blue" src="<?php echo STATIC_URL; ?>images/25.jpg" style="..." alt="">
        <br>
        <br>
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
                        <label for="red"><span>Red</span></label>
                        <input type="text" name="qty" placeholder="Quantity" class="form-control" value="1" size="1">
                    </div>
                    <br >
                    <div>
                        <input data-image="blue" type="radio" id="blue" name="color" value="blue">
                        <label for="blue"><span>Blue</span></label>
                        <input type="text" name="qty" placeholder="Quantity" class="form-control" value="1" size="1">
                    </div>
                    <br >
                    <div>
                        <input data-image="maroon" type="radio" id="maroon" name="color" value="maroon">
                        <label for="maroon"><span>Maroon</span></label>
                        <!--<label>Quantity</label> -->
                        <input type="text" name="qty" placeholder="Quantity" class="form-control" value="1" size="1"><br>
                    </div>
                    <div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Product Price -->
        <div class="product-price">
            <span>R1200</span>
            <div> <button type="submit" id="btnCart" name="submit" class="btn btn-primary btn-lg" >Add To Cart</button></div>
        </div>
    </div
 </form>
</div>
</div>
    </div>

</section>
<br>
<br>
<br>
</body>
</html>
<?php require_once "includes/footer.php" ?>