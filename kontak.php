<?php
    include_once('templates/header.php');
    include_once('templates/navbar.php');
?> 
<div class="container">
    <div class="mx-auto col-12 md-col-6 my-2 my-md-5">
        <h1>Kontak </h1>
        <p>Jika Anda memiliki pertanyaan atau masukan tentang aplikasi pesan kuliner kami, jangan ragu untuk menghubungi kami!</p>
        <form action="submit-form.php" method="POST">
            <div>
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" class="form-control" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <label for="telepon">Telepon:</label>
            <input type="telepon" id="telepon" name="telepon" class="form-control" required>
            <label for="pesan">Pesan:</label>
            <textarea id="pesan" name="pesan" rows="5" class="form-control" required></textarea>
            <div class="mt-2 d-grid gap-2">
                <button type="submit" class="btn btn-success">Kirim</button>
            </div>
        </form>
    </div>
</div>
<?php
    include_once('templates/footer.php');
?>
