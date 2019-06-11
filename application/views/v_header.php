
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>uktQ.com</title>
    <!-- CSS  -->
    <link href= <?php echo base_url("css/materialize.css")?> type="text/css" rel="stylesheet" media="screen,projection" />
    <link href=<?php echo base_url("css/style.css")?> type="text/css" rel="stylesheet" media="screen,projection" />
    <link href=<?php echo base_url("css/animate.css")?> type="text/css" rel="stylesheet" media="screen,projection" />
    <link href=<?php echo base_url("css/animate.min.css")?> type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="stylesheet" href=<?php echo base_url("css/material-design-iconic-font.min.css")?>>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">   
</head>

<body>
    <nav>
        <div class="nav-wrapper">
          <a href="#" style="margin-left: 10%" class="brand-logo">
            <img src=<?php echo base_url('img/uktQ.png')?> width="75%"></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down" style="margin-right: 7.5%">
            <!--<li><a href="How.html">How It Works</a></li> -->
            <li><a href="#">Hi, <?php echo $this->session->userdata('nama') ?></a></li>
            <li> <a href="<?php echo base_url("index.php/c_logout"); ?>">Logout</a> </li>
          </ul>
        </div>
    </nav>
    
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src=<?php echo base_url("js/materialize.js")?>></script>
    <script src=<?php echo base_url("js/counter.js")?>></script>
    <script src=<?php echo base_url("js/init.js")?>></script>
    <script src=<?php echo base_url("js/viewportchecker.js")?>></script>
    
</body>

</html>

<?php
#    echo anchor('c_login','login');
 #   echo '<br>';
 #   echo anchor('c_login/register','register');
 #   echo '<br>';
?>  