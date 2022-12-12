<?php

class Bootstrap
{


	public function __construct()
	{
		@$url = $_GET["url"];
		$url = rtrim($url, "/");
		$url = explode("/", $url);

		if ($url[0]) :
			$dosyaadi = 'app/controllers/' . $url[0] . '.php';
			if (file_exists($dosyaadi)) :
				include $dosyaadi;
				$anacontrolcum = new $url[0];
				//$anacontrolcum->anasayfa();
				if (isset($url[2])) :
					// method ve parametlerde yanlış girilen değerlerin kontrollerini yapılacak.
					$methodisim = $url[1];
					$anacontrolcum->$methodisim($url[2]);
				else :
					if (isset($url[1])) :
						$methodisim = $url[1];
						$anacontrolcum->$methodisim();
					endif;
				endif;
			else :
				include 'app/controllers/boots.php';
				$anacontrolcum = new boots();
				$anacontrolcum->anasayfa();
			endif;
		else :
			include 'app/controllers/boots.php';
			$anacontrolcum = new boots();
			$anacontrolcum->anasayfa();
		endif;
	}
}
