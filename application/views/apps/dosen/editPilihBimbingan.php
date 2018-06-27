<?php 
echo form_open('dosen/savePilihBimbingan','class="form-horizontal" role="form"');
echo form_hidden('id', $this->uri->segment(3));
echo form_hidden('tmst_dosen_nip', $data['tmst_dosen_nip']);
echo form_hidden('nim', $data['tmst_mahasiswa_nim']);

?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Edit Pilih Bimbingan</b></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="p-20">
                        <?php $this ->load ->view($formPilihBimbingan); ?>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- end card-box -->
    </div><!-- end col -->
</div>
<?php echo form_close(); ?>