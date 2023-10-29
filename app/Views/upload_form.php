<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container my-5">
<?php foreach ($errors as $error): ?>
    <li><?= esc($error) ?></li>
<?php endforeach ?>

<?= form_open_multipart('upload/upload') ?>
    <input type="file" name="userfile" size="20">
    <br><br>
    <input type="submit" value="upload">
</form>
</div>
<?= $this->endSection(); ?>