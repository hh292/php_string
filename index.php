<?php

  $obj = new main();
  $text_1 = "hh292@njit.edu";
  $text_2 = "my name is himanshu hunge";
  $text_3 = "I Leave in Harrison";
  $text_4 = "My UCID is hh292";
  $text_5 = "I'm doing masters in Information Systems.";
  $text_6 = "i love coding";
  $text_7 = "H";
  $text_8 = "The curriculum core focuses on Data mining and analytics.";
  $text_9 = "I want to become a data scientist";
  text_10 = "Himanshu";
  $obj->print_1($text_1);
  $obj->print_2($text_2);
  $obj->print_3($text_3);
  $obj->print_4($text_4);
  $obj->print_5($text_5);
  $obj->print_6($text_6);
  $obj->print_7($text_7);
  $obj->print_8($text_8);
  $obj->print_9($text_9);
  $obj->print_10($text_10);

  class main {

    public function __construct() {


      echo '<h1>********PHP Inbuilt String Functions ******** </h1>';

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

  // function 4 : strpbrk ...hh292

    public function print_4($text_4)
    {
        echo'<hr>';
        echo'<h2> Function Name : strpbrk </h2></br>'; 
        echo 'Description: Search a string for any of a set of characters. Here, In this example the set of character is --->  <b><i> is </i></b> :'."\r";    
    	echo '</br>Input --->'.$text_4."\r";

    	$domain = strpbrk($text_4,'is');
    	echo '</br>Output ---> '.$domain."\r";
    } 

  // function 5 : strpos ...hh292

    public function print_5($text_5)
    {
    	echo'<hr>';
        echo'<h2> Function Name : strpos </h2></br>'; 
        echo 'Description: Find the position of the first occurrence of a substring in a string.Here,In this example the position character set is --->  <b><i>In</i></b>' ."\r"; 
        echo '</br>Input --->'.$text_5."\r";
    	$domain = strpos($text_5,"In");
    	echo '</br>Output --->'.$domain."\r";
    }

  
   // function 6 : strtoupper ...hh292
  
    public function print_6($text_6)
    {
    	echo'<hr>';
        echo'<h2> Function Name : strtoupper </h2></br>'; 
        echo 'Description: Make a string uppercase.' ."\r"; 
        echo '</br>Input --->'.$text_6."\r";
    	$domain = strtoupper($text_6);
    	echo '</br>Output --->'.$domain."\r";
    }
  
  // function 7 : ord ...hh292
  
    public function print_7($text_7)
    {

    	echo'<hr>';
        echo'<h2> Function Name : ord </h2>'; 
        echo '</br>Description: Return ASCII value of character. Here in this example we are getting the ASCII vaalue of <b> H </b> ' ."\r"; 
        echo '</br>Input --->'.$text_7."\r";
    	$domain = ord($text_7);
    	echo '</br>Output --->'.$domain."\r";

    }

  // function 8 : wordwrap ...hh292
  
    public function print_8($text_8)
    {
    	echo'<hr>';
        echo'<h2> Function Name : wordwrap </h2></br>'; 
        echo 'Description: Wraps a string to a given number of characters. Here the wrapping width is <b>10</b> : </br>' ."\r"; 
        echo 'Input --->'.$text_8."\r";
    	  $domain = wordwrap($text_8, 10, "<br/>\n");
   	    echo '</br>Output --->'.$domain."\r";

    }
  // function 9 : str_word_count ...hh292
  
    public function print_9($text_9)
    {
        echo'<hr>';
        echo'<h2> Function Name : str_word_count </h2></br>';
        echo'Description: counts the number of words in a string </br>' ."\r";
        echo 'Input --->'.$text_9."\r";

        $domain = str_word_count($text_9);
        echo '</br>Output --->'.$domain."\r";

    }   
  
  // function 10 : str_split ...hh292

    public function print_10($text_10)

    {

    	echo'<hr>';
    	echo'<h2>Function Name : str_split </h2></br>';
    	echo'Description:Convert a string to an array.Here, In this example the split_length is <b> 2 </b> ' ."\r";
		  echo '</br>Input --->'.$text_10."\r";

      $domain = str_split($text_10, 2);
		  echo'</br>Output --->'."\r";
    	print_r($domain);
      echo '<hr>';    
    }

    public function __destruct() {

     echo '</br> <h3>Finally I\'m Done with string functions. </h3> </br>';
     echo '</br> **********************Copyright Assignment @Himanshu Hunge (hh292) Date: 24thSept\'17*********************************';
  
   } 
}
