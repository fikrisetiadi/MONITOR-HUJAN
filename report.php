

    <script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript"> <script type="jquery-latest.js"</script>
		<script language="javascript">
		$(document).ready(function() {
		$(document).ready(function() {
			$("#konten").load("laporanhujan.php");
			var refreshid = setInterval(function() {
			$("#konten").load('laporanhujan.php');
		},500);
		$.ajaxSetup({ cache: false});
			});
		});
		
		
</script>
  </head>
  
  <div id="konten"></div>

