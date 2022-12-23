<div class="page-header">
    <h1>Report</h1>
</div>

<div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h3>Laporan Monitoring Deteksi Hujan</h3>
			
<?php 
	include('config.php');

$koneksi = mysqli_connect('localhost', 'root', '', 'gis');
$query = mysqli_query($koneksi, "SELECT * FROM tb_monitor ORDER BY id_monitor DESC LIMIT 1 ");
	while ($data = mysqli_fetch_array($query)) {
?>

	Waktu update terakhir :	(<?php echo $data['waktu'] ?>) Tanggal : (<?php echo $data['tanggal'] ?>)
		
 <br> 
 <br> 
 <br> 
 
 <style>

.box1{
display:inline-block;	
width:300px;
height:300px;
background:navy;
border:solid 3px black;
border-radius: 10px;
}
</style>       
		
        <div class="row justify-content-center fs-5 text-center">
        <div class="col-md-6 mb-3">
		<div class="box1">
            <div class="card" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="600">
              <br>
			  <br>
			  <br>
			  <br>
			  <h4>Nilai Hujan</h4>
              <div class="card-body">
                <p class="card-text">
                <div class="nilai">
		             <?php echo $data['hujan'] ?>
		        </div>
                </p>
              </div>
			  </div>
            </div>
          </div>
		  
          <div class="col-md-6 mb-3">
		  <div class="box1">
            <div class="card" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="800">
            <br>
			<br>
			<br>
			<br>
			<h4>Hasil Nilai</h4>
              <div class="card-body">
                <p class="card-text">
                <?php 
		            $data['hujan'];
		            if($data['hujan']>60)
	             {
	                echo "Hujan <br> Lebat"; }
		   
	                else if($data['hujan']<60 && $data['hujan']>40)
	            {
	                echo "Hujan <br> Sedang"; }
		   
	                else if($data['hujan']<40 && $data['hujan']>1)
	            {
	                echo "Hujan <br> Ringan"; } 
		   
		            else
	            {
	                echo "Tidak <br> Hujan"; }
		   
		        ?>
                </p>
              </div>
			  </div>
            </div>
          </div>
      </div>
<br>	  
<br>	  
<br>	  
	<?php } ?>
        <div class="d-grid gap-2 col-6 mx-auto">
            <a class="btn btn-primary" role="button" href="hapus.php">Reset Data</a>
        </div>
		
		</div>
		</div>
	</div>