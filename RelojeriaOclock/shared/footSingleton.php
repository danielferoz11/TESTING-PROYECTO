<?php
	class footSingleton
	{
		static private $instancia = null;
		private function __construct($titulo)
		{
				?>
                <hr />
                <marquee><?php echo $titulo ?></marquee>
                </body>
                </html>
                <?php
		}	
		public static function getFoot($titulo)
		{
			if(self::$instancia == null)
				self::$instancia = new static($titulo);
			return self::$instancia;	
		}
	}
?>