<?php
require(__DIR__ . "/../../partials/nav.php");

$results = [];
$db = getDB();
$stmt = $db->prepare("SELECT id, name, description, category, stock, unit_price, visible, img FROM Products WHERE stock > 0 LIMIT 50");
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

//Sort and Filters
$col = se($_GET, "col", "cost", false);
//allowed list
if (!in_array($col, ["unit_price", "stock", "name", "created"])) {
    $col = "unit_price"; //default value, prevent sql injection
}
$order = se($_GET, "order", "asc", false);
//allowed list
if (!in_array($order, ["asc", "desc"])) {
    $order = "asc"; //default value, prevent sql injection
}
//get name partial search
$name = se($_GET, "name", "", false);

//dynamic query
$query = "SELECT id, name, description, category, stock, unit_price FROM Products items WHERE 1=1 and stock > 0"; //1=1 shortcut to conditionally build AND clauses
$params = []; //define default params, add keys as needed and pass to execute
//apply name filter
if (!empty($name)) {
    $query .= " AND name like :name";
    $params[":name"] = "%$name%";
}
//apply column and order sort
if (!empty($col) && !empty($order)) {
    $query .= " ORDER BY $col $order"; //be sure you trust these values, I validate via the in_array checks above
}
$stmt = $db->prepare($query); //dynamically generated query
//$stmt = $db->prepare("SELECT id, name, description, cost, stock, image FROM BGD_Items WHERE stock > 0 LIMIT 50");
try {
    $stmt->execute($params); //dynamically populated params to bind
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

    <form class="row row-cols-auto g-3 align-items-center" method='GET'>
        <div class="col">
            <div class="input-group" data="i">
                <div class="input-group-text">Name</div>
                <input class="form-control" name="name" value="<?php se($name); ?>" />
            </div>
        </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-text">Sort</div>
                <!-- make sure these match the in_array filter above-->
                <select class="form-control bg-info" name="col" value="<?php se($col); ?>" data="took">
                    <option value="cost">Unit Price</option>
                    <option value="stock">Stock</option>
                    <option value="name">Name</option>
                    <option value="created">Created</option>
                </select>
                <script>
                    //quick fix to ensure proper value is selected since
                    //value setting only works after the options are defined and php has the value set prior
                    document.forms[0].col.value = "<?php se($col); ?>";
                </script>
                <select class="form-control" name="order" value="<?php se($order); ?>">
                    <option class="bg-white" value="asc">Up</option>
                    <option class="bg-white" value="desc">Down</option>
                </select>
                <script data="this">
                    //quick fix to ensure proper value is selected since
                    //value setting only works after the options are defined and php has the value set prior
                    document.forms[0].order.value = "<?php se($order); ?>";
                    if (document.forms[0].order.value === "asc") {
                        document.forms[0].order.className = "form-control bg-success";
                    } else {
                        document.forms[0].order.className = "form-control bg-danger";
                    }
                </script>
            </div>
        </div>
        <div class="col">
            <div class="input-group">
                <input type="submit" class="btn btn-primary" value="Apply" />
            </div>
        </div>
    </form>

    <div class="row row-cols-sm-2 row-cols-xs-1 row-cols-md-3 row-cols-lg-6 g-4">
        <?php foreach ($results as $prod) : ?>
            <?php if(se($prod, "visible") != '0') : ?>
                <div class="col">
                    <div class="card bg-light">
                        <div class="card-header">
                            Product
                        </div>
                        <?php 
                        if (se($prod, "img", "", false)) : ?>
                            <img src=<?php se($prod, "img"); ?> class="card-img-top" alt="...">
                        <?php endif; ?>

                        <div class="card-body">
                            <h5 class="card-title"><?php se($prod, "name"); ?></h5>
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
                                <input type="number" name="desired_quantity" value="1" min="1" max="<?php se($prod, "stock");?>"/><br>
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