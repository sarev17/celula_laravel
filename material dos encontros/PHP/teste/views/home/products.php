<link rel="stylesheet" href="../public/css/products.css">
<?php include '../views/partials/header.php'?>
<section class="cards-products">
        <?php
            foreach($result as $r){
                echo '
                <div class="card-product">
                <picture><img src="'.$r->image.'" alt=""></picture>
                <div class="description">
                    <span class="price">R$ '.number_format($r->price,2,',','.').' &#x25cf Promoção</span>
                    <span class="title">'.$r->name.'</span>
                    <div class="icons">
                        <span class="liked"><i class="fa-regular fa-heart"></i> '.$r->likes.'</span>
                        <span class="purchased"><i class="fa-solid fa-cart-shopping"></i> '.$r->purchases.'</span>
                        <span><i class="fa-solid fa-motorcycle"></i> '.$r->time_delivery.' min</span>
                    </div>
                </div>
                <a>Comprar Agora</a>
            </div>
                ';
            }
        ?>
    </section>

    <?php include '../views/partials/footer.php'?>