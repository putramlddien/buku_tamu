
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/pricing/">

    <!-- Bootstrap core CSS -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <img src="<?php echo base_url(); ?>assets/image/wandek.png" style="width: 45px;">
  <h5 class="text-primary" style="padding: 8px;">Guest Book Application</h5>
  <a style="padding: 20px;"><?php echo anchor('tamu','Data Tamu',array('class'=>'text-secondary'));?></a>
  <a style="padding: 10px;"><?php echo anchor('siswa','Data Siswa',array('class'=>'text-secondary'));?></a>
  <a style="padding: 10px;"><?php echo anchor('operator','Data Operator',array('class'=>'text-secondary'));?></a>
    <div class="mx-auto" style="width: 420px;">

</div>
  <nav class="my-2 my-md-0 mr-md-3">
    
    
  </nav>
  <?php
  echo anchor('operator/logout', 'Logout',array('class'=>'btn btn-outline-primary'))
?>
</div>
<br>
    <main role="main" class="container">
<div class="container">
  <?php echo $contents; ?>
</div>  
</main>
</div>

<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
</body>
</html>
