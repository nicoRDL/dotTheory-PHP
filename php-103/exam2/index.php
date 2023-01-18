<?php
function calculate_bmi_english($heightInches,$weightPounds){ // function to compute the BMI using english measurements
   $index =0;
   if($heightInches !=0 && $weightPounds !=0) // checks the inputs if the have a value above zero
       $index = round($weightPounds/($heightInches*$heightInches)* 703,2);
       $bmi="";
  /* if-else block below compares 
  the computed BMI to a given rating 
  to output the ranking */
   if ($index < 18.5) {
       $bmi="underweight - BMI : " . $index;
   } else if ($index < 25) {
       $bmi="normal - BMI : ". $index;
   } else if ($index < 30) {
       $bmi="overweight - BMI : " . $index;
   } else {
       $bmi="obese - BMI : " .$index;
   }
   echo $bmi;
}
calculate_bmi_english(69,150); // calls the function
?>
