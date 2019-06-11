

<?php $this->load->view("v_header.php") ?>

<html>
<head>
    <title>Portal Perbandingan Biaya Kuliah</title>
    
    <script>
		var baseurl = "<?php echo base_url("index.php/"); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
    </script>
    <script src="<?php echo base_url("js/jquery.min.js"); ?>"></script> <!-- Load library jquery -->
    <script src="<?php echo base_url("js/config.js"); ?>"></script> <!-- Load file process.js -->
</head>
<body>

<input type="text" id="keyword">
<button type="button" id="btn-search">Search</button>
<a href="<?php echo base_url("index.php/c_search"); ?>">Reset</a>
<a href="<?php echo base_url("index.php/c_search/show_all"); ?>">Show All</a>
<br>

<div id="view">
	<?php $this->load->view('v_search_result', array('ukt'=>$ukt)); // Load file view.php dan kirim data  ?>
</div>

</body>
</html>
