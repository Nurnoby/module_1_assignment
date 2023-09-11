<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Even or Odd Checker</title>
</head>
<body>
    <div class="calculator">
        <h2>Even or Odd Checker</h2>
        <form method="POST" action="">
            <label for="">Enter the number </label><br>
            <input type="number" placeholder="Enter The Number" name="number">           
            <button type="submit" name="submit">Check Now</button>
        </form>
        <div class="value">
            <?php
                if(isset($_POST['submit'])){
                    $number=$_POST['number'];           
                    // A, B, C, D, F
                    if($number%2==0){
                        echo "{$number} is an Even Number";
                    }else{
                        echo "{$number} is an Odd Number";
                    }                   
                }                        
                
            ?>
        </div>
    </div>    
</body>
</html>