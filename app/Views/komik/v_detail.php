<?=
 $this->extend('layout/template');?>
<?=$this->section('content'); ?>
<div class="div">
    <div class="row">
        <div class="col">
            <h3><?=$title2 ?> <?=$komik['judul'] ?></h3>
            <div class="card" style="width: 18rem;">
                <img src="/assets/img/<?=$komik['sampul']; ?>" class="card-img-top" alt="halo">
                <div class="card-body">
                    <p class="card-text"><?=$komik['judul']; ?></p>
                    <a href="" class="btn btn-warning">Edit</a>
                    <a href="" class="btn btn-danger">Hapus</a>
                    <br>
                    <br>
                    <a href="/komik"> Kembali ke daftar komik</a>
                </div>
            </div>

        </div>
    </div>
</div>
<?=$this->endSection() ?>