<?= $this->extend('templates/templateadmin') ?>

<?= $this->section('navadmin') ?>

<!-- ======= Hero Section Table 3 Row And 2 Column ======= -->
<section id="hero" class="hero d-flex">
    <div class="container mt-5" data-aos="fade-up" data-aos-duration="1000">
        <div class="text-md-start">
            <h2><strong>Pengajuan Pendanaan</strong></h2>
        </div>
        <!-- search bar -->
        <div class="row mt-2">
            <div class="col-md-3">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Usulan" aria-label="Recipient's username" aria-describedby="button-addon2" />
                </div>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Usulan</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Volume</th>
                    <th scope="col">Satuan</th>
                    <th scope="col">Pagu</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Kelola</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php $i = 1; ?>
                <?php foreach ($pengajuan_pendanaan as $pp) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $pp['usulan']; ?></td>
                        <td><?= $pp['kategori']; ?></td>
                        <td><?= $pp['volume']; ?></td>
                        <td><?= $pp['satuan']; ?></td>
                        <td><?= $pp['pagu']; ?></td>
                        <td><?= $pp['lokasi']; ?></td>
                        <td>
                            <a class="btn btn-success btn-sm"><i class="bi bi-check-circle"></i></a>
                            <a class="btn btn-danger btn-sm"><i class="bi bi-x-circle"></i></a>
                            <a class="btn btn-primary btn-sm"><i class="bi bi-file-earmark-arrow-down"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<?= $this->endSection() ?>