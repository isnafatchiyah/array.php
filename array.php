 <! DOCTYPE html>
<html>
  <head>
   <meta charset="utf-8">
<title>Belajar PHP</title>
</head>
<body

   <h1>Array PHP</h1>
 
   <?php
    //------- tipe data array ------
	
	$kotak = array('anjing', 'kurakura', 'koala', 'banteng',);
	$nama = ['Jaehyun', 'Jeno', 'Jaemin'];
	
	//print_r($kotak);
	//echo $nama(0);
	
	//------- metode array -------
	//array_unique, _reverse, shuffle, count, sort
	
	
	
	//echo count($nama);
	
	//---------- Associative Array ----------
	// key => isi
	
	$data = array( "nama" => "jaemin" ,
                   "umur" => "21" ,
	               "kerja" => "idol",
			);	   
	$data2 = array( "pacar" => "belum ada",
                   "laptop" => "ChromeBook" ,
	         );     		   
				   
				   
				   
				   
				   
			   
	//print_r($data);
	//$data['nama'] = "Jaemin Na";
    //echo " Nama adalah " . $data['nama'];
	
    //---------- method assosiatif array -----
	//array_values array_keys array_merge
	//print_r( array_merge($data, $data2) );
	
	///----------multi dimensi array----------
	
	$data = array(
	        array("programer", "21", "males"),
            array("designer", "24", "rajin"),
            array("manager", "34", "males banget"),
			);
			
	// 00 01 02		
	//10 11 12
	//20 21 22
	
	$data[2] [0] = "proyek manager";
	echo $data[2] [0];
	
	
	
	?>
	
	</body>
</html>