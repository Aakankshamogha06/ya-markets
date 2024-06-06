<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>View Blog</h5>
                    </div>
                    <div class="card-body">
                        <table id="table_id" class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Sr No</th>
                                    <th scope="col">Blog Name</th>
                                    <th scope="col">Blog Image</th>
                                    <th scope="col">Blog Author</th>
                                    <th scope="col">Date of Posting</th>
                                    <th scope="col">Blog Views</th>
                                    <th scope="col">Long Description</th>
                                    <th scope="col">SEO Title</th>
                                    <th scope="col">SEO Description</th>
                                    <th scope="col">Meta Tags</th>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $c = 1;
                                foreach ($blog_view as $row): ?>
                                    <tr>
                                        <th scope="row">
                                            <?= $c++; ?>
                                        </th>
                                        <td><?= $row->blog_name?></td>
                                        <td>
                                            <?php if ($row->image) { ?>
                                                <img src="<?php echo base_url('images/') . $row->image; ?>" style="width:50px;height:80px">
                                            <?php } ?>
                                        </td>
                                        <td><?= $row->author?></td>
                                        <td><?= $row->date?></td>
                                        <td><?= $row->views?></td>
                                        <td><?= substr(strip_tags($row->long_desc),0,60),'. . .' ?></td>
                                        <td><?= $row->seo_title?></td>
                                        <td><?= $row->seo_desc?></td>
                                        <td><?= $row->meta_tags?></td>
                                        <td>
                                            <a href="<?= base_url('admin/Blog/blog_edit/' . $row->id); ?>"
                                                class="btn btn-info btn-flat">
                                                Edit
                                            </a>
                                            <a href="<?= base_url('admin/Blog/blog_delete/' . $row->id); ?>"
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