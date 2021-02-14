 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Insert Data</h1>
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="./">Home</a></li>
             <li class="breadcrumb-item active" aria-current="page">Forms</li>
         </ol>
     </div>

     <!-- Form Basic -->
     <div class="card mb-3">
         <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
             <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
         </div>
         <div class="card-body">
             <form action="<?php base_url('produk/add') ?>" method="post" enctype="multipart/form-data">
                 <div class="row">
                     <input type="hidden" name="id" id="id">
                     <div class="col-lg-6">
                         <div class="form-group">
                             <label for="exampleInputEmail1">Nama Properti</label>
                             <input type="text" class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" name="nama" aria-describedby="emailHelp" placeholder="Masukan Properti">
                             <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                                 email with anyone else.</small> -->
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="form-group">
                             <label for="exampleInputPassword1">Harga</label>
                             <input type="text" class="form-control <?php echo form_error('harga') ? 'is-invalid' : '' ?>" name="harga" placeholder="1.000.000" min="0">
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-lg-3">
                         <div class="form-group">
                             <label for="exampleInputPassword1">Jenis Properti</label>
                             <select name="id_jenis" id="id_jenis" class="form-control">
                                 <option>--Pilih Kategori--</option>
                                 <?php foreach ($jenis as $key => $value) { ?>
                                     <option value="<?= $value->id_jenis ?>"><?= $value->jenis ?></option>
                                 <?php } ?>
                             </select>
                         </div>
                     </div>
                     <div class="col-lg-3">
                         <div class="form-group">
                             <label for="exampleInputPassword1">Luas</label>
                             <input type="text" class="form-control <?php echo form_error('luas') ? 'is-invalid' : '' ?>" name="luas" placeholder="100 M">
                         </div>
                     </div>
                     <div class="col-lg-2">
                         <div class="form-group">
                             <label for="exampleInputEmail1">Jumlah Kamar Mandi</label>
                             <input type="text" class="form-control <?php echo form_error('kamar_mandi') ? 'is-invalid' : '' ?>" name="kamar_mandi" aria-describedby="emailHelp" placeholder="0">
                             <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                                 email with anyone else.</small> -->
                         </div>
                     </div>
                     <div class="col-lg-2">
                         <div class="form-group">
                             <label for="exampleInputPassword1">Jumlah Kamar Tidur</label>
                             <input type="text" class="form-control <?php echo form_error('kamar_tidur') ? 'is-invalid' : '' ?>" name="kamar_tidur" placeholder="0">
                         </div>
                     </div>
                     <div class="col-lg-2">
                         <div class="form-group">
                             <label for="exampleInputPassword1">Jumlah Garasi</label>
                             <input type="text" class="form-control <?php echo form_error('garasi') ? 'is-invalid' : '' ?>" name="garasi" placeholder="0">
                         </div>
                     </div>
                 </div>
                 <div class="form-group">
                     <label for="exampleInputPassword1">Alamat</label>
                     <input type="text" class="form-control <?php echo form_error('name') ? 'is-invalid' : '' ?>" name="alamat" placeholder="Jl....">
                 </div>

                 <div class="">
                     <label for="exampleFormControlTextarea1" class="form-label">Deksripsi</label>
                     <textarea id="ckeditor" class="ckeditor" <?php echo form_error('dekripsi') ? 'is-invalid' : '' ?>" name="deskripsi"></textarea>
                 </div>

                 <div class="form-group">
                     <img src="../gambar/default.png" class="img-thumbnail img-preview" style="margin: 5px;" width="100" />
                     <div class="custom-file">
                         <input type="file" class="custom-file-input  <?php echo form_error('gambar') ? 'is-invalid' : '' ?>" id="gambar" name="gambar" onchange="prevBeritaGambar()">
                         <label class="custom-file-label" for="customFile">Pilih gambar</label>

                     </div>

                 </div>
                 <button type="submit" class="btn btn-primary" value="Save">Submit</button>
             </form>
         </div>
     </div>





     <!--Row-->

 </div>
 <!---Container Fluid-->