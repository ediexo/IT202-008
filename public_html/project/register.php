<?php
require(__DIR__ . "/../../lib/functions.php");
?>
<link rel="stylesheet" href="style.css" type="text/css">
<form onsubmit="return validate(this)" method="POST">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" required />
    </div>
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" required maxlength="30" />
    </div>
    <div>
        <label for="pw">Password</label>
        <input type="password" id="pw" name="password" required minlength="8" />
    </div>
    <div>
        <label for="confirm">Confirm</label>
        <input type="password" name="confirm" required minlength="8" />
    </div>
    <input type="submit" value="Register" />
</form>
<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success

        return true;
    }
</script>
<?php
 //TODO 2: add PHP Code
 if(isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm"])){
    $email = se($_POST, "email", "", false);;
    $password = se($_POST, "password", "", false);
    $confirm = se($_POST, "confirm", "", false);
    //TODO 3: validate/use
    $hasError = false;
    if(empty($email)) {
        flash("Email must not be empty") ;
        $hasError = true;
    }
    $username = se($_POST, "username", "", false);
    //sanitize and validate email
    $email = sanitize_email($email);
    if (!is_valid_email($email)){
        flash("Invalid email address");
        $hasError = true;
    }
    if (!preg_match('/^[a-z0-9_-]{3,16}$/i', $username)) {
        flash("Username must only be alphanumeric and can only contain - or _", "danger");
        $hasError = true;
    }
    if(empty($password)) {
        flash("Password must not be empty");
        $hasError = true;
    }
    if(empty($confirm)) {
        flash("Confirm password must not be empty");
        $hasError = true;
    }
    if(strlen($password) < 8) {
        flash("Password too short");
        $hasError = true;
    }
    if (strlen($password) > 0 && $password !== $confirm){
            flash("Passwords much match");
            $hasError = true;
        }
    if (!$hasError){
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO Users (email, password, username) VALUES(:email, :password, :username)");
        try {
            $stmt->execute([":email" => $email, ":password" => $hash, ":username" => $username]);
            flash("Successfully registered!");
        } catch (Exception $e) {
            flash("There was a problem registering", "danger");
            flash("<pre>" . var_export($e, true) . "</pre>", "danger");
        }
    }
 }
 require(__DIR__. "/../../partials/flash.php");
?>