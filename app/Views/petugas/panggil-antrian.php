<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- MAIN CONTENT -->
<div class="main-container main-container-nas flex-column min-vh-100 d-flex align-items-center justify-content-center">
    <div class="d-flex justify-content-center">
        <div>  
            <h6 class="top-text">Panggil Antrian</h6>
            <h6 class="mb-4 top-text role"><?= $role ?></h6>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="no-antrian border p-4 d-flex justify-content-center align-items-center">
            <h1 class="no-antrian-font"><?= $no_antrian ?></h1>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-2">
        <div class="row align-items-center">
            <form action="/petugas/next-antrian" method="post">
                <input type="hidden" name="next-antrian" value="<?= $no_antrian ?>" id="next-antrian" readonly="" class="form-control">
                <button type="submit" class="next-antrian-button">No Antrian Selanjutnya</button>
            </form>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-4">
        <div class="row align-items-center">
            <form action="/petugas/logout" method="post">
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->

<?= $this->endSection(); ?>