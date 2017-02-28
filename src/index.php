<html>
    <head>
        <title>Тестируем PHP</title>
    </head>
    <body>
        <?php
            echo '<p>Привет, мир!</p>';
            $command = escapeshellcmd('python ./test.py');
            $output = shell_exec($command);
            echo $output;
        ?>
    </body>
</html>
