<?php
    class Yamaha extends Honda
    {
        public $EngineCapability;
        public $SitiingCapability;

        public function __construct($BikeName, $Company,$EngineCapability,$SitiingCapability)
        {
            parent::__construct($BikeName, $Company);
                $this->EngineCapability = $EngineCapability;
                $this->SitiingCapability = $SitiingCapability;
        }

        public function moreInfo()
        {
            parent::moreInfo(); // TODO: Change the autogenerated stub
            echo "its Engine capability is $this->EngineCapability.<br>";
            echo "its sitting capability is $this->SitiingCapability.";
        }
    }
