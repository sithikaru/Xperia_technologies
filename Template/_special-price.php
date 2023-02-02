<!--Special price-->
<?php
shuffle($product_shuffle);

if (isset($_POST['special_price_submit'])) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}
$in_cart = $Cart->getCartId($product->getData('cart'));
?>
<section id="special-price">
    <div class="container">
        <h4 class="font-rubik font-size-20">Special Price</h4>
        <div id="filters" class="button-group text-right">
            <button class="btn is-checked" data-filter="*">All Phones</button>
            <button class="btn is-checked" data-filter=".flagship">
                Flahships
            </button>
            <button class="btn is-checked" data-filter=".midrange">
                Mid-Range
            </button>
            <button class="btn is-checked" data-filter=".lowbudget">
                Low-Budget
            </button>
        </div>
        <div class="grid">
            <?php foreach ($product_shuffle as $item){?>
            <div class="grid-item <?php echo $item['item_type']; ?> border mr-2 px-4" >

                <div class="item " ">
                    <div class="product font-rubik">
                        <a href="product.php?item_id=<?php echo $item['item_id']; ?>" class="tp-a"><img class="tp-img img-fluid py-4" src="./assets/<?php echo $item['item_image']; ?>" style="height: 250px;" alt="product 1" /></a>
                        <div class="text-center p-3">
                            <h6>Sony Xperia <?php echo $item['item_name']; ?></h6>
                            <div class="rating text-warning fontsize-12">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py2">
                                <span><?php echo $item['item_price']; ?> RS.</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id']; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                if (in_array($item['item_id'],$Cart->getCartId($product->getData('cart')) ?? [])){
                                    echo'  <button class="btn btn-success font-size-12" disabled >
                                    In the Cart
                                </button>';
                                }
                                else{
                                    echo' <button class="btn btn-warning font-size-12" name="special_price_submit">
                                    Add to Cart
                                </button>';
                                }
                                ?>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <?php } ?>
        </div>

</section>