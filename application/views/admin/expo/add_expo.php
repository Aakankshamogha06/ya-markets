<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Add expo</h5>
                        <?php if (isset($msg) || validation_errors() !== '') : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= validation_errors(); ?>
                                <?= isset($msg) ? $msg : ''; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">

                        <form class="form-horizontal" action="<?= base_url('admin/expo/expo_submit_data') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="formFileMultiple" class="form-label"> Cover Image</label>
                                    <input class="form-control" name="image" type="file" id="image" multiple>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail14" class="form-label">Title</label><span class="text-danger">*
                                        <input class="form-control" name="title" type="text" id="title" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Date<span class="text-danger">*</span> </label>
                                    <input type="date" name="date" parsley-trigger="change" class="form-control" id="date" placeholder="Date" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Location<span class="text-danger">*</span> </label>
                                    <input type="text" name="location" parsley-trigger="change" class="form-control" id="location" placeholder="expo" required>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label"> Long Description<span class="text-danger">*</span> </label>
                                    <textarea type="text" name="long_desc" parsley-trigger="change" class="form-control" id="long_desc" placeholder="write description" required></textarea>
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
    CKEDITOR.replace('long_desc', {
        format_tags: 'p;h1;h2;h3;h4;h5;h6'
    });
</script>