<?php

require_once "./AbstractFightersClass.php";

class SwordsmenClass extends AbstractFightersClass{

	private $speed;

	private $hitPower;

	private $protectionPower;

	public function __construct(int $speed, int $hitPower, int $protectionPower)
	{
		$this->speed = $speed;
		$this->hitPower = $hitPower;
		$this->protectionPower = $protectionPower;
	}

	public function getOptions()
	{
		return $this->speed . " " . $this->hitPower . " " . $this->protectionPower;
	}

	public function OutputValues()
	{
		$swordsmen->getOptions();
	}
}