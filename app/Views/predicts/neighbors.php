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
                    <!-- <div class="section-title mt-0">Upload Data Test</div> -->
                    <div class="custom-file mt-2">
                        <?php
                        function panggil_model()
                        {
                            $perintah = "C:\Users\moan\AppData\Local\Programs\Python\Python310\python.exe C:\xampp\htdocs\c4app\app\Views\neighbors.py";
                            $output = shell_exec($perintah);
                            return "$output";
                            // dd($output);
                        }
                        // foreach ($perintah as $hasil) {

                        // }

                        // $hasil = panggil_model();

                        // echo "<pre>";
                        // dd($hasil);
                        // echo "</pre>";

                        ?>

                        <!-- end Content -->
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end m-4">
                        <a class="btn btn-primary text-white" href="<?= base_url('/predict/result') ?>">Predict</a>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-whitesmoke">
                This is card footer
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>