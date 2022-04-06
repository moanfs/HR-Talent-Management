<?= $this->extend('layout/templates') ?>

<!-- content -->
<?= $this->Section('content') ?>
<section class="section mt-5">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Dataset</h4>
                </div>
                <div class="card-body">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Data</th>
                                <th scope="col">Date</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($dataset as $view) {
                                // var_dump($user);
                            ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?php echo $view['data']; ?></td>
                                    <td><?php echo $view['created_at']; ?></td>
                                    <td>
                                        <a href="/dataset/<?= $view['id_data']; ?>" type="button" class="btn btn-success"><i class="fas fa-eye"></i></a>
                                        <form action="/dataset/delete/<?= $view['id_data']; ?>" method="POST" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus');"><i class="fas fa-trash"></i></button>
                                        </form>
                                        <!-- <a href="<?= base_url(); ?>/berkas/download/<?= $view['id_data']; ?>" type="button" class="btn btn-success"><i class="fas fa-download"></i></a> -->
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</section>
<?= $this->endSection() ?>
<!-- end Content -->