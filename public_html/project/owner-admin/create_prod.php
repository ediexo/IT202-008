<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");
$TABLE_NAME = "Products";
if (!has_role("Admin") && !has_role("Shop_Owner")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH/home.php"));
}
if (isset($_POST["submit"])) {
    $id = save_data($TABLE_NAME, $_POST);
    if ($id > 0) {
        flash("Created Item with id $id", "success");
    }
}
//get the table definition
$columns = get_columns($TABLE_NAME);
//echo "<pre>" . var_export($columns, true) . "</pre>";
$ignore = ["id", "modified", "created", "visible"];
?>
<div class="container-fluid">
    <h1>Add a Product to your Shop</h1>
    <form method="POST" class="col-6">
        <?php foreach ($columns as $index => $column) : ?>
            <?php /* Lazily ignoring fields via hardcoded array*/ ?>
            <?php if (!in_array($column["Field"], $ignore)) : ?>
                <div class="mb-4">
                    <label class="form-label" for="<?php se($column, "Field"); ?>"><?php se($column, "Field"); ?></label>
                    <input class="form-control" id="<?php se($column, "Field"); ?>" type="<?php echo input_map(se($column, "Type", "", false)); ?>" name="<?php se($column, "Field"); ?>" />
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
        <div class= "form-check">
            Visibility
            <br>
            <label class="form-check-label" for="true">True</label>
            <input name="visible" type="radio" id="true" value='1'class="form-check-input"> <br>
            <label class="form-check-label" for="false">False</label>
            <input name="visible" type="radio" id="false" value='0' class="form-check-input">
        </div>
        <input class="btn btn-primary" type="submit" value="Create" name="submit" />
    </form>
</div>
<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../../partials/footer.php");