<html lang="en">
 
<head>
    <title>Method GET</title>
</head>
 
<body>
    <form action="" method="GET">
        <input type="text" name="nama"><br />
        <input type="number" name="umur"><br />
        <input type="submit" name="submit" value="Sumbit">
    </form>
    <?php
    if ($_GET) {
        echo "Namaa: " . $_GET["nama"];
        echo "<br/>";
        echo "Umur: " . $_GET["umur"];
    

    }
    ?>
</body>
</html>