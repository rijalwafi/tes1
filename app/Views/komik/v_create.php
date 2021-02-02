<?=$this->extend('layout/template'); ?>
<?=$this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2><?=$title2 ?></h2>

            <form action="/komik/save" method="POST"
                class="<?=($validation->hasError('judul'))?'was-validated' :'' ?> ">
                <?=csrf_field(); ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Judul</label>
                    <input type="text" class="form-control <?=($validation->hasError('judul'))?'is-invalid':''; ?>"
                        id="judul" name="judul" autofocus <?=($validation->hasError('judul'))?'required':''; ?>>
                    <div id="judul" class="invalid-feedback"><?=$validation->getError('judul'); ?></div>
                </div>
                <div class="mb-3">
                    <label for="sampul" class="form-label">Sampul</label>
                    <input type="text" class="form-control <?=($validation->hasError('sampul'))?'is-invalid':''; ?>"
                        id="sampul" name="sampul" value="<?=old('sampul'); ?>"
                        <?=($validation->hasError('judul'))?'required':''; ?>>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?=$this->endSection() ?>