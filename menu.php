<?php

//menu.php

/* THERE ARE NO USER EDITABLE FIELDS IN THIS DOCUMENT */

include 'Burgers.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./css/main.css?php echo time(); ?>">  -->
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="./css/main.css?v=<?php echo time(); ?>">

</head>
<body >
<header>
<h1>STEELERS NATION</h1>
    <img id='logo' src="images/logo.jpg" alt="Steelers Nation logo">
</header>

<form action="menu.php" method="post">

<?php
// foreach loop //
foreach($burgers as $burger){ 
    echo '<div class="menu-items">
        <h3>'.$burger->name.'</h3>
        <img class="menu-images" src=images/'.$burger->imageName.' alt="burger photo">
        <p>'.$burger->description.'</p><br>
        <select name="'.$burger->name.'" required> 
        <option value="0">Choose How Many!</option>
        <option value="1" label="1">
        <option value="2" label="2">
        <option value="3" label="3">
        <option value="4" label="4">
        <option value="5" label="5">
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
    <input type=submit value="Get Total">
</div>
</form>

<!-- start of total -->
<div class="total">
<?php
// burger-by-burger qty //
    $burgers_purchased = array(); 
    foreach($burgers as $burger){ 
        if($burger->quantity > 0){ 
        echo '<p clas="b_name">'.$burger->name.' $'.$burger->price.' x '.$burger->quantity. '</p>';
        }
    } // end burger-by-burger qty //
    // subtotal //
    $subtotal = 0; 
    foreach($burgers as $burger){ 
        $itemTotal = $burger->price * $burger->quantity; 
        $subtotal = $subtotal + $itemTotal; 
        $formatSubtotal = number_format($subtotal, 2, '.', '');
    } 
    // echo '<p class="finalTotal">$'.$formatSubTotal.'</p>';
    echo '<h5>Subtotal: $'.$formatSubtotal.'</h5>';
    $totalTax = $subtotal * $totalTaxRate;
    $formatTotalTax = number_format($totalTax, 2, '.', '');
    echo '<p>Tax: $'.$formatTotalTax.'</p>';
    $grandTotal = $subtotal + $totalTax;
    $formatGrandTotal = number_format($grandTotal, 2, '.', '');
    echo '<h4>Grand Total: </h4>';
    echo '<h3>$'.$formatGrandTotal.'</h3>';
    
?>

</div>
<!-- fancy footer -->
<footer>
<ul>
    <li>Copyright <?php
    $startDate = 2019;
    $currentDate = date('Y');
    if($startDate == $currentDate){
            echo $currentDate;
    }else{
            echo ' '.$startDate.'-'.$currentDate.'';
    } //end else
    ?>
    </li>
    <li>All Rights Reserved</li>
    <!-- <li>Web design by Josh Bordallo</li> -->
    <li><a href="menu.php">Web design by Josh Bordallo</a></li>
    <li><a href='http://validator.w3.org/check/referer' target='_blank'>Valid HTML</a> ~ <a href='http://jigsaw.w3.org/css-validator/check?uri=referer' target='_blank'>Valid CSS</a></li>
</ul>
</footer>
<!-- end wrapper -->
</body>
</html> 

<!--
13. 2/15/21 Joon made final edits and styling, ensured html validation (2 hr)
12. 2/14/21 Joon added footer with validators, lots of styling and tweaking (1 hr)
11. 2/14/21 Joon edited comments and layout, edited project doc (.5hr)
10. 2/14/21 Joon edited display for subtotal and tax ( 1.5 hr)
9. 2/14/21 Joon added $ID to $burgers arrays, added comments for client editing, worked on subtotal and tax logic ( 2 hr) 
8. 2/14/21 Joon testing, code review, added commented code for addExtra function, declared $title, comments, formatting, minor edits, documentation (4 hr)
7. finalized all code - 2 hr josh. 
6. pushed and pulled from git to work on doc -1min. 
5. added menu items to total ticket. 1 hr -josh
4. created and did all css - 1hr josh. 
3. continued on menu.php to add menu items. -1 hr -josh
2. continued to add more burgers to class after page was created 30mins-josh
1. contacted kyrah to help get started 2hrs -josh. 
 -->
