<?= $this->extend('Admin/layout') ?>
<?= $this->section('content'); ?>
<div class="page-heading">
  <h3><?= $title; ?></h3>
</div>
<!-- Basic Tables start -->
<section class="section">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="basicInput">Lokasi</label>
            <input type="text" class="form-control" id="basicInput" placeholder="Lokasi Properti">
          </div>
          <div class="form-group">
            <label for="helpInputTop">Provinsi</label>
            <select class="form-select" id="provinsi">
              <option value="">Pilih Provinsi</option>
              <?php foreach($provinsi as $p): ?>
              <option value="<?= $p->province_id; ?>"><?= $p->province; ?></option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="form-group">
            <label for="helpInputTop">Kabupaten/Kota</label>
            <select class="form-select" id="kabupaten">
              <option value="">Pilih Kabupaten</option>
            </select>
          </div>
          <div class="form-group">
            <label for="basicInput">Luas Tanah</label>
            <input type="text" class="form-control" id="basicInput" placeholder="Luas Tanah">
          </div>
          <div class="form-group">
            <label for="basicInput">Luas Bangunan</label>
            <input type="text" class="form-control" id="basicInput" placeholder="Luas Bangunan">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="basicInput">Deskripsi Properti</label>
            <textarea class="form-control" name="deskripsi_properti" rows="4"
              placeholder="Deskripsi Properti" style="resize: none;"></textarea>
          </div>
          <div class="form-group mt-3">
            <label for="basicInput" class="mb-1">Dokumen Kepemilikan</label>
            <ul class="list-unstyled mb-0">
                                <li class="d-inline-block me-2 mb-1">
                                    <div class='form-check'>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="form-check-input form-check-primary"
                                                name="customCheck" id="customColorCheck1">
                                            <label class="form-check-label" for="customColorCheck1">SHM</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class='form-check'>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="form-check-input form-check-primary"
                                                name="customCheck" id="customColorCheck2">
                                            <label class="form-check-label" for="customColorCheck2">SHGB</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class='form-check'>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="form-check-input form-check-primary"
                                                name="customCheck" id="customColorCheck3">
                                            <label class="form-check-label" for="customColorCheck3">AJB</label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
            <input type="hidden" class="form-control" id="basicInput" placeholder="Lokasi Properti">
          </div>
          <div class="form-group">
            <label for="basicInput">Harga</label>
            <input type="text" class="form-control" id="basicInput" placeholder="Harga Properti">
          </div>
          <div class="form-group">
            <label for="basicInput">Foto</label>
            <input type="file" class="form-control" id="basicInput">
          </div>
          <div class="form-group">
            <button class="btn btn-primary float-end">Submit</button>
          </div>
        </div>
      </div>
    </div>
</section>
<script>
  $(document).ready(function () {
    $("#provinsi").on('change', function () {
      $("#kabupaten").empty();
      var id_provinsi = $(this).val();
      $.ajax({
        type: "GET",
        url: "<?= site_url('PropertiController/getCity') ?>",
        data: {
          'id_provinsi': id_provinsi,
        },
        dataType: "json",
        success: function (data) {
          console.log(data);
          var results = data["rajaongkir"]["results"];
          for (var i = 0; i < results.length; i++) {
            $("#kabupaten").append($('<option>', {
              value: results[i]["city_id"],
              text: results[i]['type'] + " " + results[i]['city_name']
            }));
          }
        },
      });
    });
  });
</script>
<?= $this->endSection(); ?>