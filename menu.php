<?php
//menu.php
include 'Burgers.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css?php echo time(); ?>"> 
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="./css/main.css?v=<?php echo time(); ?>">
<!-- Why is there a second stylesheet link? -->

</head>
<body >
<header>
<img id='logo' src="images/logo.jpg">
</header>

<form action="" method="post">

<?php
// fore each loop //
foreach($burgers as $burger){ 
    echo '<div class="menu-items">
        <h3>'.$burger->name.'</h3>
        <img class="menu-images" src=images/'.$burger->imageName.'>
        <p>' .$burger->description.'</p><br>
        <select name="'.$burger->name.'" required> 
        <option value="0">Choose How Many!</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        </select>
        </div>';    
        
        //name has to be solid string. cant have spaces.  //
    if(isset($_POST[str_replace(' ', '_', $burger->name)])){
        if($_POST[str_replace(' ', '_', $burger->name)] > 0){
            $burger->quantity = intval($_POST[str_replace(' ', '_', $burger->name)]); 
        }
    } // end if isset //
}// end for each //
?>

<div class="submit">
    <input type=submit value="Take Total">
</div>
</form>

<!-- start of total -->
<div class="total">
<h2> Your Total: 
     <?php 
    $total = 0; 
    foreach($burgers as $burger){ 
        $fee = $burger->price * $burger->quantity; 
        $total = $total + $fee; 
        $formatTotal = number_format($total, 2, '.', '');
    } 
    ?>
</h2>
<?php 
    echo '<p class="finalTotal">$'.$formatTotal.'</p>';
    $burgers_purchased = array(); 
    foreach($burgers as $burger){ 
        if($burger->quantity > 0){ 
        echo '<p clas="b_name">'.$burger->name.'  '.$burger->quantity. ' Price per '.$burger->price.'</p>';
        }
    }
?>
</div> 
</body>
</html> 

<!-- 

8. 2/14 Minor edits, formatting, declared $title in Burgers.php, 1.5hr Joon
7. finalized all code - 2 hr josh. 
6. pushed and pulled from git to work on doc -1min. 
5. added menu items to total ticket. 1 hr -josh
4. created and did all css - 1hr josh. 
3. continued on menu.php to add menu items. -1 hr -josh
2. continued to add more burgers to class after page was created 30mins-josh
1. contacted kyrah to help get started 2hrs -josh. 
 -->
