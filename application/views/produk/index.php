<div class="container-fluid" id="container-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h3 class="m-0 font-weight-bold text-primary">Daftar Properti</h3>
                        <a href="<?php echo site_url('produk/add') ?>" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i>Add Data</a>
                    </div>
                </div>
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                            <th>Nama Properti</th>
                            <th>Harga</th>
                            <th>Jenis</th>
                            <th>Alamat</th>
                            <th>Luas</th>
                            <th>Gambar</th>
                            <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($produk as $product => $value) : ?>
                                <tr>
                                    <td> <?php echo $value->nama ?></td>
                                    <td>Rp. <?php echo number_format($value->harga, 0) ?></td>
                                    <td><?php echo $value->jenis ?></td>
                                    <td><?php echo $value->alamat ?></td>
                                    <td><?php echo $value->luas ?></td>
                                    <td> <img src="<?php echo base_url('gambar/produk/' . $value->gambar) ?>" width="64" /></td>
                                    <td>
                                        <a href="<?php echo site_url('produk/edit/' . $value->id) ?>" class="btn btn-sm btn-warning" style="margin: 2px;">Edit</a><br>
                                        <a href="<?php echo site_url('produk/detail/' . $value->id) ?>" class=" btn btn-sm btn-info" style="margin: 2px;">Detail</a> <br>
                                        <a href="<?php echo site_url('produk/status/' . $value->id . '/' . $value->status) ?>" class=" btn btn-sm btn-primary" style="margin: 2px;">Terjual</a> <br>
                                        <form action="<?php echo base_url('produk/delete/' . $value->id) ?>" method="post">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" onclick="return confirm ('Apakah anda yakin ingin menghapus ?');" class="btn btn-danger">Hapus</button>
                                        </form>



                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>