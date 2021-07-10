<?= $this->extend('Admin/layout') ?>
<?= $this->section('content'); ?>
<div class="page-heading">
    <h3><?= $title; ?></h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <i class='iconly-boldShow'></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Profile Views</h6>
                                    <h6 class='font-extrabold mb-0'>112.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class='iconly-boldProfile'></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Followers</h6>
                                    <h6 class='font-extrabold mb-0'>183.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class='iconly-boldAdd-User'></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Following</h6>
                                    <h6 class='font-extrabold mb-0'>80.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class='iconly-boldBookmark'></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Saved Post</h6>
                                    <h6 class='font-extrabold mb-0'>112</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                                    <h3 class="text-muted font-semibold">BIODATA</h6>
                                </div>
            </div>
            <div class="row">
                <div class="col-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            
                        </div>
                       
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <thead>
                                  <!-- FORM BIODATA       -->
                                <tr><td>

  <input type="text" class="form-control" placeholder="Nama Lengkap*" >
</td>
  <td>
  <input type="text" class="form-control" placeholder="Nama Panggilan" >
</td>
</tr>
</div>
  <tr><td>              
  <input type="date" class="form-control" placeholder="Tanggal Lahir*">
</td>
</tr>
    <tr><td colspan=2>
    <input type="text" class="form-control" placeholder="Phone*" >
</tr></td>
    <tr><td>
    <div class="input-group mb-3">
  <select class="form-select" id="inputGroupSelect01">
    <option selected>Provinsi.</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
</div></td>
<td>
<div class="input-group mb-3">
  <select class="form-select" id="inputGroupSelect01">
    <option selected>Kota.</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
</div>
</td>
<tr><td colspan=2>
<input type="text" class="form-control" placeholder="Address" aria-label="Recipient's username" aria-describedby="basic-addon2">
</td>
</tr>
<tr><td>
<div class="input-group mb-3">
  <select class="form-select" id="inputGroupSelect01">
    <option selected>Pekerjaan*</option>
    <option value="1">Karyawan</option>
    <option value="2">Wiraswasta</option>
    <option value="3">Pelajar</option>
    <option value="4">Ibu Rumah Tangga</option>
    <option value="5">Tidak Bekerja</option>
    <option value="6">Pensiunan</option>
  </select>
</div>
</td>
<td>
<div class="input-group mb-3">
  <select class="form-select" id="inputGroupSelect01">
    <option selected>Sumber Dana*</option>
    <option value="1">Gaji</option>
    <option value="2">Hasil Usaha</option>
    <option value="3">Warisan</option>
    <option value="4">Tabungan</option>
    <option value="5">Lainnya</option>
  </select>
</div>
</td>

</tr>
<!-- 

  <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>


  <span class="input-group-text">$</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
  <span class="input-group-text">.00</span>
</div>


  <input type="text" class="form-control" placeholder="Username" aria-label="Username">
  <span class="input-group-text">@</span>
  <input type="text" class="form-control" placeholder="Server" aria-label="Server">
</div>

<div class="input-group">
  <span class="input-group-text">With textarea</span>
  <textarea class="form-control" aria-label="With textarea"></textarea> -->
                            
                                          
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>