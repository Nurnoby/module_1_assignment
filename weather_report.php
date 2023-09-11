<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Weather Report</title>
</head>
<body>
    <div class="calculator">
        <h2>Weather Report</h2>
        <form method="POST" action="">
            <label for="">Enter the temparature in Celsius</label><br>
            <input type="number" placeholder="Enter The Number" name="number">           
            <button type="submit" name="submit">Check Now</button>
        </form>
        <div class="value">
            <?php
                if(isset($_POST['submit'])){
                    $number=$_POST['number'];           
                    // A, B, C, D, F
                    if($number>=26){
                        echo "It's warm";
                    }else if($number<=25 && $number>=10){
                        echo "It's Cool";
                    }else{
                        echo "It's freezing!";
                    }                  
                }                        
                
            ?>
        </div>
    </div>    
</body>
</html>