<?php
namespace cli;

final class Command {
  public function __construct(){
   // $opts = getopt(null,['serve','help','port:','create']);
    
    $longopts = ["help", "version", "null"];
    $opts = getopt(null, $longopts);
    // options without values are assigned a value of boolean false
    // you must check their existence, not their truthiness
    if (isset($opts["help"])) {
      fprintf(STDERR, "Here is some help!\n");
      exit;
    }
    
    if (isset($opts["null"])) fprintf(STDERR, "Com click is listening \n");;  
    
  }
}


$cc = new Command();