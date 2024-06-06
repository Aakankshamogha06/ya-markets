<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Add webinar</h5>
                        <?php if (isset($msg) || validation_errors() !== '') : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= validation_errors(); ?>
                                <?= isset($msg) ? $msg : ''; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">

                        <form class="form-horizontal" action="<?= base_url('admin/webinar/webinar_submit_data') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Webinar Date<span class="text-danger">*</span> </label>
                                    <input type="date" name="date" parsley-trigger="change" class="form-control" id="date" placeholder="webinar date" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Webinar Time <span class="text-danger">*</span> </label>
                                    <input type="time" name="time" parsley-trigger="change" class="form-control" id="time" placeholder="webinar time" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Webinar Topic<span class="text-danger">*</span> </label>
                                    <input type="text" name="topic" parsley-trigger="change" class="form-control" id="topic" placeholder="webinar topic" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Speaker<span class="text-danger">*</span> </label>
                                    <input type="text" name="speaker" parsley-trigger="change" class="form-control" id="speaker" placeholder="Speaker" required>
                                </div>
                               <div class="form-group col-md-9">
                                    <label for="inputEmail4" class="form-label">Mail Message<span class="text-danger">*</span> </label>
                                    <textarea type="text" name="mail_meaasage" parsley-trigger="change" class="form-control" id="mail_meaasage" placeholder="mail_meaasage" required></textarea>
                                </div>
                            </div>
                            <input type="submit" class="btn  btn-dark" name="submit" value="Add">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ sample-page ] end -->
</div>
<!-- [ Main Content ] end -->
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('mail_meaasage', {
        format_tags: 'p;h1;h2;h3;h4;h5;h6'
    });
</script>