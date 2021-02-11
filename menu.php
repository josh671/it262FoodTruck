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
</head>
<body >
<header>
<img id='logo' src="images/logo.jpg">

</header>

<form action="" method="post">
        <?php
            foreach($burgers as $burger){ 
                    echo '<div class="divs">
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
                       
                       //name has to be solid string. cant have spaces. 
                       if(isset($_POST[str_replace(' ', '_', $burger->name)])){
                           if($_POST[str_replace(' ', '_', $burger->name)] > 0){
                                $burger->quantity = intval($_POST[str_replace(' ', '_', $burger->name)]); 
                           }
                       }
            }//end for each 
        ?>

            <div>
                <input type=submit value="total">
            </div>

</form> 
<h2> Your Total: 
     <?php 
    $total = 0; 

    foreach($burgers as $burger){ 
            $fee = $burger->price * $burger->quantity; 
           $total = $total + $fee; 
        }
?>

 </h2> 


<?php 
    echo '<p>$'.$total.'</p>';

?>





</body>
</html> 







<!-- 
1. set up form, css, and class pages -8 hours. 2/10/21





 -->