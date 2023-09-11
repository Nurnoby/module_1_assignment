<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Simple Calculator</title>
</head>
<body>
    <div class="calculator">
        <h2>Simple Calculator</h2>
        <form method="POST" action="">
            <label for="">Enter the first Number</label><br>
            <input type="number" placeholder="Enter The Number" name="number_1">           
            <label for="">Enter the secoend Number</label><br>
            <input type="number" placeholder="Enter The Number" name="number_2">  
            <select id="calculation_options" name="calculation_options">
                <option name="units" value="add">Addition</option>
                <option name="units" value="sub">Subtraction</option>          
                <option name="units" value="mul">Multiplication</option>          
                <option name="units" value="div">Division</option>          
            </select>         
            <button type="submit" name="submit">Calculate Now</button>
        </form>
        <div class="value">
            <?php
                if(isset($_POST['submit'])){
                    $x=$_POST['number_1'];           
                    $y=$_POST['number_2']; 
                    $calculate=$_POST['calculation_options'];          
                    // A, B, C, D, F
                    if($calculate=="add"){
                        $result=$x+$y;
                        echo "Your Answer is : {$result}";
                    }
                    else if($calculate=="sub"){
                        $result=$x-$y;
                        echo "Your Answer is : {$result}";
                    }
                    else if($calculate=="mul"){
                        $result=$x*$y;
                        echo "Your Answer is : {$result}";
                    }
                    else if($calculate=="div"){
                        $result=$x/$y;
                        echo "Your Answer is : {$result}";
                    }
                       
                }                        
                
            ?>
        </div>
    </div>    
</body>
</html>