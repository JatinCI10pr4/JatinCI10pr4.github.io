<?php

// class - keyword is used to define a class

class Team{
    public $captain;
    public $players = array();

    // Creating a constructor 
    
   public function __construct($cap="",$play=array()){
        $this->captain = $cap;
        $this->players = $play;
    }


    // function for adding a player into the team
    public function add_player( $newplayer){
          $this->players[count($this->players)] = $newplayer; // this keyword
    }

    // function for printing name of all the members of the team
    public function print_team(){
    print "Captain : ".$this->captain;
    print "<br><br>"."Players :"."<br>";
    foreach($this->players as $key => $values){
        print "".$values."<br>";
        }
    }


    // defining a static method 
    public static function team_size($obj){
        return count($obj->players)+1;
    }
}



// Creating an object 
$India = new Team();


// Accessing and defining the properties and functions of the object 
$India->captain = "Virath Kholi";
$India->players = array("Dhoni","Jatin","Kapil","Rahul","Dravid");
$India->add_player("Aashi");
$India->print_team();

// Calling the static method
print "Total members in the team INDIA : ".Team::team_size($India);

// or you can store the returned value into a variable and then print it
// like its done below just uncomment the code and run it 
// $strength = Team::team_size($India);
// print "<br><br>Total members in the team INDIA : ".$strength;

print "<br><br>***********************************************<br>";

// ***************************************************************************

// making another object with the help of the constructor

$RealMadrid = new Team('David Beckham',array('Jatin','Cristiano Ronaldo'));
print("<br>");
$RealMadrid->print_team();








?>