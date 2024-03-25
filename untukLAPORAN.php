					  if($v_hargaproduk=='1'){
						   $sqlbr="<= '1001'"; 
				      }else if ($v_hargaproduk=='2'){
						   $sqlbr=">= '1001' AND hargaproduk <'2000'"; 
				      }else if ($v_hargaproduk=='3'){
						   $sqlbr=">= '2001' AND hargaproduk <'3000'"; 
				      }else if ($v_hargaproduk=='4'){
						   $sqlbr=">= '3001' AND hargaproduk <'4000'"; 
				      }else if ($v_hargaproduk=='5'){
						   $sqlbr=">= '4001'"; 
				      }else{
						   $v_hargaproduk="%";
						   $sqlbr="LIKE '$v_hargaproduk'"; 
                      }
					  
                       echo $sql="SELECT * FROM tbl_kategori AS B,tbl_produk AS A 
					              WHERE A.idkategori=B.idkategori AND 
								  namaproduk LIKE '$v_namaproduk' AND 
								  hargaproduk $sqlbr AND 
								  B.idkategori LIKE '$v_idkategori' ";