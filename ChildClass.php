<?php
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {
		private $color;

		public function __construct($name, $mpg, $tankSize) {
			parent::__construct("Motorcycle-".$name, 2, $tankSize, $mpg);
		}

		public static function restore($saved) {
			echo "Restoring motorcycle. <br/><br/>";
			$restored = unserialize($saved);
			return $restored;
		}

		public function coast() {
			echo $this->distTraveled;
			$this->distTraveled += 1;
			echo "<span class='coast'>";
			echo "Coasted for 1 mile, no gas used.";
			echo "</span><br/>";
		}

		public function save() {
			echo "Saving " . $this->name . "<br/>";
			return serialize($this);
		}

		function __destruct()
    {
      echo "<span class='destroy'>Uh Oh! ", $this->name, " got in an accident!</span><br/>";
    }


	}
