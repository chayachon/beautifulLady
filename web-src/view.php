<?php include "config/helppers.php" ?>
<?php $ladyHelp = new ladyHelp(); ?>

<script type="text/javascript">
    $.post('web-src/config/model.php', {'method': 'product_list'}, function (data) {
        console.log(data);
        document.cookie = "data='" + data + "'; expires=Thu, 18 Dec 2020 12:00:00 GMT";
    });
</script>

<?php $productList = $ladyHelp->convertStringToArray($_COOKIE["data"]); //echo gettype($productList); ?>

<div class="product-list">

    <ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-4">
        <?php foreach ($productList as $model):?>
        <!--?php for ($i = 0; $i < 10; $i++): ?-->
            <li>
                <a href="#"><img src="images/sliderman/Slider4.png"></a>

                <div class="title"><a href=""><?php echo $model->name ?></a></div>

                <div class="description">
                    <?php echo $ladyHelp->getShortDetail($model->smallDetail); ?>
                </div>
            </li>
        <!--?php endfor ?-->
        <?php endforeach ?>
    </ul>
</div>