<?php
    include_once('templates/header.php');
    include_once('templates/navbar.php');
?> 
<div class="container">
    <div class="mx-auto my-2 my-md-5">
        <h1 class="text-center">Detail Makanan / Minuman</h1>
        <div class="row my-3 my-md-4">
            <div class="col-12 col-md-5">
                <img src="assets/img/sate.jpg" class="img-fluid" alt="produk">
            </div>
            <div class="col-12 col-md-7">
                <h1 class="my-2 my-md-4">Sate</h1>
                <p>Sate adalah makanan yang terbuat dari daging yang dipotong kecil-kecil dan ditusuk sedemikian rupa dengan tusukan lidi tulang daun kelapa atau bambu, kemudian dipanggang menggunakan bara arang kayu. Sate disajikan dengan berbagai macam bumbu yang bergantung pada variasi resep sate.</p>
                <h4>Harga: 12.000</h4>
                <div class="d-flex-justify-content-aroud">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#beliModal" class="btn btn-success px-5">Beli</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="beliModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="pesan.php" method="post">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Pesan Menu</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div>
                <label for="jumlah">Jumlah:</label>
                <input type="number" id="jumlah" name="jumlah" class="form-control" required>
            </div>

            <div>
                <label for="catatan">Catatan:</label>
                <textarea id="catatan" name="catatan" rows="4" cols="30" class="form-control"></textarea>
            </div>
          </div>
          <div class="modal-footer d-flex justify-content-between">
            <button type="button" class="btn btn-primary">Beli</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
          </div>
        </div>
    </form>
  </div>
</div>
<?php
    include_once('templates/footer.php');
?>
