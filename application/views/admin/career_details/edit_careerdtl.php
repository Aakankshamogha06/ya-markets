<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <?php 
                    foreach($career_details_view as $row){?>
                        <h5>Edit</h5>
                        <?php if(isset($msg) || validation_errors() !== ''): ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <?= validation_errors();?>
                            <?= isset($msg)? $msg: ''; ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">×</span></button>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body font-weight-bold">
                        <form class="form-horizontal"
                            action="<?= base_url('admin/Career_Details/career_details_update_data') ?>" method="post"
                            enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="position">Job Title</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <input type="text" name="position" class="form-control"
                                        value="<?= $row->position ?>" id="position" placeholder="Enter Job Title">
                                    <?php echo form_error('position');?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="description">Description</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <textarea type="text" name="description" parsley-trigger="change"
                                        class="form-control" id="description" 
                                        placeholder="write description" required><?=$row->description?></textarea>
                                    <?php echo form_error('description');?>
                                </div>
                            </div>
                            <input type="submit" class="btn  btn-dark" name="submit" value="Add">
                        </form>
                    </div>
                    <?php }?>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
        <script>
        CKEDITOR.replace('description', {
            format_tags: 'p;h1;h2;h3;h4;h5;h6'
        });
        </script>
        <!-- [ Main Content ] end -->