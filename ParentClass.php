<?php
	// This is the file for the parent class

	class ParentClass {

		protected $name;
		protected $wheelCount;
		protected $tankSize;
		protected $mpg;
		protected $gasLeft;
		protected $distTraveled;

		public function __construct($newName, $newWheelCount, $newTankSize, $newMpg) {
			$this->name = $newName;
			$this->wheelCount = $newWheelCount;
			$this->tankSize = $newTankSize;
			$this->mpg = $newMpg;
			$this->gasLeft = $newTankSize;
			$this->distTraveled = 0;
		}

		public function start() {
			echo "<div class='wrap'>";
			$this->showInfo();
		}

		public function end() {
			echo "<br/><br/><span class='summary'>";
			echo "Traveled " . $this->distTraveled . " miles.";
			echo "<span/><br/>";
			echo "</div>";
		}

		public function drive($miles) {
			$gasUsed = $miles / $this->mpg;
			if($this->gasLeft > $gasUsed) {
				$this->distTraveled += $miles;
				$this->gasLeft = $this->gasLeft - $gasUsed;
				echo "Drove " . $miles . " miles. ";
				echo "Used " . $gasUsed . " gallons. ";
				echo $this->gasLeft . " gallons left. <br/>";
			}
			else {
				$gasUsed = $this->gasLeft;
				$this->gasLeft = 0;
				$dist = $gasUsed * $this->mpg;
				$this->distTraveled += $dist;
				echo "<span class='empty'> Drove " . $dist . " miles before the tank ran out.</span><br/>";
			}
		}

		public function fillUp() {
			$gasFilled = $this->tankSize - $this->gasLeft;
			$this->gasLeft = $this->tankSize;
			echo "<span class='fill'>Added " . $gasFilled . " gallons to the tank. </span><br/>";
		}

		public function __toString() {
			$out = "<span class='car-name'><b>" . $this->name . ": </b></span><br/>"
				. $this->wheelCount ." wheels. "
				. $this->mpg . " Miles/Gallon. "
				. $this->tankSize . " gallon tank."
				. "<br/><br/>";
			return $out;
		}

		public function showInfo() {
			echo $this;
		}

		function __destruct()
    {
      echo "<span class='destroy'>Oh No! ", $this->name, "'s engine exploded! </span><br/>";
    }

	}
