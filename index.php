<html>
    <head>
        <title>
            my angular practice pages
        </title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />   
    </head>
    <body class="body">
        <div class="container-fluid">
            <div class="row">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>List</th>
                    </tr>
                    <?php
                    $files = glob(__DIR__ . DIRECTORY_SEPARATOR . "*.php");
                    foreach ($files as $file) {
                        $filePath = substr($file, strlen(__DIR__), strlen($file) - strlen(__DIR__));
                        $fileName = substr($filePath, 1,-4);
                        if($fileName!='index'){
                            echo "<tr><td><a href='http://localhost/angla01{$filePath}'>{$fileName}</td></tr>";
                        }                        
                    }
                    ?>
                </table>
            </div>
        </div>


    </body>
</html>
