<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="CSS/style.css">
    <link rel="shortcut icon" href="IMG/icons/flaticon/ascii.png" type="image/x-icon">

    <title>KAOMOJI</title>
</head>
<body>
    <header>
        <?php
            include_once "widget/header.php";
        ?>
    </header>

<div class="links">
    <a href="#" name="joy"></a>
</div>

    <main>

        <h1 id="joy">Joy</h1>
       <?php
            include_once "PHP/connect.php";
            $connect = connect();
            $sql = "SELECT * FROM smiles";

            if($result = $connect->query($sql))
            {  
                foreach($result as $row)
                        {
                                echo "<button class = 'Smile  ". $row['Group'] ."' id='" . $row['ID'] . "' onclick='copy(". $row['ID'] .")'>" . $row['Smile'] . "</button>";
                        }
            }
       ?>
    </main>

    <footer>
        <?php
            include_once "widget/footer.php";
        ?>    
    </footer>

    <script src="JS/script.js" defer></script>
</body>
</html>