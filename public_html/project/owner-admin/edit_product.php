<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");
$TABLE_NAME = "Products";
if (!has_role("Admin") && !has_role("Shop_Owner")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH/home.php"));
}
//update the item
if (isset($_POST["submit"])) {
    if (update_data($TABLE_NAME, $_GET["id"], $_POST)) {
        flash("Updated item", "success");
    }
}

//get the table definition
$result = [];
$columns = get_columns($TABLE_NAME);
//echo "<pre>" . var_export($columns, true) . "</pre>";
$ignore = ["id", "modified", "created", "visible"];
$db = getDB();
//get the item
$id = se($_GET, "id", -1, false);
$stmt = $db->prepare("SELECT * FROM $TABLE_NAME where id =:id");
try {
    $stmt->execute([":id" => $id]);
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($r) {
        $result = $r;
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error looking up record", "danger");
}
//uses the fetched columns to map via input_map()
function map_column($col)
{
    global $columns;
    foreach ($columns as $c) {
        if ($c["Field"] === $col) {
            return input_map($c["Type"]);
        }
    }
    return "text";
}
?>
<div class="container">
    <h1>Edit Product</h1>
    <form method="POST" class="col-6">
        <?php foreach ($result as $column => $value) : ?>
            <?php /* Lazily ignoring fields via hardcoded array*/ ?>
            <?php if (!in_array($column, $ignore)) : ?>
                <div class="mb-4">
                    <label class="form-label" for="<?php se($column); ?>"><?php se($column); ?></label>
                    <input class="form-control" id="<?php se($column); ?>" type="<?php echo map_column($column); ?>" value="<?php se($value); ?>" name="<?php se($column); ?>" />
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
        <div class= "form-check">
            Visibility
            <label class="form-check-label" for="true">True</label>
            <input name="visible" type="radio" id="true" value='1'class="form-check-input"> <br>
            <label class="form-check-label" for="false">False</label>
            <input name="visible" type="radio" id="false" value='0' class="form-check-input">
        </div>
        <input class="btn btn-primary" type="submit" value="Update" name="submit" />
    </form>
</div>

<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../../partials/footer.php");
?>