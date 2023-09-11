<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Temparature Converter</title>
</head>
<body>
    <div class="calculator">
        <h2>Temparature Calculator</h2>
        <form method="POST" action="">
            <input type="number" placeholder="enter the temparature value" name="number">    
            <select id="temparature_option" name="temparature_option">
                <option name="units" value="celsius">Celsius</option>
                <option name="units" value="fahrenheit">Fahrenheit</option>          
            </select>
            <button type="submit" name="submit">Calculate</button>
        </form>
        <div class="value">
            <?php
                if(isset($_POST['submit'])){
                    $number=$_POST['number'];
                    $temp=$_POST['temparature_option'];

                    if($temp=="celsius"){
                        $result= ($number*9)/5+32;
                        echo "The Conversion Value of Fahrenheit : {$result}";
                    } else{
                        $result= ($number-32)*5/9;
                        echo "The Conversion Value of Celsius : {$result}";
                    }
                }
            ?>
        </div>
    </div>    
</body>
</html>