<?= $this->extend('Admin/layout') ?>
<?= $this->section('content'); ?>
<div class="page-heading">
    <h3><?= $title; ?></h3>
</div>
<div class="row">
    <div class="col-md-3">
    <a href="/admin/properti/add" class="btn btn-primary">Tambah Properti</a>
    </div>
    <div class="row">
        <div class="col-md-9"></div>
        <div class="col-md-2">
            <div class="form-group">
                <input type="text" class="form-control" id="basicInput" placeholder="search">
            </div>
        </div>
        <div class="col-md-1" style="margin-left: -15px;">
            <button type="button" class="btn btn-primary">Cari</button>
        </div>
    </div>
</div>
<!-- Basic Tables start -->
<section class="section">
    <div class="row" id="basic-table">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-lg table-striped">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th width="15%">Lokasi</th>
                                        <th>Kabupaten</th>
                                        <th>Provinsi</th>
                                        <th>Luas Tanah</th>
                                        <th>Luas Bangunan</th>
                                        <th>Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-bold-500">Michael Right</td>
                                        <td>$15/hr</td>
                                        <td class="text-bold-500">UI/UX</td>
                                        <td class="text-bold-500">UI/UX</td>
                                        <td class="text-bold-500">UI/UX</td>
                                        <td class="text-bold-500">UI/UX</td>
                                        <td class="text-bold-500">UI/UX</td>
                                        <td class="text-bold-500">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#large">
                                                Detail
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Modal -->
<div class="modal fade text-left" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="myModalLabel160">Detail Properti
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                I love tart cookie cupcake. I love chupa chups biscuit. I love
                marshmallow apple pie wafer
                liquorice. Marshmallow cotton candy chocolate. Apple pie muffin tart.
                Marshmallow halvah pie
                marzipan lemon drops jujubes. Macaroon sugar plum cake icing toffee.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Edit</span>
                </button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>