<?php

    class headSingleton{

        static private $instancia=null;
        private function __construct($titulo){
            ?>
            <html>
                <head>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <title><?php echo $titulo?></title>

                </head>
                <body>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-md">
                <a class="navbar-brand" href="#"></a>
                </div>
                </nav>
                  <h1 style="text-align: center;" ><?php echo $titulo?></h1>
                  
                
				 <!-- <hr /> 
                <marquee>hola mundo</marquee>
                </body>
                </html>
				-->
                <?php	    

        }
        public static function getHead($titulo)
		{
			//echo $instancia;
			if(self::$instancia === null)
			{
				 
				self::$instancia = new static($titulo);
			}
			return self::$instancia;	
		}
        
    }



?>