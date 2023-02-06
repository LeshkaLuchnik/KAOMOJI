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

    <main>
       <?php
            include_once "PHP/connect.php";
            $connect = connect();
            $sql = "SELECT * FROM smiles";

            if($result = $connect->query($sql))
            {  
                foreach($result as $row)
                        {
                            echo "<div class = 'Smile'>";
                                echo '<p id="' . $row["ID"] . '" onclick="copy(' . $row["ID"] . ') ">' . $row["Smile"] .'</p>' ;  
                            echo "</div>";
                            
                        }
            }
       ?>
    </main>

    <footer>
        <?php
            include_once "widget/footer.php";
        ?>    
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="JS/script.js"></script>
</body>
</html>