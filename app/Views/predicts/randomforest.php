<?= $this->extend('layout/templates') ?>

<!-- Content -->
<?= $this->Section('content') ?>
<section class="section mt-5">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Random Forest</h4>
                </div>
                <div class="card-body">
                    <div class="card-content">
                        <div class="section-title mt-0">Data Dari File</div>
                        <table class="table">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">Nama Dataset</th>
                                    <th scope="col">Model</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th scope="row">1</th>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end m-4">
                            <a class="btn btn-primary text-white ml-4" href="<?= base_url('/predict/result') ?>" type="button">Predict</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
<!-- end Content -->