<?php
require '11_Objects.php';

class Football extends Team{
    public $strength;
    
    public function __construct($strength,$kap,$team_members){
        $this->strength = $strength;
        parent::__construct($kap,$team_members);
    }

}

$RealMadrid = new Football(11,"David Beckham",array("Jatin","CR7","Messi","Ashi"));

    $RealMadrid->print_team();
    print $RealMadrid->strength;
 

?>
