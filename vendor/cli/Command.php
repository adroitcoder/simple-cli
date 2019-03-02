<?php
namespace cli;

final class Command {
  public function __construct(){
   
    $longopts = ["help", "version","quote", "today"];
    $opts = getopt(null, $longopts);
    // options without values are assigned a value of boolean false
    // you must check their existence, not their truthiness
    if (isset($opts["help"])) {
      fprintf(STDERR, "Here is some help!\n");
      exit;
    }
    
    if (isset($opts["version"])) {
      fprintf(STDERR, "v1.0.0\n");
      exit;
    }
    
    if (isset($opts["quote"])) {
      fprintf(STDERR, "Here is some help!\n");
      exit;
    }
    
    
    if (isset($opts["today"])) {
       $today  = date("M,d,Y h:i:s A");
      fprintf(STDERR, "Today is {$today}\n");
      exit;
    }
      
    
  }
  
  
  private function quotemaker()
  {
  
  
  }
}


$cc = new Command();