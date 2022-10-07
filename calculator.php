<?php
    if (isset($_POST['calculate'])){
        $_num1 = (int)$_POST['num1'];
        $_num2 = (int)$_POST['num2'];
        $_operator = $_POST['operator'] ;
        $_ans;
    if (((is_numeric($_POST['num1']) && is_numeric($_POST['num2']))) && ($_POST['num2'] != 0)){
        if ($_operator == "+"){
            $_ans = "<h1> The sum of ".$_num1." and ".$_num2." is: ". ($_num1 + $_num2) . "</h2>\n";
        }elseif($_operator == "-"){
            $_ans = "<h1> The difference of ".$_num1." and ".$_num2." is: ". ($_num1 - $_num2) ."</h2>\n";
        }elseif($_operator == "*"){
            $_ans = "<h1> The multiple of ".$_num1." and ".$_num2." is: ". ($_num1 * $_num2) ."</h2>\n";
        }else{
            $_ans = "<h1> The division of ".$_num1. " and ".$_num2." is: ". ($_num1 / $_num2)."</h2>\n";
        }
    }elseif($_POST['num2'] == 0){
        $_ans = "<h1> The division of ".$_num1. " and ".$_num2." is: E </h2>\n";
    }else{
        $_ans = "<h1 class='error'>Invalid input</h1> ";
    }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel='stylesheet' href='calculator.css'>
</head>
<body>
<div class="container">
    <form method='POST' action="calculator.php">
        <h1>CALCULATOR</h1>
        First Number<input type="text" name='num1' value='<?php echo isset($_POST['num1']) ? $_POST['num1'] : "" ; ?>'>
        Operator<select for='operator' name='operator' >
        <option value=''><?php echo isset($_POST['operator']) ? $_POST['operator'] : ""; ?></option>
        <option value="+" class='operator'>Addition</option> 
        <option value="-" class='operator'>Subtraction</option>
        <option value="*" class='operator'>Multiplication</option>
        <option value="/" class='operator'>Division</option>
        </select>
        Second Number<input type="text" name='num2' value='<?php echo isset($_POST['num2']) ? $_POST['num2'] : "" ; ?>'>
        <input type="submit" name='calculate' value='Calculate'>
        </form>
        <div class="ans"><?php echo isset($_ans) ? $_ans :"" ; ?></div>
</div>
<?php error_reporting(0); ?>


</body>
</html>