<?php
    class classRooms
    {
        public $class;
        public $section;
        public $classTeacher;
        public $classStrength;

        public function __construct($class, $section, $classTeacher, $classStrength)
        {
            $this->class = $class;
            $this->section = $section;
            $this->classTeacher = $classTeacher;
            $this->classStrength = $classStrength;
        }

        public function newProperty($department)
        {
            echo "{$department}.";
        }

        public function schoolClasses()
        {
            echo "These are the classes nd their sections.";
        }

        public function printClass()
        {
            echo "Section of my class is $this->section";
        }
    }
$class = new classRooms("1", "A", "Ma'm Samina", "40");
$class->schoolClasses();
echo "<pre>";
print_r($class);
$class->newProperty("science");

echo "<hr>";
$class2 = new classRooms("5", "C", "Ma'm Zahida", "32");
echo "<pre>";
print_r($class2);
$class2->newProperty("scholarShip");
echo "<br>";
$class2->printClass();

?>