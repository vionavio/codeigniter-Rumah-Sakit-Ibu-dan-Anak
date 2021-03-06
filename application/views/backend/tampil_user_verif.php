<!DOCTYPE html>
<html>
  <head>
    <title>Input Nilai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Produk By Mfikri.com">
    <meta name="author" content="M Fikri Setiadi">
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
  </head>
  <body>

    <div class="container">
      <?php $this->load->view('menu');?> <!--Include menu-->
      <div class="col-md-12">
        <div class="row">
          <h2>Laporan Hasil Data</h2>
           <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                     <a class="btn btn-primary" href="<?php echo base_url(); ?>page/input_nilai"><i class="fa fa-plus"></i> Tambah Nilai</a>
                </div>
            </div>
            </div>
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Email</th>
                <th>Password</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Alamat</th>
                <th>Aksi</th>
           
              </tr>
            </thead>
            <tbody>
               <?php $no=1; foreach ($user as $u){  ?>
                    <tr>
                        <td style=" text-align: center; "><?php echo $no++; ?></td>
                        <td><?php echo $u->email_v; ?></td>
                        <td><?php echo $u->password_v; ?></td>
                        <td><?php echo $u->nama_v; ?></td>
                        <td><?php echo $u->gender_v; ?></td>
                        <td><?php echo $u->alamat_v; ?></td>
                <td> <a class="btn btn-info" href="<?php echo base_url(); ?>page/edit_status2/<?php echo  $u->email_v ?>">Edit</a></td>
                       
                    </tr>
                        <?php } ?>
              
            </tbody>

          </table>
        </div>
      </div>
    </div> <!-- /container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>

  </body>
</html>
