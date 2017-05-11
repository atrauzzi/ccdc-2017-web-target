<?php

    $flagValue = "FLAG VALUE";

    $injectionTriggers = [
        "\\\\",
        "\\-",
        "\\.",
        "`",
        "0;",
        "\\-\\-",
    ];

    $value = $_POST['value'];

?>
<!doctype html>
<html>

    <head>
        <title>Company Corp - Reports</title>
    </head>

    <body>

        <h1>Company Corp</h1>
        <h2>We do a business!</h2>

        <p>Company portal for internal use only.</p>

        <?php if(preg_match("/(" . implode("|", $injectionTriggers) . ")/", $value)): ?>

            <center><?php echo $flagValue; ?></center>

        <?php else: ?>

            <ul>
                <form method="POST">
                                
                    <input type="text" name="value" placeholder="10" />
                    
                    <button>Update</button>

                    <?php if($value): ?>
                        Updated!
                    <?php endif ?>
                </form>
            </ul>

        <?php endif ?>
    </body>

</html>