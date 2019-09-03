<html>
<head>
    <title>Beautiful Shoes</title>

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
<div class="col-md-6">
    <h2>Shopping Cart</h2>
    <table class="table" style="color: #000000">
        <thead>
        <tr>
            <th>Color</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $products = $this->data;
        foreach($products as $product){
            ?>
            <tr>
                <td><?php echo $product->color; ?></td>
                <td>price["1200"]</td>
                <td><?php echo $product->qty; ?></td>
                <td>
                    <a href="<?php echo ROOT_URL; ?>product/delete?id=<?php echo $product->id; ?>"><i class="fa fa-trash text-danger fa-spin" ></i></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<p><input type="submit" value="Check-Out"></p>

<section class="container">
    <div class="sidebar">
        <div class="sidebar_top"></div>
        <div class="sidebar_item">
            <div class="col-md-7">
                <h2>Choose A Color</h2>

    <!--  Heels Image -->
    <main class="container">
        <!--  Heels Image -->
        <div class="left-column">
            <div id="div-red">
                <img data-image="red" src="<?php echo STATIC_URL; ?>images\24.jpg" alt="" width="500" height="600">
            </div>
            <div id="div-blue" style="display: none">
                <img data-image="blue" src="<?php echo STATIC_URL; ?>images\25.jpg" alt=""  width="500" height="600">
            </div>
            <div id="div-maroon" style="display: none">
                <img data-image="maroon"  src="<?php echo STATIC_URL; ?>images\23.jpg" alt="" width="500" height="600">
            </div>
        </div>
        <div class="right-column">
            <!--  Heel description -->
            <div class="product-description">
                <h1>For Classy Women</h1>
                <p>The preferred choice for a Woman with Class.</p>
                <p>For the Comfort and Elegance, Comes in all your favourite colors.</p>
            </div>
            <form id="frmCatalog" action="<?php echo ROOT_URL; ?>product/add" method="get" class="form-area" target="Color" >
                <div>
                    <input data-image="red" type="radio" id="red" onclick="displayRed()" name="Color" value="red" checked>
                            <label for="red"><span>red</span></label>
                        </div>
                        <div>
                            <input data-image="blue" type="radio" id="blue" onclick="displayBlue()" name="Color" value="blue">
                            <label for="blue"><span>blue</span></label>
                        </div>
                        <div>
                            <input data-image="maroon" type="radio" id="maroon" onclick="displayMaroon()" name="Color" value="maroon">
                            <label for="maroon"><span>maroon</span></label>
                        </div>
                        <br>
                        <div class="product-price">
                            <span>R1200 A PAIR</span>
                            <p><input type="submit" value="Add to Cart" ></p>
                        </div>
    </main>
 </form>

</div>
</section>

</body>
</html>
<?php require_once "includes/footer.php" ?>