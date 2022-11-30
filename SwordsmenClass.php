<?php

require_once "AbstractFightersClass.php";

class SwordsmenClass extends AbstractFightersClass{

	private string $fighter;

	private float $speed;

	private float $hitPower;

	private float $protectionPower;

	public function __construct(string $fighter, float $speed, float $hitPower, float $protectionPower)
	{
		$this->fighter = $fighter;
		$this->speed = $speed;
		$this->hitPower = $hitPower;
		$this->protectionPower = $protectionPower;
	}

	public function getSpeed() :string
	{
		return "Скорость " . $this->fighter . " - " . $this->speed . "; ";
	}

	public function getHitPower() :string
	{
		return "Сила удара " . $this->fighter . " - " . $this->hitPower . "; ";
	}

	public function getProtectionPower() :string
	{
		return "Сила защиты " . $this->fighter . " - " . $this->protectionPower . "; ";
	}

	public function getOptions() :string
	{
		return $fighters->getSpeed();
		return $fighters->getHitPower();
		return $fighters->getProtectionPower();
	}
}
