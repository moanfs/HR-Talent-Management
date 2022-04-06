<?= $this->extend('layout/templates') ?>

<!-- content -->
<?= $this->Section('content') ?>

<section class="section mt-5">
    <div class="section-body">
        <!-- <h2 class="section-title">This is Example Page</h2>
        <p class="section-lead">This page is just an example for you to create your own page.</p> -->
        <div class="card">
            <div class="card-header">
                <h4>Predict</h4>
            </div>
            <div class="card-body">
                <div class="card-content">
                    <div class="section-title mt-0">Pilih Model Machine Learning</div>

                    <!-- <form action="<?= base_url('/predict/neighbors'); ?>" method="post"> -->
                    <div class="form-group">
                        <label>Choose One</label>
                        <select class="custom-select">
                            <option selected disabled>Pilih Algoritma</option>
                            <option value="<?= base_url('predict/randomforest'); ?>">Random Forest</option>
                            <option value="<?= base_url('predict/treeboosting'); ?>">Gradient Tree Boosting</option>
                            <option value="<?= base_url('predict/neighbors'); ?>">N-neighbors</option>
                        </select>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end m-4">
                        <a class="btn btn-outline-dark" href="<?= base_url('predict/') ?>" type="button">Back</a>
                        <!-- <button class="btn btn-primary text-white ml-4" type="submit" type="button">Next</button> -->
                        <a class="btn btn-primary text-white ml-4" href="<?= base_url('/predict/neighbors') ?>" type="button">Next</a>
                    </div>
                    <!-- </form> -->
                    <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-end m-4"> -->
                    <!-- <a class="btn btn-primary text-white ml-4" href="<?= base_url('/predict/neighbors') ?>" type="button">predict</a> -->
                    <!-- </div> -->
                </div>
            </div>
            <div class="card-footer bg-whitesmoke">
                This is card footer
            </div>
        </div>
    </div>
</section>


<?= $this->endSection() ?>
<!-- end Content -->