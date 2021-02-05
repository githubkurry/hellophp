<html>
<head>
<meta charset="utf-8">
<title>require</title>
</head>
<body>
    <div class="array">
        <?php include 'multiarray.php'; ?>
        <?php require 'multiarray.php';
            echo $idol['bp'][0]."<br>";
        ?>
    </div>
    <h1>欢迎光临!</h1>
    
</body>
</html>