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

<section class="container">
    <div class="sidebar">
        <div class="sidebar_top"></div>
        <div class="sidebar_item">
            <div class="col-md-7">
                <h2>Choose A Color</h2>
<form id="frmCatalog" action="<?php echo ROOT_URL; ?>product/addCart" method="get" class="form-area" target="color">
    <!--  Heels Image -->
    <main class="container">
        <!--  Heels Image -->
        <div class="left-column">
            <div id="div-red">
                <img data-image="red"src="<?php echo STATIC_URL; ?>images\24.jpg" alt="" width="500" height="600">
            </div>
            <div id="div-blue" style="display: none">
                <img data-image="blue" src="<?php echo STATIC_URL; ?>images\25.jpg" alt=""  width="500" height="600">
            </div>

        <div id="div-maroon" style="display: none">
                <img data-image="maroon" class="active" src="<?php echo STATIC_URL; ?>images\23.jpg" alt="" width="500" height="600">
            </div>

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
                    <span>Color</span>
                    <div class="color-choose">
                        <div>
                            <input data-image="red" type="radio" id="red" onclick="displayRed()" name="red" value="red" checked>
                            <label for="red"><span>red</span></label>
                        </div>
                        <div>
                            <input data-image="blue" type="radio" id="blue" onclick="displayBlue()" name="red" value="blue">
                            <label for="blue"><span>blue</span></label>
                        </div>
                        <div>
                            <input data-image="maroon" type="radio" id="maroon" onclick="displayMaroon()" name="red" value="maroon">
                            <label for="maroon"><span>maroon</span></label>
                        </div>
                        <br>
                        <div class="product-price">

                            <span>R1200 A PAIR</span>
                            <p><input type="submit" value="Add to Cart"></p>
                        </div>

    </main>
 </form>
                <div class="col-md-6">
                    <h2>Shopping Cart</h2>
                    <table class="table">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Color</th>
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
                                    <a href="<?php echo ROOT_URL; ?>product/delete?id=<?php echo $product->id; ?>"><i class="fa fa-trash text-danger fa-spin" ></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                    <div class="text-left"><button type="submit" id="btnCheck" name="submit" class="btn btn-primary btn-lg" required="required">Check-Out</button></div>
            </div>
</div>
</div>
</section>

</body>
</html>
<?php require_once "includes/footer.php" ?>