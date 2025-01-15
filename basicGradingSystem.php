<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   $grades = 0;

   $english = 95;
   $math = 95;
   $science = 91;
   $filipino = 97;

   $sum = $english + $math + $science + $filipino;
   $GPA = $sum / 4;

   if($GPA >= 91){
    echo "EXCELLENT GRADES";
   }
   elseif ($GPA >= 81 and $GPA <= 90) {
    echo "GOOD GRADES";
   }
   elseif($GPA >= 75 and $GPA <= 80){
    echo "NEED IMPROVEMENTS";
   }else{
    echo "BAD GRADES";
   }
   
    ?>
</body>
</html>
