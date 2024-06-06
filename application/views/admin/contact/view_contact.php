<div class="pcoded-main-container dataTables_wrapper">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="me-auto p-2">
                            <h3>View contact</h3>
                        </div>
                        
                    </div>
                    <div class="card-body">
                    <table id="table_id" class="table table-striped">
                           
                            <thead>
                                <tr>
                                    <th scope="col">Sr No</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mobile Number</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $c = 1;
                                foreach ($contact_view as $row): ?>
                                    <tr>
                                        <th scope="row">
                                            <?= $c++; ?>
                                        </th>
                                        <td><?= $row->firstname ?></td>
                                        <td><?= $row->lastname ?></td>
                                        <td>
                                            <?= $row->email ?>
                                        </td>
                                        <td>
                                            <?= $row->mobile_no ?>
                                        </td>
                                        <td>
                                          <textarea  readonly> <?=  $row->message ?></textarea>
                                        </td>
                                        <td>
                                            
                                            <a href="<?= base_url('admin/contact/contact_delete/' . $row->id); ?>"
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