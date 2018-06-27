<?php 
echo form_open('reviewer/saveReview','class="form-horizontal" role="form"');
echo form_hidden('id', $this->uri->segment(3));
echo form_hidden('nip', $data['nip']);

?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Review Judul Tugas Akhir</b></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="p-20">
                        <?php $this ->load ->view($formReview); ?>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- end card-box -->
    </div><!-- end col -->
</div>
<?php echo form_close(); ?>