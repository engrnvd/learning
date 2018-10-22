<?php

class Skype
{
    public $screenSharing;
    public $audioCalling;

    public function __construct($screenSharing, $audioCalling)
    {
        $this->screenSharing = $screenSharing;
        $this->audioCalling = $audioCalling;
    }

    public function xInfo()
    {
        echo "Is Screen sharing available '$this->screenSharing'.<br>";
        echo "AudioCalling feature ? '$this->audioCalling'.<br>";
    }
}