<html>
    <head>
        <title>Тестируем PHP</title>
    </head>
    <body>
        <?php
            function execInBackground($cmd) {
                if (substr(php_uname(), 0, 7) == "Windows"){
                    pclose(popen("start /B ". $cmd, "r"));
                }
                else {
                    exec($cmd . " > /dev/null &");
                }
            }

            echo '<p>Привет, мир2!</p>';
              $command = escapeshellcmd('python -m scrapy.cmdline runspider blog2doc_scrapy/spiders/blog_spider.py -o ./data/out.html');
              execInBackground($command);
        ?>
    </body>
</html>
