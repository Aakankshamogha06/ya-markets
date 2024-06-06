<div class="pcoded-main-container dataTables_wrapper">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>View User's Session Data</h5>
                    </div>
                    <div class="card-body">
                        <table id="table_id" class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Sr No</th>
                                    <th scope="col">Session name</th>
                                    <th scope="col">Session country</th>
                                    <th scope="col">Session location</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mobile No.</th>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $c = 1;
                                foreach ($session_data_view as $row): ?>
                                <tr>
                                    <th scope="row">
                                        <?= $c++; ?>
                                    </th>
                                    <td><?=$row->session_name?></td>
                                    <td><?=$row->session_country?></td>
                                    <td><?=$row->session_location?></td>
                                    <td><?=$row->name?></td>
                                    <td><?=$row->email?></td>
                                    <td><?=$row->mobile_no?></td>
                                    <td>
                                        <a href="<?= base_url('admin/OnetoOne_Session/session_delete/' . $row->id); ?>"
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