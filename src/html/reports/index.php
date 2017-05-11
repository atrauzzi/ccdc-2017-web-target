<?php

$command = $_POST['command'];
$report = $_POST['report'];

$run = $command . " " . $report;

if($command && $report) {
    $output = exec($run);
}

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

        <p>Available Reports</p>
        
        <ul>
            <li>Daily</li>
            <li>Monthly</li>
            <li>Quarterly</li>
        </ul>

        <ul>
            <form method="POST">
                               
                <input type="hidden" name="command" value="/usr/local/bin/run_report.sh" />
                <input type="text" name="report" placeholder="Report Name" />
                
                <button>Run</button>

                <?php if($output): ?>
                <pre><?php echo $output ?></pre>
                <?php endif ?>

            </form>
        </ul>

    </body>

</html>