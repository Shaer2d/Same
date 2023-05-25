<?php 
class Character{
    private $name;
    private $phrase1 ;
    private $phrase2;
    private $level ;
    #constants
    public function __construct($name, $phrase1,$phrase2){
        $this->name=$name;
        $this->phrase1=$phrase1;
        $this->phrase2=$phrase2;
        $this->level=0;
    }
    #methods
    public function speak($phraseNum){
if($phraseNum==1){
    echo $this->phrase1. "\n";
}
if($phraseNum==2){
    echo $this->phrase2. "\n";
}
else{
echo "Invalid number\n";
}

}
public function setLevel($newLevel){
    $this->level=$newLevel;
    echo "Character:\n". $this->name. "\nis at level\n". $this->level;
}
}
$character1=new Character("Kung Fu Panda", "Skadoosh", "You have been blinded by pure awesomeness!
");
$character2=new Character("Spiderman", "My Spider-Sense is tingling", "Your friendly neighbourhood spiderman.
");
$character1->speak(1);
$character2->setLevel(2);
$character2->speak(2);
?>
