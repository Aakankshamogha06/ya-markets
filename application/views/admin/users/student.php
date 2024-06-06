<div class="pcoded-main-container">
  <div class="pcoded-content"> 
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ sample-page ] start -->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>View User</h5>
          </div>
        </div>
      </div>
    <div class="card-body">
      <table id="table_id" class="table table-striped"  style="width: 100%; overflow: scroll">
        <thead>
        <tr> 
          <th>Sr No</th>
          <th>Name</th>
          <th>Email</th>
          <th>Mobile No</th>
          <?php if ($this->session->userdata('role') != '2'): ?>
          <th style="width: 150px;" class="text-right">Option</th>
          <?php endif; ?>
        </tr>
        </thead>
        <tbody>
          <?php 
          $c=1;
          foreach($all_users as $row): ?>
          <tr>
          <td><?= $c++; ?></td>
            <td><?= $row['username']; ?></td>
          
            <td><?= $row['email']; ?></td>
            <td><?= $row['mobile_no']; ?></td>
           
            <?php if ($this->session->userdata('role') != '2'): ?>
            <td class="text-right">
                <a href="<?= base_url('admin/users/del/'.$row['id']); ?>" class="btn btn-danger btn-flat <?= ($row['is_admin'] == 1)? 'disabled': ''?>" onclick="return confirm('Are you sure want to delete ?');">Delete</a>
            </td>
            <?php endif; ?>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
    <!-- [ sample-page ] end -->
<!-- [ Main Content ] end -->
<script>

jQuery(document).ready(function ($) {
  $('#table_id').DataTable();
});

  </script>