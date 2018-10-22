<?php
    class Honda
    {
        public $BikeName;
        public $Company;

        public function __construct($BikeName,$Company)
        {
            $this->BikeName = $BikeName;
            $this->Company = $Company;
        }

        public function moreInfo()
        {
            echo "Name of this bike is $this->BikeName.<br>";
            echo "nd its company name is $this->Company.<br>";
        }
    }
