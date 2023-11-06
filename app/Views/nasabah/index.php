<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- MAIN CONTENT -->
<div class="main-container main-container-nas flex-column min-vh-100 d-flex align-items-center justify-content-center">
    <div class="d-flex justify-content-center">    
        <h6 class="mb-4 top-text">Masukkan Nama & No Telepon</br>untuk Mengambil Antrian</h6>
    </div>
    <div class="border p-4">
        <form action="/nasabah/add" method="post">
            <div class="row g-3 align-items-center mb-2">
                <div class="col-4">
                    <label for="inputNama" class="col-form-label">Nama</label>
                </div>
                <div class="col-8">
                    <?= csrf_field(); ?>
                    <input type="text" name="custName" id="inputNama" class="form-control">
                </div>
            </div>    
            <div class="row g-3 align-items-center mb-2">
                <div class="col-4">
                    <label for="inputPhone" class="col-form-label">No. Telepon</label>
                </div>
                <div class="col-8">
                    <?= csrf_field(); ?>
                    <input type="text" name="phoneNo" id="inputPhone" class="form-control">
                </div>
            </div>
            <div class="row align-items-center px-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
<!-- END MAIN CONTENT -->

<?= $this->endSection(); ?>