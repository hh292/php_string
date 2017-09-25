<?php

  $obj = new main();
  $text_1 = "hh292@njit.edu";
  $text_2 = "my name is himanshu hunge";
  $text_3 = "I Leave in Harrison";
  $obj->print_1($text_1);
  $obj->print_2($text_2);
  $obj->print_3($text_3);
  class main {

    public function __construct() {


      echo '<h1>**********PHP Inbuilt String Functions ********** </h1>';

    }
   
   // function 1 : strstr  ...hh292
    
      public function print_1($text_1) {

       echo '<h2> Function Name : strstr </h2>'."\r";
       echo 'Description: Find the first occurrence of a string</br>'."\r";	
       echo 'Input --->'.$text_1."\r";
      
       $domain = strstr($text_1, '@');
       echo '</br> 1) First output (If needle is not true) --->  '.$domain."\r";

       $domain = strstr($text_1,'@',true);
       echo '</br> 2) Second output (If needle is true) ---> '.$domain;

    }
   // function 2 : ucwords ...hh292
   
     public function print_2($text_2)
    {
      echo'<hr>';	
      echo '<h2> Function Name : ucwords </h2>'."\r";
      echo 'Description: Uppercase the first character of each word in a string </br>'."\r";
      echo 'Input --->  '.$text_2."\r";
     
      $domain = ucwords($text_2);
      echo '</br>Output --->  '.$domain."\r";
      
    }
    
   // function 3 : strrev  ...hh292

    public function print_3($text_3)
    {
     echo'<hr>';
     echo '<h2> Function Name : strrev </h2>'."\r";
     echo 'Description: Reverse the string </br>';
     echo 'Input --->'.$text_3."\r";

     $domain = strrev($text_3);
     echo '</br>Output --->'.$domain."\r";
    }
    
    public function __destruct() {

     echo '</br> <h3>Finally I\'m Done with string functions. </h3> </br>';
     echo '</br> ********************Copyright Assignment @Himanshu Hunge (hh292)***************************';
  
   } 
  
}
