<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
    <?php
        $data = date_parse($_GET["data"]);
        
        switch($data["month"]){
            case 1:
                if($data["month"] == 1 and $data["day"] >= 20){
                    echo "<p>Aquarius</p>";
                    echo "<img src='img/aquario.png'>";
                }else{
                    echo "<p>Capricorn</p>";
                    echo "<img src='img/capricornio.png'>";
            }
                break;
            case 2:
                if($data["month"] == 2 and $data["day"] >= 19){
                echo "<p>Pisces</p>";
                echo "<img src='img/pisces.png'>";
                }else{
                echo "<p>Aquarius</p>";
                echo "<img src='img/aquario.png'>";
                }
                break;
            case 3:
                if($data["month"] == 3 and $data["day"] >= 21){
                    echo "<p>Aries</p>";
                    echo "<img src='img/Aries.png'>";
                }else{
                    echo "<p>Pisces</p>";
                    echo "<img src='img/pisces.png'>";
                }
            break;
            case 4:
                if($data["month"] == 4 and $data["day"] >= 20){
                    echo "<p>Taurus</p>";
                    echo "<img src='img/Taurus.png'>";
                }else{
                    echo "<p>Aries</p>";
                    echo "<img src='img/Aries.png'>";
            }
            break;
            case 5:
                if($data["month"] == 5 and $data["day"] >= 21){
                    echo "<p>Gemini</p>";
                    echo "<img src='img/Gemeos.png'>";
                }else{ 
                    echo "<p>Taurus</p>";
                    echo "<img src='img/Taurus.png'>";
            }
            break;
            case 6:
                if($data["month"] == 6 and $data["day"] >= 21){
                    echo "<p>Cancer</p>";
                    echo "<img src='img/Cancer.png'>";
                }else{
                    echo "<p>Gemini</p>";
                    echo "<img src='img/Gemeos.png'>";
            }
            break;
            case 7:
                if($data["month"] == 7 and $data["day"] >= 23){
                    echo "<p>Leo</p>";
                    echo "<img src='img/Leo.png'>";
                }else{
                    echo "<p>Cancer</p>";
                    echo "<img src='img/Cancer.png'>";
            }
            break;
            case 8:
                if($data["month"] == 8 and $data["day"] >= 23){
                    echo "<p>Virgo</p>";
                    echo "<img src='img/virgo.png'>";
                }else{
                    echo "<p>Leo</p>";
                    echo "<img src='img/Leo.png'>";
            }
            break;
            case 9:
                if($data["month"] == 9 and $data["day"] >= 23){
                    echo "<p>Libra</p>";
                    echo "<img src='img/Libra.png'>";
                }else{
                    echo "<p>Virgo</p>";
                    echo "<img src='img/virgo.png'>";
            }
            break;
            case 10:
                if($data["month"] == 10 and $data["day"] >= 23){
                    echo "<p>Scorpio</p>";
                    echo "<img src='img/Scorpio.png'>";
                }else{
                    echo "<p>Libra</p>";
                    echo "<img src='img/Libra.png'>";
            }
            break;
            case 11:
                if($data["month"] == 11 and $data["day"] >= 22){
                    echo "<p>Sagittarius</p>";
                    echo "<img src='img/Sagitario.png'>";
                }else{
                    echo "<p>Scorpio</p>";
                    echo "<img src='img/Scorpio.png'>";
            }
            break;
            case 12:
                if($data["month"] == 12 and $data["day"] >= 22){
                    echo "<p>Capricorn</p>";
                    echo "<img src='img/capricornio.png'>";
                }else{
                    echo "<p>Sagittarius</p>";
                    echo "<img src='img/Sagitario.png'>";
                }
            break;
            default:
                echo "<p>Mês " .$data["month"]. " incorreto!</p>";        
        }

    ?>

</body>
</html>