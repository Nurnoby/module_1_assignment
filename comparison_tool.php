<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Comparison Tool</title>
</head>
<body>
    <div class="calculator">
        <h2>Comparison Tool</h2>
        <form method="POST" action="">
            <label for="">Enter First Number</label><br>
            <input type="number" placeholder="Enter The Number" name="number_1">           
            <label for="">Enter Secoend Number</label><br>
            <input type="number" placeholder="Enter The Number" name="number_2">           
            <button type="submit" name="submit">Compare Now</button>
        </form>
        <div class="value">
            <?php
                if(isset($_POST['submit'])){
                    $a=$_POST['number_1'];           
                    $b=$_POST['number_2'];                 
                    $result=($a>$b) ? "{$a} is Larger Number than {$b}" : "{$a} is Smaller Number than {$b}";   
                    echo "$result";          
                }                        
            ?>
        </div>
    </div>    
</body>
</html>