<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>About SMKN 3 BJM</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus at sit alias error velit? Tempore culpa dolore nostrum saepe suscipit?</p>

                <?php foreach ($alamat as $a) : ?>
                    <ul>
                        <li><?= $a['tipe']; ?></li>
                        <li><?= $a['alamat']; ?></li>
                        <li><?= $a['kota']; ?></li>
                        <li><?= $a['provinsi']; ?></li>
                    </ul>
                <?php endforeach; ?>
                
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>
