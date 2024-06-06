<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Add Session Details</h5>
                        <?php if (isset($msg) || validation_errors() !== '') : ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <?= validation_errors(); ?>
                            <?= isset($msg) ? $msg : ''; ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">×</span></button>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal"
                            action="<?= base_url('admin/OnetoOne_Session/session_submit_data') ?>" method="post"
                            enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="formFileMultiple" class="form-label">Country Image</label>
                                    <input class="form-control" name="country_img" type="file" id="country_img"
                                        multiple>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="formFileMultiple" class="form-label">Banner Image</label>
                                    <input class="form-control" name="detailed_img" type="file" id="detailed_img"
                                        multiple>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Session Name<span
                                            class="text-danger">*</span> </label>
                                    <input type="text" name="session_name" parsley-trigger="change" class="form-control"
                                        id="session_name" placeholder="Session Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Session Country<span
                                            class="text-danger">*</span> </label>
                                    <input type="text" name="session_country" parsley-trigger="change" class="form-control"
                                        id="session_country" placeholder="Session Country" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Session Location<span
                                            class="text-danger">*</span> </label>
                                    <input type="text" name="session_location" parsley-trigger="change" class="form-control"
                                        id="session_location" placeholder="Session location" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Session Date<span
                                            class="text-danger">*</span> </label>
                                    <input type="date" name="session_date" parsley-trigger="change" class="form-control"
                                        id="session_date" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Session Time<span
                                            class="text-danger">*</span> </label>
                                    <input type="text" name="session_time" parsley-trigger="change" class="form-control"
                                        id="session_time" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Speaker<span
                                            class="text-danger">*</span> </label>
                                    <input type="text" name="speaker" parsley-trigger="change" class="form-control"
                                        id="speaker" placeholder="Enter Speaker's Name" required>
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
CKEDITOR.replace('award_desc', {
    format_tags: 'p;h1;h2;h3;h4;h5;h6'
});
</script>