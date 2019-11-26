<?php

require_once 'RemoteControl.php';
require_once 'commands/NoCommand.php';
require_once 'commands/LightCommand/LightOffCommand.php';
require_once 'commands/LightCommand/LightOnCommand.php';
require_once 'commands/GarageDoorCommand/GarageDoorOpenCommand.php';
require_once 'commands/GarageDoorCommand/GarageDoorCloseCommand.php';
require_once 'commands/CeilingFanCommand/CeilingFanHighCommand.php';
require_once 'commands/CeilingFanCommand/CeilingFanMediumCommand.php';
require_once 'commands/CeilingFanCommand/CeilingFanLowCommand.php';
require_once 'commands/CeilingFanCommand/CeilingFanOffCommand.php';
require_once 'commands/TVCommand/TVOnCommand.php';
require_once 'commands/TVCommand/TVOffCommand.php';
require_once 'commands/StereoCommand/StereoOffCommand.php';
require_once 'commands/StereoCommand/StereoOnCommand.php';
require_once 'commands/MacroCommand/MacroCommand.php';

$remote = new RemoteControl();

$light    = new Light();
$lightOn  = new LightOnCommand($light);
$lightOff = new LightOffCommand($light);

$garageDoor      = new GarageDoor();
$garageDoorOpen  = new GarageDoorOpenCommand($garageDoor);
$garageDoorClose = new GarageDoorCloseCommand($garageDoor);

$ceilingFan       = new CeilingFan();
$ceilingFanLow    = new CeilingFanLowCommand($ceilingFan);
$ceilingFanMedium = new CeilingFanMediumCommand($ceilingFan);
$ceilingFanHigh   = new CeilingFanHighCommand($ceilingFan);
$ceilingFanOff    = new CeilingFanOffCommand($ceilingFan);

$TV    = new TV();
$TVOn  = new TVOnCommand($TV);
$TVOff = new TVOffCommand($TV);


$stereo        = new Stereo();
$stereoOn      = new StereoOnCommand($stereo);
$stereoOff     = new StereoOffCommand($stereo);
$macroOnArray  = [
    $TVOn,
    $stereoOn,
    $lightOn,
];
$macroOffArray = [
    $TVOff,
    $stereoOff,
    $lightOff,
];

$macroOn  = new MacroCommand($macroOnArray);
$macroOff = new MacroCommand($macroOffArray);

$remote->setCommand(0, $lightOn, $lightOff);
$remote->setCommand(1, $garageDoorOpen, $garageDoorClose);
$remote->setCommand(2, $ceilingFanLow, $ceilingFanOff);
$remote->setCommand(3, $ceilingFanMedium, $ceilingFanOff);
$remote->setCommand(4, $ceilingFanHigh, $ceilingFanOff);
$remote->setCommand(5, $ceilingFanHigh, $ceilingFanOff);
$remote->setCommand(6, $macroOn, $macroOff);

echo $remote->toString();

$remote->onButtonWasPushed(0);
$remote->undoButtonPushed();
$remote->undoButtonPushed();
$remote->undoButtonPushed();
$remote->offButtonWasPushed(1);
$remote->undoButtonPushed();
$remote->onButtonWasPushed(2);
echo '<br>';
$remote->undoButtonPushed();
$remote->undoButtonPushed();
$remote->undoButtonPushed();
echo '<br>';
$remote->offButtonWasPushed(2);
$remote->onButtonWasPushed(3);
$remote->onButtonWasPushed(4);
echo '<br>';
$remote->undoButtonPushed();
$remote->undoButtonPushed();
$remote->undoButtonPushed();
echo '<br>';
$remote->onButtonWasPushed(4);
$remote->onButtonWasPushed(6);
echo '<br>';
$remote->undoButtonPushed();
$remote->undoButtonPushed();
$remote->undoButtonPushed();
echo '<br>';
$remote->offButtonWasPushed(6);