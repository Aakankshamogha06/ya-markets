<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Add Slider Image</h5>
                        <?php if (isset($msg) || validation_errors() !== ''): ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= validation_errors(); ?>
                                <?= isset($msg) ? $msg : ''; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">Ã—</span></button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="<?= base_url('admin/slider/slider_submit_data') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="formFileMultiple" class="form-label">Heading 1</label>
                                    <input class="form-control" name="content1" type="text" id="content1">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="formFileMultiple" class="form-label">Heading</label>
                                    <input class="form-control" name="content" type="text" id="content">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="formFileMultiple" class="form-label">Sub Heading</label>
                                    <input class="form-control" name="sub_content" type="text" id="sub_content">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="formFileMultiple" class="form-label">Button 1 Heading</label>
                                    <input class="form-control" name="btn1_h" type="text" id="btn1_h">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="formFileMultiple" class="form-label">Button 1 Link</label>
                                    <input class="form-control" name="btn1_link" type="text" id="btn1_link">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="formFileMultiple" class="form-label">Button 2 Heading</label>
                                    <input class="form-control" name="btn2_h" type="text" id="btn2_h">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="formFileMultiple" class="form-label">Button 2 Link</label>
                                    <input class="form-control" name="btn2_link" type="text" id="btn1_link">
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