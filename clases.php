<?php 

	class Matematica{

		public static function Sumar($n1,$n2)
		{
			$suma=$n1+$n2;
			return $suma;
		}

		public static function Resta($n1,$n2)
		{
			$resta=$n1-$n2;
			return $resta;
		}

		public static function Multiplicacion($n1,$n2)
		{
			$multiplicacion=$n1*$n2;
			return $multiplicacion;
		}

		public static function Division($n1,$n2)
		{
			$division=$n1/$n2;
			return $division;
		}
	}

?>