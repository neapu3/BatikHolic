<?php
switch ($_GET['page']){	
	case 'home' 			: if(!file_exists("demo.html"))
							die("File beranda tidak ada");
							include "demo.html";
							break;
	case 'howtobuy' 			: if(!file_exists("HowToBuy.php"))
							die("File How tidak ada");
							include "HowToBuy.php";
							break;

	case 'contact' 			: if(!file_exists("contact.php"))
							die("File How tidak ada");
							include "contact.php";
							break;

	case 'produk' 			: if(!file_exists("produk.php"))
							die("File Produk tidak ada");
							include "produk.php";
							break;
	case 'berita' 			: if(!file_exists("halaman_berita.php"))
							die("File berita tidak ada");
							include "halaman_berita.php";
							break;
	case 'visi' 			: if(!file_exists("visi.php"))
							die("File visi tidak ada");
							include "visi.php";
							break;
	case 'cabang' 			: if(!file_exists("lokasi_holic.php"))
							die("File cabang tidak ada");
							include "lokasi_holic.php";
							break;
  																							
}
?>