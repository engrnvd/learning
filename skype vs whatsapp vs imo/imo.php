<?php

class Imo extends Whatsapp
{
    public $videoCalling;
    public $emojis;


    public function __construct($screenSharing, $audioCalling, $chatting, $voiceMessages, $videoCalling, $emojis)
    {
        parent::__construct($screenSharing, $audioCalling, $chatting, $voiceMessages);
        $this->videoCalling = $videoCalling;
        $this->emojis = $emojis;
    }

    public function xInfo()
    {
        parent::xInfo(); // TODO: Change the autogenerated stub
        echo "Is it suitable for video calling? '$this->videoCalling'.<br>";
        echo "emojis? '$this->emojis'.<br>";
    }
}