<?php 

class Burger { 
    public $name="";
    public $description="";
    public $imageName="";
    public $price=0;
    public $quantity=0;
    // declare $extras array
    // public $extras = array();

    public function __construct($name, $description, $price, $imageName){ 
        $this->name = $name; 
        $this->description = $description; 
        $this->price = $price;
        $this->quantity = 0; 
        $this->imageName = $imageName; 
    }
/*  // addExtra function not working with $burgers[] array
    public function addExtra($extras){
        $this->extras[] = $extras;
    } // end addExtra
*/
}// end Burger class 

// EDIT PAGE TITLE HERE //
$title="Eat More Burgers";
// end page title declaration /

// EDIT BURGER SELELCIONS HERE // 
$burgers[]=new Burger('Steeler', "Delicious Burger made from the best Burger meats. - $5.75", 5.75, 'slider.jpg'); 
$burgers[]=new Burger('Big Ben Burger', "Named after our QB and part owner. This burger has a lot of flavor. - $5.50", 5.50, 'bigBen.jpg'); 
$burgers[]=new Burger('Beefy Beef Burger', "Great Deal for that amount of Beef - $9.50", 9.50, 'beefy.jpg'); 
$burgers[]=new Burger('Cheeky Chicken Burger', "Fresh Frozen Chicken marked up 100% of its actual value. Yum! - $9.50", 9.50, 'chicken.jpg'); 
$burgers[]=new Burger('Deal of the Day', "Get two of our delicious Burgers- $10.50", 10.50, 'double.jpg'); 
$burgers[]=new Burger('Egg-Tacular', "Eggs and more Beef. Delicious. - $9.50", 9.50, 'egg.jpg'); 
$burgers[]=new Burger('Yippy Skippy Burger', "Eggs and more Beef. Delicious. - $11.50", 11.50, 'egg.jpg'); 
$burgers[]=new Burger('All Eggs and Bacon ', "Eggs and Bacon. What could Go wrong. - $11.50", 11.50, 'egg.jpg'); 
$burgers[]=new Burger('Heart Attack Burger ', "Causes heartburn on first bite. - $3.50", 3.50, 'heart.jpg');
// end burger selections //

/*  Problems with addExtra function.
    ight not work with $burgers defined as an array:

$burgers = new Burger('All Eggs and Bacon ', "Eggs and Bacon. What could Go wrong. - $11.50", 11.50, 'egg.jpg');
$burgers->addExtra("Cheese");
$burgers->addExtra("Lard");
$burgers->addExtra("Pork rinds");
$burger[] = $burgers;
// array conflict //
*/

/* 2/14: Testing, code review, added commented code for addExtra function, declared $title, comments, minor edits. Joon 1.5 hr.

*/
