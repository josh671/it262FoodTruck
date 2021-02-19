<?php 

// Burgers.php //

/* EDIT PAGE TITLE HERE */

$title="STEELERS BURGERS";

/* end page title declaration */

/* EDIT BURGER SELECTIONS BELOW */

$burgers[]=new Burger(1, 'Steeler', "Delicious Burger made from the best Burger meats. - $5.75", 5.75, 'slider.jpg'); 
$burgers[]=new Burger(2, 'Big Ben Burger', "Named after our QB and part owner. This burger has a lot of flavor. - $5.50", 5.50, 'bigBen.jpg'); 
$burgers[]=new Burger(3, 'Beefy Beef Burger', "Great Deal for that amount of Beef - $9.50", 9.50, 'beefy.jpg'); 
$burgers[]=new Burger(4, 'Chicken Burger', "Fresh Frozen Chicken marked up 100% of its actual value. Yum! - $9.50", 9.50, 'chicken.jpg'); 
$burgers[]=new Burger(5, 'Deal of the Day', "Get two of our delicious Burgers- $10.50", 10.50, 'double.jpg'); 
$burgers[]=new Burger(6, 'Egg-Tacular', "Eggs and more Beef. Delicious. - $9.50", 9.50, 'egg.jpg'); 
$burgers[]=new Burger(7, 'Yippy Skippy Burger', "Eggs and more Beef. Delicious. - $11.50", 11.50, 'skippy.jpg'); 
$burgers[]=new Burger(8, 'All Eggs and Bacon ', "Eggs and Bacon. What could Go wrong. - $11.50", 11.50, 'double.jpeg'); 
$burgers[]=new Burger(9, 'Heart Attack Burger ', "Causes heartburn on first bite. - $3.50", 3.50, 'heart.jpg');
/* end burger selections */

/* TAX RATES
ENTER ACTIVE TAX RATE(S) BELOW
ENTER AS DECIMALS, EXAMPLE: 11.1 percent = 0.111 */

$taxRate1 = 0.11;
$totalTaxRate = $taxRate1;

/* end active tax rate(s) */

/* ADD ADDITIONAL TAX RATES IF NECESSARY
EXAMPLE: 6.17 percent = 0.0617 */

// $taxRate2 = 0.00;
// $totalTaxRate = $totalTaxRate + $taxRate2;

// $taxRate3 = 0.00;
// $totalTaxRate = $totalTaxRate + $taxRate3;

// etc.
/* end tax rate(s) */

class Burger { 
    public $ID=0;
    public $name="";
    public $description="";
    public $imageName="";
    public $price=0;
    public $quantity=0;
    // $extras array not functioning with $burgers declared as array //
    // public $extras = array();

    public function __construct($ID, $name, $description, $price, $imageName){ 
        $this->ID = $ID;
        $this->name = $name;
        $this->description = $description; 
        $this->price = $price;
        $this->quantity = 0; 
        $this->imageName = $imageName; 
    }

// addExtra function not working with $burgers[] array //

//     public function addExtra($extras){
//         $this->extras[] = $extras;
//     }// end addExtra //
}// end Burger class //
 
// extras might not work with $burgers declared  as an array:

// $burgers = new Burger('All Eggs and Bacon ', "Eggs and Bacon. What could Go wrong. - $11.50", 11.50, 'egg.jpg');
// $burgers->addExtra("Cheese");
// $burgers->addExtra("Lard");
// $burgers->addExtra("Pork rinds");
// $burger[] = $burgers;
// array conflict //

// 2/14: Testing, code review, added commented code for addExtra function, declared $title, comments, minor edits. Joon 1.5 hr.

//
