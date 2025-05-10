<?php require "includes/header.php"; ?>
<?php require "config/config.php"; ?>
<?php
//categories
$categories = $conn->query('SELECT * FROM categories ');
$categories->execute();
$allcategories = $categories->fetchAll(PDO::FETCH_OBJ);

//most want prod
$mostProducts = $conn->query('SELECT * FROM products    WHERE status = 1');
$mostProducts->execute();
$allMostProducts = $mostProducts->fetchAll(PDO::FETCH_OBJ);

//vigies
$vigies = $conn->query('SELECT * FROM products    WHERE status = 1 AND category_id=1');
$vigies->execute();
$allVigies = $vigies->fetchAll(PDO::FETCH_OBJ);


//meats
$meats = $conn->query(query: 'SELECT * FROM products    WHERE status = 1 AND category_id=2');
$meats->execute();
$allMeats = $meats->fetchAll(PDO::FETCH_OBJ);

//fishes
$fishes = $conn->query(query: 'SELECT * FROM products    WHERE status = 1 AND category_id=5');
$fishes->execute();
$allFishes = $fishes->fetchAll(PDO::FETCH_OBJ);

//fruits
$fruits = $conn->query(query: 'SELECT * FROM products    WHERE status = 1 AND category_id=5');
$fruits->execute();
$allFruits = $fruits->fetchAll(PDO::FETCH_OBJ);



?>
<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
            <div class="container">
                <h1 class="pt-5">
                    Shopping Page
                </h1>
                <p class="lead">
                    Save time and leave the groceries to us.
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shop-categories owl-carousel mt-5">
                    <?php foreach ($allcategories as $category) : ?>
                        <div class="item">
                            <a href="shop.html">
                                <div class="media d-flex align-items-center justify-content-center">
                                    <span class="d-flex mr-2"><i class="sb-<?php echo htmlspecialchars($category->icon ?? 'default-icon'); ?>"></i></span>
                                    <div class="media-body">
                                        <h5><?php echo htmlspecialchars($category->name); ?></h5>
                                        <p><?php echo substr($category->description, 1, 50); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <section id="most-wanted">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Most Wanted</h2>
                    <div class="product-carousel owl-carousel">
                        <?php foreach ($allMostProducts as $allMostProduct) : ?>
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">SPECIAL</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-default">

                                                <?php echo $allMostProduct->exp_date;  ?>
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="assets/img/<?php echo $allMostProduct->image ?>" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="detail-product.html"><?php echo $allMostProduct->title; ?></a>
                                        </h4>
                                        <div class="card-price">
                                            <!-- <span class="discount">Rp. 300.000</span> -->
                                            <span class="reguler">$ <?php echo $allMostProduct->price; ?></span>
                                        </div>
                                        <a href="products/detail-product.php" class="btn btn-block btn-primary">
                                            Add to Cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach  ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="vegetables" class="gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Vegetables</h2>
                    <div class="product-carousel owl-carousel">
                        <?php foreach ($allVigies as $allVigi) : ?>
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">SPECIAL</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-default">
                                                <?php echo $allVigi->exp_date; ?>
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="assets/img/<?php echo $allVigi->image; ?>" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="products/detail-product.php"> <?php echo $allVigi->title; ?></a>
                                        </h4>
                                        <div class="card-price">
                                            <!-- <span class="discount">Rp. 300.000</span> -->
                                            <span class="reguler"> $<?php echo $allVigi->price; ?></span>
                                        </div>
                                        <a href="<?php echo APPURL; ?>products/detail-product.php?id=<?php echo $allVigi->id; ?>" class="btn btn-block btn-primary">
                                            Add to Cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach  ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="meats">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Meats</h2>
                    <div class="product-carousel owl-carousel">
                        <?php foreach ($allMeats as $allMeat) : ?>

                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">SPECIAL</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-default">
                                                <?php echo $allMeat->exp_date; ?>
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="assets/img/<?php echo $allMeat->image; ?>" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="products/detail-product.php"><?php echo $allMeat->title; ?></a>
                                        </h4>
                                        <div class="card-price">
                                            <!-- <span class="discount">Rp. 300.000</span> -->
                                            <span class="reguler">$ <?php echo $allMeat->price; ?></span>
                                        </div>
                                        <a href="<?php echo APPURL; ?>products/detail-product.php?id=<?php echo $allMeat->id; ?>" class="btn btn-block btn-primary">
                                            Add to Cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach  ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fishes" class="gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Fishes</h2>
                    <div class="product-carousel owl-carousel">
                        <?php foreach ($allFishes as $allFish) : ?>
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">SPECIAL</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-default">
                                                <?php echo $allFish->exp_date; ?>
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="assets/img/<?php echo $allFish->image; ?>" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="products/detail-product.php"><?php echo $allFish->title; ?></a>
                                        </h4>
                                        <div class="card-price">
                                            <!-- <span class="discount">Rp. 300.000</span> -->
                                            <span class="reguler">$<?php echo $allFish->price; ?></span>
                                        </div>
                                        <a href="<?php echo APPURL; ?>products/detail-product.php?id=<?php echo $allFish->id; ?>" class="btn btn-block btn-primary">
                                            Add to Cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach  ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fruits">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Fruits</h2>
                    <div class="product-carousel owl-carousel">
                        <?php foreach ($allFruits as $allFruit) : ?>

                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">SPECIAL</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-default">
                                                $<?php echo $allFruit->exp_date; ?>
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="assets/img/$<?php echo $allFruit->image; ?>" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="products/detail-product.php">$<?php echo $allFruit->title; ?></a>
                                        </h4>
                                        <div class="card-price">
                                            <!-- <span class="discount">Rp. 300.000</span> -->
                                            <span class="reguler">$<?php echo $allFruit->price; ?></span>
                                        </div>
                                        <a href="<?php echo APPURL; ?>products/detail-product.php?id=<?php echo $allFruit->id; ?>" class="btn btn-block btn-primary">
                                            Add to Cart
                                        </a>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach  ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php require "includes/footer.php"; ?>