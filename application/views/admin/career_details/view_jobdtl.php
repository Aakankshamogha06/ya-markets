<div class="pcoded-main-container dataTables_wrapper">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>View Job Application</h5>
                    </div>
                    <div class="card-body">
                        <table id="table_id" class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Sr No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Profile</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Attached Resume</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $c = 1;
                                foreach ($job_application as $row): ?>
                                <tr>
                                    <th scope="row">
                                        <?= $c++; ?>
                                    </th>
                                    <td><?= $row->name?></td>
                                    <td><?= $row->email?></td>
                                    <td><?= $row->mobile_no?></td>
                                    <td><?= $row->profile?></td>
                                    <td><?= $row->message?></td>
                                    <td>
                                        <?php if ($row->resume) { ?>
                                        <img src="<?php echo base_url('images/resume/') . $row->resume; ?>"
                                            style="width:50px;height:80px">
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('admin/Career_Details/job_application_delete/' . $row->id); ?>"
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