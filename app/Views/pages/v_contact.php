<?=$this->extend('layout/template'); ?>
<?=$this->section('content'); ?>

<div class="container">

    <div class="row">
        <div class="col">
            <h4>Hubungi Kami</h4>
            <?php foreach ($alamat as $a): ?>
            <ul>
                <li>
                    <p><?=$a['tipe']; ?></p>
                </li>
                <li>
                    <p><?=$a['alamat']; ?></p>
                </li>
                <li>
                    <p><?=$a['kota']; ?></p>
                </li>
            </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?=$this->endSection(); ?>