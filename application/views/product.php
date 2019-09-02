<<<<<<< HEAD
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
=======
<html>
<head>
    <title>Beautiful Shoes</title>
>>>>>>> fad7297bef395cd7b3b66d3023dd2d2347f2693e

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
</head>
<body style="background-color: #cccccc">

<<<<<<< HEAD
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
=======
<section class="container">
    <div class="sidebar">
        <div class="sidebar_top"></div>
        <div class="sidebar_item">
            <div class="col-md-7">
                <h2>Choose A Color</h2>
<form id="frmCatalog" action="<?php echo ROOT_URL; ?>product/addCart" method="post" class="form-area">
    <!--  Heels Image -->
    <div class="left-column">
        <img data-image="maroon" src="<?php echo STATIC_URL; ?>images/23.jpg" style="...">
        <img data-image="blue" src="<?php echo STATIC_URL; ?>images/25.jpg" style="...">
        <img data-image="red" src="<?php echo STATIC_URL; ?>images/24.jpg" style="...">
>>>>>>> fad7297bef395cd7b3b66d3023dd2d2347f2693e
    </div>
    <div class="right-column">
        <!--  Heel description -->
        <div class="product-description">
            <h1>For Classy Women</h1>
            <p>The preferred choice for a Woman with Class.</p>
            <p>For the Comfort and Elegance, Comes in all your favourite colors.</p>
        </div>
        <div class="product-configuration">
            <div class="product-color">
                <h1>Color</h1>
                <div class="color-choose">
<<<<<<< HEAD
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
=======
                    <input class="magic-radio" type="radio" name="radio" id="Maroon" value="option">
                    <label for="maroon">
                        <p style="color:#721c24;">Maroon</p>
                    </label>
                    <input class="magic-radio" type="radio" name="radio" id="Blue" value="option">
                    <label for="Blue">
                        <p style="color:#1a2772;">Blue</p>
                    </label>
                    <input class="magic-radio" type="radio" name="radio" id="Red" value="option">
                    <label for="Red">
                        <p style="color:red;">Red</p>
                    </label>
>>>>>>> fad7297bef395cd7b3b66d3023dd2d2347f2693e
                </div>
            </div>
        </div>
        <!-- Product Price -->
        <div class="product-price">
            <span>R1200</span>
<<<<<<< HEAD
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
=======
            <div> <button type="submit" id="btnCart" name="submit" class="btn btn-primary btn-lg" required="required">Add To Cart</button></div>
        </div>
    </div
 </form>
                <div class="col-md-6">
                    <h2>Shopping Cart</h2>
                    <table class="table">
                        <thead>
                        <tr>
                            <th></th>
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
                                <td><?php echo $product->name; ?></td>
                                <td><?php echo $product->price; ?></td>
                                <td><?php echo $product->qty; ?></td>
                                <td>
                                    <a href="<?php echo ROOT_URL; ?>product/delete?id=<?php echo $product->id; ?>"><i class="fa fa-trash text-danger fa-spin" ></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            <div class="col-md-4 col-md-offset-1">
                <h2>Cart Details</h2>
                <form id="frmCart" action="<?php echo ROOT_URL; ?>product/add" method="post" class="form-area contact-form ">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="price" id="price" placeholder="Price" onKeyUp="number(this);" data-rule="minlen:2" data-msg="price" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="qty" id="gender" placeholder="How many pairs you want?" data-rule="minlen:4" data-msg="How many pair??"/>
                        <div class="validation"></div>
                    </div>
                    <div class="text-left"><button type="submit" id="btnCheck" name="submit" class="btn btn-primary btn-lg" required="required">Check-Out</button></div>
                </form>
            </div>
</div>
</div>
    </div>
</section>

</body>
</html>
>>>>>>> fad7297bef395cd7b3b66d3023dd2d2347f2693e
