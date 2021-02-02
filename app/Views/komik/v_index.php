<?=$this->extend('layout/template'); ?>
<?=$this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <a href="/komik/create" class="btn btn-primary mb-4">Tambah Komik</a>
            <h1><?=$title2 ?></h1>
            <?php if(session()->getFlashdata('pesan')): ?>
            <div class="alert alert-success" role="alert">
                <?=session()->getFlashdata('pesan'); ?>
            </div>
            <?php endif ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    <?php foreach($komik as $kom): ?>
                    <tr>
                        <th scope="row"><?=$no++ ?></th>
                        <td><img src="/assets/img/<?=$kom['sampul'] ?>" alt="gambar komik" class="sampul"></td>
                        <td><?=$kom['judul']; ?></td>
                        <td>
                            <a href="/komik/<?=$kom['slug'] ?>" class="btn btn-success">Detail</a>
                            <a href="" class="btn btn-primary">Detail</a>
                            <a href="" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?=$this->endSection() ?>