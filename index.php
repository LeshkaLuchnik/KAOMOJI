<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="IMG/icons/flaticon/ascii.png" type="image/x-icon">

    <?php
        require_once "widget/links.php";
    ?>
    <title>KAOMOJI</title>
</head>
<body>
    <header>
        <?php
            require_once "widget/header.php";
        ?>
    </header>

    <main>
       <?php
            require_once "PHP/connect.php";
            $connect = connect();
            $sql = "SELECT * FROM smiles";

            if($result = $connect->query($sql))
            {  
                foreach($result as $row)
                        {
                            echo "<div class = 'Smile'>";
                                echo "<p>Название: " . $row['Smile'] . "</p>";
                            $count++;
                        }
            }
       ?>
    </main>

    <footer>
        <?php
            require_once "widget/footer.php";
        ?>    
    </footer>


    <script src="JS/script.js"></script>
</body>
</html>