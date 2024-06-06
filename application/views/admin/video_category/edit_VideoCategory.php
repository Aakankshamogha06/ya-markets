<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                    <?php foreach($video_category_view as $video_category_view){?>
                            <h5>Edit Video Category</h5>
                            <?php if(isset($msg) || validation_errors() !== ''): ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?= validation_errors();?>
                                    <?= isset($msg)? $msg: ''; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-body font-weight-bold">
                            <?php echo form_open(base_url('admin/Video_Category/video_category_update_data'));  ?> 
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="category" >Video Category</label>
                                        <input type="hidden" id="id" name="id" value="<?= $video_category_view->id ?>" class="form-control">
                                        <input type="text" name="category" class="form-control" value="<?= $video_category_view->category ?>" id="category" placeholder="Enter category">
                                        <?php echo form_error('category');?>
                                    </div>
                                </div>
                                <input type="submit" class="btn  btn-dark" name="submit" value="Add video Category">
                            <?php echo form_close( ); ?>
                        </div>
                    <?php }?>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
