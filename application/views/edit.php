<div class="content-wrapper">
    <section class="content">
        <?php foreach ($mahasiswa as $mhs) { ?>
            <!-- <form action="<?php echo base_url() . 'mahasiswa/update'; ?>" method="post"> -->
            <?php echo form_open_multipart('mahasiswa/update') ?>
                <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id ?>">
                    <input type="text" name="nama" class="form-control" value="<?php echo $mhs->nama ?>">
                </div>
                <div class="form-group">
                    <label>NIM</label>
                    <input type="text" name="nim" class="form-control" value="<?php echo $mhs->nim ?>">
                </div>
                <div class=" form-group">
                    <label>Tanggal Lahir</label>
                    <input type="text" name="tgl_lahir" class="form-control datepicker" value="<?php echo $mhs->tgl_lahir ?>">
                </div>
                <div class=" form-group">
                    <label>Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" value="<?php echo $mhs->jurusan ?>">
                </div>
                <div class="form-group">
                    <label>alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $mhs->nim ?>">
                </div>
                <div class=" form-group">
                    <label>email</label>
                    <input type="text" name="email" class="form-control datepicker" value="<?php echo $mhs->tgl_lahir ?>">
                </div>
                <div class=" form-group">
                    <label>no_hp</label>
                    <input type="text" name="no_Hp" class="form-control" value="<?php echo $mhs->jurusan ?>">
                </div>
                <div class=" form-group">
                    <label>upload foto</label>
                    <input type="file" name="foto" class="form-control">
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="simpan" class="btn btn-primary">Simpan</button>
                <?php echo form_close(); ?>

            <!-- </form> -->
        <?php } ?>
</div>