<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {

    // ToDo: Yield a flag
}

?>
<!doctype html>
<html>

    <head>
        <title>Company Corp - Internal</title>
    </head>

    <body>

        <h1>Company Corp</h1>
        <h2>We do a business!</h2>

        <p>Company portal for internal use only.</p>

        <form method="POST">
            <input type="text" placeholder="Username" name="username" />
            <input type="password" placeholder="Password" name="password" />
            <button>Create</button>
        </form>

    </body>

</html>