<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <?php
                        foreach ($seminar_view as $row) { ?>
                        <h5>Edit Blog</h5>
                        <?php if (isset($msg) || validation_errors() !== '') : ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <?= validation_errors(); ?>
                            <?= isset($msg) ? $msg : ''; ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">×</span></button>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body font-weight-bold">
                        <form class="form-horizontal"
                            action="<?= base_url('admin/OnetoOne_Session/session_update_data') ?>" method="post"
                            enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="country_img">Country Image</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <input type="file" name="country_img" class="form-control"
                                        value="<?= $row->country_img ?>" id="country_img">
                                    <?php echo form_error('country_img'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="detailed_img">Banner Image</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <input type="file" name="detailed_img" class="form-control"
                                        value="<?= $row->detailed_img ?>" id="detailed_img">
                                    <?php echo form_error('detailed_img'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Session Name</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <input type="text" name="session_name" class="form-control"
                                        value="<?= $row->session_name ?>" id="session_name"
                                        placeholder="Enter session name" required>
                                    <?php echo form_error('session_name'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="date">Session Date</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <input type="text" name="session_date" class="form-control"
                                        value="<?= $row->session_date ?>" id="session_date" required>
                                    <?php echo form_error('session_date'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="time">Session Time</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <input type="text" name="session_time" class="form-control"
                                        value="<?= $row->session_time ?>" id="session_time" required>
                                    <?php echo form_error('session_time'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="location">Session Location</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <input type="text" name="session_location" class="form-control"
                                        value="<?= $row->session_location ?>" id="session_location"
                                        placeholder="Enter Location" required>
                                    <?php echo form_error('session_location'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="country">Session Country</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <input type="text" name="session_country" class="form-control"
                                        value="<?= $row->session_country ?>" id="session_country"
                                        placeholder="Enter country" required>
                                    <?php echo form_error('session_country'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="speaker">Speaker</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <input type="text" name="speaker" class="form-control"
                                        value="<?= $row->speaker ?>" id="speaker"
                                        placeholder="Enter Speaker's Name" required>
                                    <?php echo form_error('speaker'); ?>
                                </div>
                            </div>
                            <input type="submit" class="btn  btn-dark" name="submit" value="Add">
                        </form>
                    </div>
                    <?php } ?>
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