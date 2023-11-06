<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- MAIN CONTENT -->
<div class="main-container main-container-nas flex-column min-vh-100 d-flex align-items-center justify-content-center">
    <div class="d-flex justify-content-center">    
        <h6 class="mb-4 top-text">Login Petugas</h6>
    </div>
    <div class="border p-4">
        <form action="/petugas/login" method="post">
            <div class="row g-3 align-items-center mb-2">
                <div class="col-4">
                    <label for="inputNama" class="col-form-label">Role</label>
                </div>
                <div class="col-8 d-flex">
                    <div class="col-6 form-check">
                        <input class="form-check-input" type="checkbox" value="teller" name="teller" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Teller
                        </label>
                    </div>
                    <div class="col-6 form-check">
                        <input class="form-check-input" type="checkbox" value="cs" name="cs" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            CS
                        </label>
                    </div>
                </div>
            </div>    
            <div class="row g-3 align-items-center mb-2">
                <div class="col-4">
                    <label for="password" class="col-form-label">Password</label>
                </div>
                <div class="col-8">
                    <?= csrf_field(); ?>
                    <input type="password" name="password" id="password" class="form-control">
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