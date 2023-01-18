<?php
  $brand_array = array('Nike', 'Adidas', 'Puma', 'Converse'); //Numeric or Indexed Array

  $nba_players = array('Lebron James' => 'Lakers',
                       'Derrick Rose' => 'Knicks',
                       'Steph Curry' => 'Warriors'                    
  ); // Associative Array 

  $resto_data = array('Jollibee' => array('Branches'=>'12', 'Managers'=>'15', 'Employees'=>'50'),
                      'Mcdonalds' => array('Branches'=>'18', 'Managers'=>'10', 'Employees'=>'70'),
                      'KFC' => array('Branches'=>'8', 'Managers'=>'9', 'Employees'=>'40'),                 
  ); // Multidimentional Array

  // Function for Activity C on Multidimentional Array
  $least_managers;
  $most_employees;

  if($resto_data['Jollibee']['Managers']<$resto_data['Mcdonalds']['Managers']) {
    if($resto_data['Jollibee']['Managers']<$resto_data['KFC']['Managers']) {
      $least_managers = $resto_data['Jollibee'];
    } else {
      $least_managers = $resto_data['KFC'];
    }
  } else {
    if($resto_data['Mcdonalds']['Managers']<$resto_data['KFC']['Managers']) {
      $least_managers = $resto_data['Mcdonalds'];
    } else {
      $least_managers = $resto_data['KFC'];
    }
  }

  if($resto_data['Jollibee']['Employees']>$resto_data['Mcdonalds']['Employees']) {
    if($resto_data['Jollibee']['Employees']>$resto_data['KFC']['Employees']) {
      $most_employees = $resto_data['Jollibee'];
    } else {
      $most_employees = $resto_data['KFC'];
    }
  } else {
    if($resto_data['Mcdonalds']['Employees']>$resto_data['KFC']['Employees']) {
      $most_employees = $resto_data['Mcdonalds'];
    } else {
      $most_employees = $resto_data['KFC'];
    }
  }

  $least_managers_key = array_search($least_managers, $resto_data);
  $least_managers_value = $resto_data[$least_managers_key]['Managers'];

  $most_employees_key = array_search($most_employees, $resto_data);
  $most_employees_value = $resto_data[$most_employees_key]['Employees'];
  
  
  // SUMMARY OF OUTPUT
  echo nl2br("Activity A: Indexed Array\n");
  print_r($brand_array);
  echo nl2br("\n3rd value is ". $brand_array[2]."\n");
  echo nl2br("\n");

  echo nl2br("Activity B: Associative Array\n");
  print_r($nba_players);
  echo nl2br("\nTeam of Steph Curry is ".$nba_players['Steph Curry']."\n");
  echo nl2br("\n");

  echo nl2br("Activity C: Multidimensional Array\n");
  print_r($resto_data);  
  echo nl2br("\nChain with least number of managers is ".$least_managers_key." with ".$least_managers_value." managers.");
  echo nl2br("\nChain with most number of employees is ".$most_employees_key." with ".$most_employees_value." employees.");
?>
