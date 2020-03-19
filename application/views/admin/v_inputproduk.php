<div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah Produk</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Content Row -->
                <!-- Disini tempat membuat Edit Profil nya! -->
            </div>
            <div class="col-lg-10">
                <form action="<?php echo base_url() . 'admin/C_produk/tambah_produk'; ?>" method="post">
                    <div class="form-group">
                        <label for="nama_pelanggan"> Nama Produk : </label>
                        <input type="text" class="form-control form-control-user" id="nama_produk" name="nama_produk" placeholder="Masukan Nama Produk" title="Isikan data dengan benar" required pattern="[a-zA-Z\s]+">
                    </div>
                    <div class="form-group">
                        <label for="alamat"> Harga Rp : </label>
                        <input type="text" name="harga" class="form-control form-control-user" id="harga" placeholder="Masukkan Harga Produk" required>
                    </div>
                    <div class="form-group">
                        <label for="no_telepon"> Ukuran : </label>
                        <input type="text" name="ukuran" class="form-control form-control-user" placeholder="Masukkan Ukuran (Dalam cm)" title="" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label  col-xs-3"> Kategori : </label>
                        <select name="nama_kategori" id="nama_kategori" class="form-control">
                        <?php foreach ($getKategori as $bc) : ?>
                            <option value="<?= $bc->nama_kategori; ?>"><?= $bc->nama_kategori; ?></option>
                        <?php endforeach; ?>
                    </select>
                    </div>

                    <hr>
                    <button type="submit" name="submit" class="btn btn-success btn-user btn-block">Tambah</button>
                </form>
                <br>
                <div class="text-center">
                    <div class="row">

                    </div>
                    <!-- Batas edit profil -->
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>