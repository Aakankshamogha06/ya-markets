<div class="pcoded-main-container dataTables_wrapper">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>View Seminar</h5>
                    </div>
                    <div class="card-body">
                        <table id="table_id" class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Sr No</th>
                                    <th scope="col">Seminar Name</th>
                                    <th scope="col">Seminar Cover Image</th>
                                    <th scope="col">Date of Posting</th>
                                    <th scope="col">Loction</th>
                                    
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $c = 1;
                                foreach ($seminar_view as $row): ?>
                                    <tr>
                                        <th scope="row">
                                            <?= $c++; ?>
                                        </th>
                                        <td><?= $row->name?></td>
                                        <td>
                                          
                                         <img src="<?php echo base_url('images/') . $row->cover_image; ?>" style="width:50px;height:80px">
                                           
                                        </td>
                                        <td><?= $row->date?></td>
                                        <td><?= $row->location?></td>
                                      
                                        <td>
                                            <a href="<?= base_url('admin/seminar/seminar_edit/' . $row->id); ?>"
                                                class="btn btn-info btn-flat">
                                                Edit
                                            </a>
                                            <a href="<?= base_url('admin/seminar/seminar_gallery/' . $row->id); ?>"
                                                class="btn btn-success btn-flat">
                                                Gallery Imges
                                            </a>
                                            <a href="<?= base_url('admin/seminar/seminar_delete/' . $row->id); ?>"
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
<script>
    jQuery(document).ready(function ($) {
        $('#table_id').DataTable();
    });
</script>