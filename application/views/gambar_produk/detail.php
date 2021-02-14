 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h4 class="mb-0 text-gray-800">Gambar Properti : <?= $produk->nama ?></h4>
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="./">Home</a></li>
             <li class="breadcrumb-item active" aria-current="page">Forms</li>
         </ol>
     </div>


     <!-- Form Basic -->
     <div class="card mb-3">
         <div class="card-body">
             <div class="row text-center">
                 <?php foreach ($galeri as $key => $value) : ?>
                     <div class="col-lg-4">
                         <div class="card-body">
                             <div class="form-group">
                                 <img src="<?php echo base_url('gambar/' . $value->gambar) ?>" height="200px" width="300px" />
                             </div>
                             <a href="<?php echo site_url('galeri/delete/' . $value->id_galeri) ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> <span>Hapus</span></a><br>
                         </div>
                     </div>
                 <?php endforeach; ?>
             </div>
         </div>
     </div>




     <!--Row-->

 </div>
 <!---Container Fluid-->