<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Produk <a class="btn btn-primary" href="<?= base_url() . 'admin/C_produk/tambah'; ?>">
<i class="fas fa-tshirt"></i>&nbsp;Tambah Data Produk</a></h1>
<br>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel Data Produk</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>  
            <th>Nama</th>
            <th>Harga</th>
            <th>Ukuran</th>
            <th>Kategori</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        foreach ($produk as $tb ) { ?>
          <tr>
            <td><?=$tb->nama_produk?></td>
            <td>Rp. <?=$tb->harga?></td>
            <td><?=$tb->ukuran?> cm</td>
            <td><?=$tb->nama_kategori?></td>
            <td>
              <a class="btn btn-primary" href="<?php echo base_url('admin/C_produk/edit/'. $tb->id_produk); ?>"><i class="fas fa-pencil-alt"></i></a>
              <a class="btn btn-danger" href="<?php echo base_url('admin/C_produk/hapus/'. $tb->id_produk); ?>"><i class="fas fa-trash"></i></a>
            </td>
          </tr>
        <?php } ?>
          </tbody>
        </table>
        </div>
    </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
      <!-- End of Main Content -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->