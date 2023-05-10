<?php
require(__DIR__ . "/../../partials/nav.php");

$results = [];
$db = getDB();
$stmt = $db->prepare("SELECT id, name, description, category, stock, unit_price, visible image FROM Products WHERE stock > 0 LIMIT 50");
try {
    $stmt->execute();
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error fetching items", "danger");
}
?>

<div class="container-fluid">
    <h1>Welcome to our Shop!</h1>
    <div class="row row-cols-sm-2 row-cols-xs-1 row-cols-md-3 row-cols-lg-6 g-4">
        <?php foreach ($results as $prod) : ?>
            <?php if(se($prod, "visibile") != '0') : ?>
                <div class="col">
                    <div class="card bg-light">
                        <div class="card-header">
                            Product
                        </div>
                        <?php if (se($prod, "image", "", false)) : ?>
                            <img src="<?php se($prod, "image"); ?>" class="card-img-top" alt="...">
                        <?php endif; ?>

                        <div class="card-body">
                            <h5 class="card-title">Name: <?php se($prod, "name"); ?></h5>
                            <p class="card-text">Description: <?php se($prod, "description"); ?></p>
                        </div>
                        <div class="card-footer">
                            <?php
                            $price = floatval(se($prod, "unit_price", "", false)); 
                            $price /= 100;
                            echo "Cost: $" . round($price, 2);
                            ?> <br>
                            <form method="POST" action="cart.php">
                                <input type="hidden" name="prod_id" value="<?php se($prod, "id");?>"/>
                                <input type="hidden" name="action" value="add"/>
                                <input type="number" name="desired_quantity" value="1" min="1" max="<?php se($prod, "stock");?>"/>
                                <input type="submit" class="btn btn-primary" value="Add to Cart"/>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
<?php
require(__DIR__ . "/../../partials/footer.php");
?>