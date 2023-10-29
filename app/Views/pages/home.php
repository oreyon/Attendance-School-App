    
   
   <?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
   <div class="container">
        <div class="row">
            <div class="col">
                <?php setlocale(LC_ALL, 'id_ID.utf8');
                $dateFormatter = new IntlDateFormatter('id_ID', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
                $dateFormatter->setPattern("EEEE, d MMMM");
                $timestamp = time();
                $formattedDate = $dateFormatter->format($timestamp);
                ?>
                <h1>Selamat Datang <?= user()->username; ?></h1>
                <h2>Sekarang Hari <?= $formattedDate; ?></h2>
                
                <!-- <h2>
                    Framework yang digunakan yaitu Codeigniter <?= \Codeigniter\Codeigniter::CI_VERSION; ?>
                </h2> -->
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>    
