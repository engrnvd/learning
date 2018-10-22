<?php
    class BattleField extends Igi
    {
        public $actions;
        public $graphics;

        public function __construct($category, $company,$actions,$graphics)
        {
            parent::__construct($category, $company);
            $this->actions = $actions;
            $this->graphics = $graphics;
        }
    }