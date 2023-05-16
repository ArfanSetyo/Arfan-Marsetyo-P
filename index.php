<?php
    include_once('templates/header.php');
    include_once('templates/navbar.php');
?>
<div class="container" style="background-color:#C0C0C0">
    <div class="d-flex flex-column flex-md-row align-items-start mt-5">
      <div class="nav flex-row flex-md-column nav-pills mb-3 mb-md-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Makanan</button>
        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Minuman</button>
      </div>
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
            <div class="row">
                <div class="col-12 col-md-4 mb-2 mr-2">
                    <div class="card" >
                    <img src="assets/img/sate.jpg" style="height:240px;width:322px" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Sate Ayam</h5>
                        <p class="card-text">Rp 12.000</p>
                       <div class="d-grid gap-2 col-12 ">
                           <a href="detail.php" class="btn btn-info">Detail</a>
                           <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#beliModal">Beli</button>
                       </div>
                      </div>
                    </div>
                </div>  
                <div class="col-12 col-md-4 mb-2 mr-2">
                    <div class="card" >
                    <img src="assets/img/nastel.jpg" style="height:240px;width:322px" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Nastel</h5>
                        <p class="card-text">Rp 9.000</p>
                       <div class="d-grid gap-2 col-12 ">
                           <a href="detail.php" class="btn btn-info">Detail</a>
                           <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#beliModal">Beli</button>
                       </div>
                      </div>
                    </div>
                </div>    
                <div class="col-12 col-md-4 mb-2 mr-2">
                    <div class="card" >
                    <img src="assets/img/soto.jpg" style="height:240px;width:322px" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Soto Laksa</h5>
                        <p class="card-text">Rp 10.000</p>
                       <div class="d-grid gap-2 col-12 ">
                           <a href="detail.php" class="btn btn-info">Detail</a>
                           <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#beliModal">Beli</button>
                       </div>
                      </div>
                    </div>
                </div>  
                <div class="col-12 col-md-4 mb-2 mr-2">
                    <div class="card" >
                      <img src="assets/img/ayam bakar.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Ayam Bakar</h5>
                        <p class="card-text">Rp 15.000</p>
                       <div class="d-grid gap-2 col-12 ">
                           <a href="detail.php" class="btn btn-info">Detail</a>
                           <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#beliModal">Beli</button>
                       </div>
                      </div>
                    </div>
                </div>   
                <div class="col-12 col-md-4 mb-2 mr-2">
                    <div class="card" >
                      <img src="assets/img/nasi goreng.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Nasi Goreng</h5>
                        <p class="card-text">Rp 11.000</p>
                       <div class="d-grid gap-2 col-12 ">
                           <a href="detail.php" class="btn btn-info">Detail</a>
                           <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#beliModal">Beli</button>
                       </div>
                      </div>
                    </div>
                </div>  
                <div class="col-12 col-md-4 mb-2 mr-2">
                    <div class="card" >
                      <img src="assets/img/pecel.jpg" style="height:240px;width:322px" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Nasi Pecel</h5>
                        <p class="card-text">Rp 8.000</p>
                       <div class="d-grid gap-2 col-12 ">
                           <a href="detail.php" class="btn btn-info">Detail</a>
                           <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#beliModal">Beli</button>
                       </div>
                      </div>
                    </div>
                </div>    
                <div class="col-12 col-md-4 mb-2 mr-2">
                    <div class="card" >
                    <img src="assets/img/mie ayam.jpg" style="height:240px;width:322px" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Mie Ayam</h5>
                        <p class="card-text">Rp 11.000</p>
                       <div class="d-grid gap-2 col-12 ">
                           <a href="detail.php" class="btn btn-info">Detail</a>
                           <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#beliModal">Beli</button>
                       </div>
                      </div>
                    </div>
                </div>  
                <div class="col-12 col-md-4 mb-2 mr-2">
                    <div class="card" >
                    <img src="assets/img/bakso.jpg" style="height:240px;width:322px" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Bakso</h5>
                        <p class="card-text">Rp 14.000</p>
                       <div class="d-grid gap-2 col-12 ">
                           <a href="detail.php" class="btn btn-info">Detail</a>
                           <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#beliModal">Beli</button>
                       </div>
                      </div>
                    </div>
                </div> 
                <div class="col-12 col-md-4 mb-2 mr-2">
                    <div class="card" >
                    <img src="assets/img/sop ayam.jpg" style="height:240px;width:322px" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Sop Ayam</h5>
                        <p class="card-text">Rp 13.000</p>
                       <div class="d-grid gap-2 col-12 ">
                           <a href="detail.php" class="btn btn-info">Detail</a>
                           <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#beliModal">Beli</button>
                     </div>
                   </div>
                </div>
              </div>
            </div>
         </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
             <div class="row">
                <div class="col-12 col-md-4 mb-2 mr-2">
                    <div class="card" >
                    <img src="assets/img/tea.jpg" style="height:240px;width:322px" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Teh</h5>
                        <p class="card-text">Rp 5.000</p>
                       <div class="d-grid gap-2 col-12 ">
                           <a href="detail.php" class="btn btn-info">Detail</a>
                           <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#beliModal">Beli</button>
                       </div>
                      </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-2 mr-2">
                    <div class="card" >
                    <img src="assets/img/juice.jpg" style="height:240px;width:322px" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Juice</h5>
                        <p class="card-text">Rp 10.000</p>
                       <div class="d-grid gap-2 col-12 ">
                           <a href="detail.php" class="btn btn-info">Detail</a>
                           <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#beliModal">Beli</button>
                       </div>
                      </div>
                    </div>
                </div>  
                <div class="col-12 col-md-4 mb-2 mr-2">
                    <div class="card" >
                    <img src="assets/img/kopi.jpg" style="height:240px;width:322px" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Kopi</h5>
                        <p class="card-text">Rp 6.000</p>
                       <div class="d-grid gap-2 col-12 ">
                           <a href="detail.php" class="btn btn-info">Detail</a>
                           <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#beliModal">Beli</button>
                      </div>
                     </div>
                   </div>
                 </div>
                 <div class="col-12 col-md-4 mb-2 mr-2">
                    <div class="card" >
                    <img src="assets/img/susu.jpg" style="height:240px;width:322px" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Susu</h5>
                        <p class="card-text">Rp 6.000</p>
                       <div class="d-grid gap-2 col-12 ">
                           <a href="detail.php" class="btn btn-info">Detail</a>
                           <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#beliModal">Beli</button>
                       </div>
                    </div>
                  </div>
               </div>
               <div class="col-12 col-md-4 mb-2 mr-2">
                    <div class="card" >
                    <img src="assets/img/jeruk.jpg" style="height:240px;width:322px" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Es Jeruk</h5>
                        <p class="card-text">Rp 5.000</p>
                       <div class="d-grid gap-2 col-12 ">
                           <a href="detail.php" class="btn btn-info">Detail</a>
                           <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#beliModal">Beli</button>
                     </div>
                  </div>
                </div>
              </div>
             <div class="col-12 col-md-4 mb-2 mr-2">
                    <div class="card" >
                    <img src="assets/img/jahe.jpg" style="height:240px;width:322px" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Wedang Jahe</h5>
                        <p class="card-text">Rp 7.000</p>
                       <div class="d-grid gap-2 col-12 ">
                           <a href="detail.php" class="btn btn-info">Detail</a>
                           <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#beliModal">Beli</button>
                   </div>
                 </div>
               </div>
              </div>
            </div>
          </div>
<!-- Modal -->
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
