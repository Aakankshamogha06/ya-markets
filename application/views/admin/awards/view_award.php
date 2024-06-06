<div class="pcoded-main-container dataTables_wrapper">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>View Awards</h5>
                    </div>
                    <div class="card-body">
                        <table id="table_id" class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Sr No</th>
                                    <th scope="col">Award Name</th>
                                    <th scope="col">Award Image</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Year</th>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $c = 1;
                                foreach ($awards_view as $row): ?>
                                <tr>
                                    <th scope="row">
                                        <?= $c++; ?>
                                    </th>
                                    <td><?= $row->award_name?></td>
                                    <td>

                                        <img src="<?php echo base_url('images/') . $row->award_image; ?>"
                                            style="width:50px;height:80px">

                                    </td>
                                    <td><?= $row->award_desc?></td>
                                    <td><?= $row->award_year?></td>
                                    <td>
                                        <a href="<?= base_url('admin/awards/awards_edit/' . $row->id); ?>"
                                            class="btn btn-info btn-flat">
                                            Edit
                                        </a>
                                        <a href="<?= base_url('admin/awards/awards_delete/' . $row->id); ?>"
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
jQuery(document).ready(function($) {
    $('#table_id').DataTable();
});
</script>