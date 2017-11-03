    <script type="text/javascript">
        var token_name = "<?php echo $this->security->get_csrf_token_name() ?>";
        var csrf_hash = "<?php echo $this->security->get_csrf_hash() ?>";
        var BASEURL = "<?php echo site_url()?>";
    </script>
    <script src="<?php echo base_url('/media/js/modalpopup.js'); ?>"></script>
    <link href="<?php echo base_url('/media/css/modalpopup.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('/media/css/jasny-bootstrap.min.css'); ?>" rel="stylesheet" media="screen">
    <script src="<?php echo base_url('/media/js/jasny-bootstrap.min.js'); ?>"></script>

    <?php $this->load->view('manage/tinymce_init'); ?>
    <?php $this->load->view('manage/datepicker'); ?>

    <?php
    if (isset($news)) {
        $inputPublishValue = $news['news_post_date'];
        $inputJudulValue = $news['news_title'];
        $inputIsiValue = $news['news_desc'];
    } else {
        $inputJudulValue = set_value('news_title');
        $inputIsiValue = set_value('news_desc');
    }
    ?>

    <?php echo form_open_multipart(current_url()); ?>
    <div class="page-header">
        <h3 class="page-title"><?php echo $operation; ?> Berita</h3>
    </div>

    <div class="row">
        <div class="col-sm-9 col-md-9">
            <?php if (!isset($news)) echo validation_errors(); ?>
            <?php if (isset($news)): ?>
                <input type="hidden" name="news_id" value="<?php echo $news['news_id']; ?>" />
                <input type="hidden" name="news_post_date" value="<?php echo $news['news_post_date']; ?>" />
            <?php endif; ?>
            <label >Judul Berita *</label>
            <input name="news_title" type="text" class="form-control" value="<?php echo $inputJudulValue; ?>"><br>

            <label >Isi Berita *</label>
            <textarea name="news_desc" class="form-control" rows="25" ><?php echo $inputIsiValue; ?></textarea>
            <p style="color:#9C9C9C;margin-top: 5px"><i>*) Field Wajib Diisi</i></p>

            <div class="margin-bottom-20"></div>
        </div>
        <div class="col-sm-9 col-md-3">

            <div class="form-group">
                <div class="row">
                    &nbsp;&nbsp;&nbsp;&nbsp;<button name="action" type="submit" value="save" class="btn btn-success"><i class="ion-checkmark"></i> Simpan</button>
                </div>
                <div class="row" style="margin-top: 3px">
                 &nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo site_url('manage/news'); ?>" class="btn btn-info"><i class="ion-arrow-left-a"></i> Batal</a>
             </div>
         </div>
     </div>
 </div>

 <?php echo form_close(); ?>

 <?php if (isset($news)): ?>
    <!-- Delete Confirmation -->
    <div class="modal fade" id="confirm-del">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><b>Konfirmasi Penghapusan</b></h4>
                </div>
                <div class="modal-body">
                    <p>Data yang dipilih akan dihapus&hellip;</p>
                </div>
                <?php echo form_open('manage/news/delete/' . $news['news_id']); ?>
                <div class="modal-footer">
                    <a><button style="float: right;margin-left: 10px" type="button" class="btn btn-default" data-dismiss="modal">Tidak</button></a>
                    <input type="hidden" name="del_id" value="<?php echo $news['news_id'] ?>" />
                    <input type="hidden" name="del_name" value="<?php echo $news['news_title'] ?>" />
                    <button type="submit" class="btn btn-primary">Ya</button>
                </div>
                <?php echo form_close(); ?>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <?php
    if ($this->session->flashdata('delete')) {
        $this->load->view('manage/confirm-del');
    }
    ?>
<?php endif; ?>


