<?= $this->extend('layout/templates') ?>

<!-- Content -->
<?= $this->Section('content') ?>
<section class="section mt-5">
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Predict</h4>
            </div>
            <div class="card-body">
                <div class="card-content">
                    <div class="section-title mt-0">Upload Data Test</div>
                    <div class="custom-file mt-2">
                        <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo session()->getFlashdata('error'); ?>
                            </div>
                        <?php endif; ?>
                        <form method="post" action="<?= base_url('/predict/save'); ?>" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <input type="file" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" id="data" name="data">
                            <!-- <label class="custom-file-label" for="customFile">Choose file</label> -->
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit" class="btn btn-primary mt-4">Next</button>
                            </div>
                        </form>
                    </div>
                    <!-- <a class="btn btn-primary text-white" href="<?= base_url('/predict/model') ?>" type="button">Predict</a> -->
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