<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Grade Calculator</title>
</head>
<body>
    <div class="calculator">
        <h2>Grdade Calculator</h2>
        <form method="POST" action="">
            <label for="">Bangla</label><br>
            <input type="number" placeholder="Enter The Number ( 1-100 )" name="bangla">
            <label for="">English</label><br>
            <input type="number" placeholder="Enter The Number ( 1-100 )" name="english">
            <label for="">Math</label><br>
            <input type="number" placeholder="Enter The Number ( 1-100 )" name="math">
            <button type="submit" name="submit">Get Result</button>
        </form>
        <div class="value">
            <?php
                if(isset($_POST['submit'])){
                    $bangla=$_POST['bangla'];
                    $english=$_POST['english'];
                    $math=$_POST['math'];  
                    $avg=($bangla+$english+$math)/3;
                    echo "Avarage Marks: {$avg}";    
                    // A, B, C, D, F
                    if($avg>=80){
                        echo " You have got A";
                    }
                    else if($avg<=79 && $avg>=60)
                    {
                        echo " You have got B";  
                    }                                   
                    else if($avg<=59 && $avg>=50){
                        echo " You have got C";                                                     
                    }
                    else if($avg<=49 && $avg>=40){
                        echo " You have got D";  
                    }   
                    else if($avg<=39){
                        echo " You have got F";  
                    }   
                }                        
                
            ?>
        </div>
    </div>    
</body>
</html>