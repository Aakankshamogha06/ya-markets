<div class="pcoded-main-container dataTables_wrapper">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>View Gallery Image</h5>
                    </div>
                    <div class="card-body">
                        <table id="table_id" class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Sr No</th>
                                    <th scope="col">Gallery Image</th>
                                    <th scope="col">Image Name</th>>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $c = 1;
                                foreach ($gallery_view as $row): ?>
                                    <tr>
                                        <th scope="row">
                                            <?= $c++; ?>
                                        </th>
                                        <td>
                                            <?php if ($row->image) { ?>
                                                <img src="<?php echo base_url('images/') . $row->image; ?>" style="width:50px;height:80px">
                                            <?php } ?>
                                        </td>
                                        <td><?= $row->image_name?></td>
                                        <td>
                                            <a href="<?= base_url('admin/gallery/gallery_edit/' . $row->id); ?>"
                                                class="btn btn-info btn-flat">
                                                Edit
                                            </a>
                                            <a href="<?= base_url('admin/gallery/gallery_delete/' . $row->id); ?>"
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
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
</div>
<script>
    jQuery(document).ready(function ($) {
        $('#table_id').DataTable();
    });
</script>