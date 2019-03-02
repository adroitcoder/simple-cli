<?php
namespace cli;

final class Command {
  
 private $quotes = [
    "Don't let other people get in the way of what you really want.",
    "Life is a collection  of moments. The idea is to have as many good once as you can",
    "In any given moment  we have two options: to step forward  into growth or to step backwards to safety.",
    "Only one thing came make a soule complete, and that thing is Love.",
    "The World's is full of lonely people afraid to make the first move.",
    "You don't have to bend till you break. You just have to get up."
  ];
  
  private function quotemaker()
  {
    return $this->quotes[rand(0,5)];
  
  }
  

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
      fprintf(STDERR, "{$this->quotemaker()}\n");
      exit;
    }
    
    
    if (isset($opts["today"])) {
       $today  = date("M,d,Y h:i:s A");
      fprintf(STDERR, "Today is {$today}\n");
      exit;
    }
    
    if (empty($opts)) {
       $today  = date("M,d,Y h:i:s A");
      fprintf(STDERR, "
      
----------------------------------        |    |\                        /|   |---------------------|     |                        |------------------------
|                                         |    |   \                   /  |   |                     |     |                        |
|                                         |    |     \               /    |   |                     |     |                        |
|                                         |    |       \           /      |   |                     |     |                        |
|                                         |    |        \        /        |   |----------------------     |                        |
|-------------------------------          |    |          \    /          |   |                           |                        |------------------------
                               |          |    |            \/            |   |                           |                        |                             ______       |
                               |          |    |                          |   |                           |                        |                             |            |      *
                               |          |    |                          |   |                           |                        |                             |            |      |
                               |          |    |                          |   |                           |____________            |______________________       |_____       |      |
--------------------------------
______________________________________________________________________________________________________________________________________________________________________________________
\n");
      exit;
    }
    
  }
  
}


$cc = new Command();