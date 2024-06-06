<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <?php foreach ($slider_view as $row) :
                    ?>
                    <div class="card-header">
                        <h5>Edit Slider</h5>
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
                        <form class="form-horizontal" method="post"
                            action="<?= base_url('admin/slider/slider_update_data'); ?>">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <input type="hidden" name="id" value="<?= $row->id ?>">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Heading 1<span
                                            class="text-danger">*</span> </label>
                                    <input type="text" name="content1" value="<?= $row->content1 ?>"
                                        parsley-trigger="change" class="form-control" id="content1" placeholder="Name"
                                        required>
                                        <?php echo form_error('content1'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Heading<span
                                            class="text-danger">*</span> </label>
                                    <input type="text" name="content" parsley-trigger="change" class="form-control"
                                        id="content" value="<?= $row->content ?>" placeholder="Name" required>
                                        <?php echo form_error('content'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Sub Heading<span
                                            class="text-danger">*</span> </label>
                                    <input type="text" name="sub_content" parsley-trigger="change" class="form-control"
                                        id="sub_content" value="<?= $row->sub_content ?>"
                                        placeholder="number of question" required>
                                        <?php echo form_error('sub_content'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Button 1 Heading<span
                                            class="text-danger">*</span> </label>
                                    <input type="text" name="btn1_h" parsley-trigger="change" class="form-control"
                                        id="btn1_h" value="<?= $row->btn1_h ?>"
                                        placeholder="Button 1 Heading" required>
                                        <?php echo form_error('btn1_h'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Button 1 Link<span
                                            class="text-danger">*</span> </label>
                                    <input type="text" name="btn1_link" parsley-trigger="change" class="form-control"
                                        id="btn1_link" value="<?= $row->btn1_link ?>"
                                        placeholder="Button 1 Link" required>
                                        <?php echo form_error('btn1_link'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Button 2 Heading<span
                                            class="text-danger">*</span> </label>
                                    <input type="text" name="btn2_h" parsley-trigger="change" class="form-control"
                                        id="btn2_h" value="<?= $row->btn2_h ?>"
                                        placeholder="Button 2 Heading" required>
                                        <?php echo form_error('btn2_h'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Button 2 Link<span
                                            class="text-danger">*</span> </label>
                                    <input type="text" name="btn2_link" parsley-trigger="change" class="form-control"
                                        id="btn2_link" value="<?= $row->btn2_link ?>"
                                        placeholder="Button 2 link" required>
                                        <?php echo form_error('btn2_link'); ?>
                                </div>
                            </div>

                    </div>
                    <div class="widget-footer text-left">

                        <button type="submit" name="submit" value="update assignment" class="btn btn-primary "
                            style="margin: 10px;">Update</button>
                        <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- [ sample-page ] end -->
    </div>
    <!-- [ Main Content ] end -->
    <?php endforeach; ?>