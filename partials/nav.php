<?php
require_once(__DIR__ . "/../lib/functions.php");
//Note: this is to resolve cookie issues with port numbers
$domain = $_SERVER["HTTP_HOST"];
if (strpos($domain, ":")) {
    $domain = explode(":", $domain)[0];
}
$localWorks = true; //some people have issues with localhost for the cookie params
//if you're one of those people make this false

//this is an extra condition added to "resolve" the localhost issue for the session cookie
if (($localWorks && $domain == "localhost") || $domain != "localhost") {
    session_set_cookie_params([
        "lifetime" => 60 * 60,
        "path" => "$BASE_PATH",
        //"domain" => $_SERVER["HTTP_HOST"] || "localhost",
        "domain" => $domain,
        "secure" => true,
        "httponly" => true,
        "samesite" => "lax"
    ]);
}
session_start();


?>
<html>

<!-- include css and js files -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo get_url('style.css'); ?>">
<script src="<?php echo get_url('helpers.js'); ?>"></script>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="<?php echo get_url('shop.php'); ?>">Shop Now!</a></li>
            <?php if (is_logged_in()) : ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo get_url('home.php'); ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo get_url('profile.php'); ?>">Profile</a></li>
            <?php endif; ?>
            <?php if (!is_logged_in()) : ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo get_url('login.php'); ?>">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo get_url('register.php'); ?>">Register</a></li>
            <?php endif; ?>
            <?php if (has_role("Admin")) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="rolesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Roles
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="rolesDropdown">
                            <li><a class="dropdown-item" href="<?php echo get_url('admin/create_role.php'); ?>">Create</a></li>
                            <li><a class="dropdown-item" href="<?php echo get_url('admin/list_roles.php'); ?>">List</a></li>
                            <li><a class="dropdown-item" href="<?php echo get_url('admin/assign_roles.php'); ?>">Assign</a></li>
                        </ul>
                    </li>
                <?php endif; ?>
                <?php if(has_role("Admin") || has_role("Shop_Owner")) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="rolesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="rolesDropdown">
                            <li><a class="dropdown-item" href="<?php echo get_url('owner-admin/create_prod.php'); ?>">Create</a></li>
                            <li><a class="dropdown-item" href="<?php echo get_url('owner-admin/list_products.php'); ?>">List</a></li>
                        </ul>
                    </li>
                <?php endif; ?>
            <?php if (is_logged_in()) : ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo get_url('logout.php'); ?>">Logout</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
</html>