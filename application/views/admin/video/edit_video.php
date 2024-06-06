<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <?php 
                    foreach($video_view as $row){?>
                        <h5>Edit Video</h5>
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
                        <form class="form-horizontal" action="<?= base_url('admin/video/video_update_data') ?>"
                            method="post" enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="title">Video Title</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <input type="text" name="title" class="form-control" value="<?= $row->title ?>"
                                        id="title" placeholder="Enter Video title">
                                    <?php echo form_error('title');?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="image">Video Image</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <input type="file" name="image" class="form-control"
                                        value="<?= $row->image ?>" id="image" multiple required>
                                    <?php echo form_error('image');?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="category_id">Video Category</label>
                                    <select id="category_id" name="category_id" class="form-control"
                                        value="<?= $row->id ?>">
                                        <option selected>Select Video Category</option>
                                        <?php
                                        $role_fetch_data = $this->Video_model->role_fetch();
                                        foreach ($role_fetch_data as $data) { ?>
                                        <option value="<?php echo $data['id']; ?>"
                                            <?php if($data['id']===$row->category_id) echo'selected="selected"'?>>
                                            <?php echo $data['category']; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                    <?php echo form_error('category_id');?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="video_link">Video Link</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <input type="text" name="video_link" class="form-control"
                                        value="<?= $row->video_link ?>" id="video_link" placeholder="Enter Video link">
                                    <?php echo form_error('video_link');?>
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
        <!-- [ Main Content ] end -->