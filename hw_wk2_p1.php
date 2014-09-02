
<?php

// for($i = 0, $i <= 12, $i++)
// $month_name = date()	
// $num = cal_days_in_month(CAL_GREGORIAN, 8, 2014); // 31
// echo "There was $num days in January 2014";

////


////

$new_cars = array();

$cars = array(
    'Toyota Solara' => array(
        'year' => 2001,
        'doors' => 2,
        'color' => 'gray',
        'mileage' => 100000,
        'sunroof' => true,
        'convertable' => false,
        'license' => 'JSRULZ',
    ),

    'Honda Odyssey' => array(
        'year' => 2004, 
        'doors' => 4,
        'color' => 'marron',
        'mileage' => 60000,
        'sunroof' => false,
        'convertable' => false,
        'license' => 'ILUVPHP',
    ),

    'Cadillac Escalade' => array(
        'year' => 2014,
        'doors' => 4,
        'color' => 'white',
        'mileage' => 5000,
        'sunroof' => false,
        'convertable' => false,
        'license' => 'HTML5',
    ),

);

function list_cars($cars){
	
 if($attributes['sunroof'] == 'true'){
        $i = 'Yes';
    }else{
            $i = 'No';
        }
       if($attributes['convertable'] == 'true'){
        $conv = 'Yes';
       } else{
        $conv = 'No';
       }

    foreach($cars as $make_model => $attributes){  
        echo PHP_EOL. "I own a {$attributes['year']} $make_model. Details Below:" . PHP_EOL;
        echo "_______________________________________" . PHP_EOL;
        echo "{$attributes['doors']} door {$attributes['year']} $make_model" . PHP_EOL;
        echo "Color: {$attributes['color']}" . PHP_EOL;
        echo "Mileage: {$attributes['mileage']}" . PHP_EOL;
        echo "sunroof: $i" . PHP_EOL;
        echo "Convertable: $conv" . PHP_EOL;
        echo "License NO: {$attributes['license']}" . PHP_EOL;

	}
} 

function get_input($upper = FALSE) 
 // Get input and strip whitespace and newlines, 
 // and convert to uppercase if $upper is true
{

    if ($upper) {
        //if $upper == TRUE is a given with an if statement.
          $input = strtoupper(trim(fgets(STDIN)));
    }  

    else{
    $input = trim(fgets(STDIN));
    }
        
    return $input;
}


function add_car($new_cars){
    //$new_list = ''; 
    echo "got to add car"; 



for($cars = list_cars($cars)){
    echo $cars;

    echo "To add a new car (X) or (Q)uit." . PHP_EOL;

     $input = get_input(TRUE);

///($input){
        case 'x':
        $new_cars = get_input();
        $new_cars = add_car($new_cars);
        echo $new_cars;
        break;
        
     

}while($input != 'Q');
// function add_car(){
// $cars = list_cars($cars);
// echo $cars;
echo "end";





exit(0);

?>
