<script type="text/javascript" src="<?php echo base_url(); ?>assets/javascripts/jquery.min.js"></script>

<style>
    #loading {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1000;
        background-color: white;
        opacity: .8;
    }

    .ajax-loader {
        position: absolute;
        left: 50%;
        top: 50%;
        margin-left: -32px;
        /* -1 * image width / 2 */
        margin-top: -32px;
        /* -1 * image height / 2 */
        display: block;
    }
</style>
<div id="loading" style="display: none;">
    <span class="ajax-loader"><img src="<?php echo base_url(); ?>img/loading.gif"></span>
</div>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Teacher Master</h2>

    </header>

    <?php echo $this->session->flashdata('done'); ?>
    <!-- start: page -->
    <div class="row">
        <div class="col-xs-12">

            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">

                    </div>
                    <a id="addToTable" href="<?= base_url(); ?>index.php/add_teacher" class="btn btn-primary">Add </a>
                </header>
                <div class="panel-body">
                    <table class="table table-bordered table-striped mb-none" id="datatable-default">
                        <thead>
                            <tr>
                                <th>Teacher Name</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Action</th>

                            </tr>
                        </thead>

                        <tbody>




                            <tr data-item-id="7" role="row" class="odd">
                                <?php if (!empty($view_teacher)) {
                                    foreach ($view_teacher as $teacher) { ?>
                            <tr>



                                <td><?php echo $teacher->teacher; ?></td>
                                <td><?php echo $teacher->email; ?></td>
                             
                                <td><?php echo $teacher->username; ?></td>
                                <td><?php echo $teacher->password; ?></td>

                                <td class="actions">


                                    <a href="<?php echo base_url()?>index.php/get_teacher_master?teacher_id=<?php echo $teacher->teacher_id; ?>"  class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                        


                                    <a href="<?php echo base_url()?>index.php/delete_teacher_master?teacher_id=<?php echo $teacher->teacher_id; ?>" onclick="return confirm('Are you sure ?')" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        <?php }
                                } else {  ?>

                        <tr>
                            <td colspan="3"> records not found</td>
                        </tr>
                    <?php } ?>
                    </tr>



                        </tbody>
                    </table>
                </div>
            </section>