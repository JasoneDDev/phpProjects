<html>
    <body>

        <?php
            class Animal{
                public $species;
                private $breed;
                private $color;
                private $name;    
                
                function __construct($aSpecies, $aBreed, $aColor, $aName){// runs on creation
                    echo "new animal created";
                    $this->species = $aSpecies;
                    $this->breed = $aBreed;
                    $this->color = $aColor;
                    $this->setName($aName);
                }

                function listAll(){
                    echo "This is $this->name, a  $this->color $this->breed from the $this->species species.<br>";
     
                }

                function getName(){
                    return $this->name;
                }
                function setName($theName){
                    $this->name = $theName;
                }
            }

            class AnimalPlus extends Animal{

                function speak(){
                    if($this->species == "Feline"){
                        echo "<br> Meow Meow!";

                    }

                }

            }

            $cat = new Animal("Feline", "House Cat", "Orange", "Jack");
            $cat2 = new AnimalPlus("Feline", "House Cat", "Orange", "Jack");
            
            echo "<br>", $cat->listAll();
            echo $cat->getName();
            $cat->setName("Jack the cat");
            echo "<br>", $cat->getName();
            echo $cat2->speak();
            ?>
</body>
</html>