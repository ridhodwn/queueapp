<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- MAIN CONTENT -->
<div class="main-container main-container-nas flex-column min-vh-100 d-flex align-items-center justify-content-center">
    <div class="d-flex justify-content-center">    
        <h6 class="mb-4 top-text">Pilih Layanan</h6>
    </div>
    <div class="d-flex justify-content-center">
        <div class="row align-items-center me-1">
            <form action="/nasabah/antrian" method="post">
                <input type="hidden" name="teller" value="teller" id="text" readonly="" class="form-control">
                <button type="submit" class="teller-button">TELLER</button>
            </form>
        </div>
        <div class="row align-items-center">
            <form action="/nasabah/antrian" method="post">
                <input type="hidden" name="cs" value="cs" id="text" readonly="" class="form-control">
                <button type="submit" class="cs-button">CUST SERVICE</button>
            </form>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->

<?= $this->endSection(); ?>