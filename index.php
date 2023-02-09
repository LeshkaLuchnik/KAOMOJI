<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/mobile-style.css">
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

        <hr>

        <div class="links">
            <?php
                include_once "PHP/connect.php";

                $connect = connect();
                $sql_group = "SELECT * FROM kaomoji.groups";

                if($result = $connect->query($sql_group))
                {
                    foreach($result as $row)
                        {
                            echo "<a href='#" . strtolower($row['Name_Eng']) . "'>" . $row['Name_Rus'] . "</a>";
                        }
                }
                
            ?>
        </div>

        <hr>

        <?php
            $connect = connect();
            $sql_group = "SELECT * FROM kaomoji.groups";

            if($result = $connect->query($sql_group))
            {  
                foreach($result as $row)
                    {
                        echo "<div class='group'>";
                        
                            echo "<p id='" . strtolower($row['Name_Eng']) . "'>" . $row["Name_Rus"] . "</p>";        
                            echo "<div class='Smiles'>";

                                $sql_smiles = "SELECT * FROM smiles WHERE smiles.Group = lower('" . $row['Name_Eng'] . "')";
                                
                                if($result = $connect->query($sql_smiles))
                                {
                                    foreach($result as $row)
                                    {
                                        echo "<button class = 'Smile ". $row['Group'] ."' id='" . $row['ID'] . "' onclick='copy(". $row['ID'] .")'>" . $row['Smile'] . "</button>";
                                    }
                                }
                            echo "</div>";

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js" defer></script>
    <script src="JS/script.js" defer></script>
</body>
</html>