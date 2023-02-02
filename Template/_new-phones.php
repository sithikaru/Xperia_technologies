<!--New Phones-->
<?php
shuffle($product_shuffle);

if (isset($_POST['new_phones_submit'])) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}
?>
<section id="new-phones">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">New Phones</h4>
        <hr />

        <!--New Phone Owl Carousel-->
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item){?>
                <div class="item py-2 px-3">
                    <div class="product font-rubik">
                        <a href="product.php?item_id=<?php echo $item['item_id']; ?>" class="tp-a"><img class=" img-fluidtp-img py-4" src="./assets/<?php echo $item['item_image']; ?>" alt="product 1"
                                                      style="height: 300px"   /></a>
                        <div class="text-center">
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
                                    echo' <button class="btn btn-warning font-size-12" name="new_phone_submit">
                                    Add to Cart
                                </button>';
                                }
                                ?>

                            </form>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</section>