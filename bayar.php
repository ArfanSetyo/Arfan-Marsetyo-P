<?php
    include_once('templates/header.php');
    include_once('templates/navbar.php');
?> 
<div class="container">
    <div class="mx-auto col-12 col-md-6 my-2 my-md-5">
        <h1 class="text-center">Form Pembayaran Pesanan Masakan</h1>
        <form action="proses_pembayaran.php" method="post">
            <div>
                <label for="nama_pelanggan">Nama Pelanggan:</label>
                <input type="text" id="nama_pelanggan" name="nama_pelanggan" class="form-control" required>
            </div>
            <div>
                <label for="nomor_pesanan">Nomor Pesanan:</label>
                <input type="text" id="nomor_pesanan" name="nomor_pesanan" class="form-control" required>
            </div>
            <div>
                <label for="jumlah_pembayaran">Jumlah Pembayaran:</label>
                <input type="number" id="jumlah_pembayaran" name="jumlah_pembayaran" min="0" class="form-control" required>
            </div>
            <div>
                <label for="metode_pembayaran">Metode Pembayaran:</label>
                <select id="metode_pembayaran" name="metode_pembayaran" class="form-control" required>
                    <option value="">Pilih Metode Pembayaran</option>
                    <option value="transfer_bank">Transfer Bank</option>
                    <option value="kartu_kredit">Kartu Kredit</option>
                    <option value="paypal">PayPal</option>
                </select>
            </div>
            <div class="table-responsive my-2">
              <table class="table table-striped">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Jenis</th>
                      <th scope="col">Jumlah</th>
                      <th scope="col">Catatan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Soto</td>
                        <td>Makanan</td>
                        <td>2</td>
                        <td>Tidak Pedas</td>
                    </tr> 
                    <tr>
                        <td>2</td>
                        <td>Nastel</td>
                        <td>Makanan</td>
                        <td>1</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Teh</td>
                        <td>Minuman</td>
                        <td>3</td>
                        <td>-</td>
                    </tr>
                </tbody>
              </table>
            </div>  
            <div class="mt-2 d-grid gap-2">
                <button type="submit" class="btn btn-success">Bayar</button>
            </div>
        </form>
    </div>
</div>
<?php
    include_once('templates/footer.php');
?>
