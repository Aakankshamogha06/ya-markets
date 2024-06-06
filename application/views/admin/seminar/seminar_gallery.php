<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Add Seminar Gallery</h5>
                        <?php if (isset($msg) || validation_errors() !== '') : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= validation_errors(); ?>
                                <?= isset($msg) ? $msg : ''; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
<?php
   $seminar_id = $this->uri->segment(4);
   
?>
                        <form class="form-horizontal" action="<?= base_url('admin/seminar/seminar_gallery_submit_data') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <input type="hidden" name="seminar_id" value="<?php echo ($seminar_id); ?>">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="formFileMultiple" class="form-label">Seminar  Image</label>
                                
                                    <input type="file" name="gallery_image[]" class="form-control" id="gallery_image" placeholder=" Images" required multiple/>
                                </div>
                                
                               
                            </div>
                            <input type="submit" class="btn  btn-dark" name="submit" value="Add">
                        </form>

                        <table id="table_id" class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Sr No</th>
                                    
                                    <th scope="col">Seminar Image</th>
                                   
                                    
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $c = 1;
                                foreach ($seminar_gallery_view as $row): ?>
                                    <tr>
                                        <th scope="row">
                                            <?= $c++; ?>
                                        </th>
                                        
                                        <td>
                                          
                                                <img src="<?php echo base_url('gallery_semi/') . $row->img; ?>" style="width:250px;height:250px">
                                           
                                        </td>
                                        
                                      
                                        <td>
                                            
                                            <a href="<?= base_url('admin/seminar/seminar_gallery_delete/' . $row->id.'/'.$seminar_id); ?>"
                                                class="btn btn-danger btn-flat"
                                                onclick="return confirm('Are you sure want to delete ?');">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
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