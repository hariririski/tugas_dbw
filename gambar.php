<div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <?php
		  $gambar=$_GET['gambar'];
		  
                  include'maps/db.php';
                  $i=0; 
                  $tampil = "SELECT * from desa,kabupaten_kota,kategori,kecamatan,provinsi,transportasi WHERE transportasi.id_desa=desa.id_desa and transportasi.id_kabupaten_kota=kabupaten_kota.id_kabupaten_kota and transportasi.id_kategori=kategori.id_kategori and transportasi.id_kecamatan=kecamatan.id_kecamatan and provinsi.id_provinsi and provinsi.id_provinsi=kabupaten_kota.id_provinsi and kabupaten_kota.id_kabupaten_kota=kecamatan.id_kabupaten_kota and kecamatan.id_kecamatan=desa.id_kecamatan and transportasi.id_transportasi='$gambar'";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
		  
		  
		  ?>
          <h4 class="modal-title"><?php echo $data['nama']?></h4>
        </div>
        <div class="modal-body">
         
          
		  <?php
	
                   $i++;
                   
                  
                  
                   echo '
                   
                    
                  <img src="maps/foto/'.$data['foto'].'" width="100%">
                  ';
                   }
  ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>