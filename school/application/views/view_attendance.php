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
        <h2>Class Master</h2>

    </header>

    <?php echo $this->session->flashdata('done'); ?>
    <!-- start: page -->
    <div class="row">
        <div class="col-xs-12">

            <section class="panel">
               
                <div class="panel-body">
                    <table class="table table-bordered table-striped mb-none" id="datatable-default">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Class</th>
                                <th>Teacher</th>
                                <th>Student</th>
                                <th>Status</th>

                             
                            </tr>
                        </thead>

                        <tbody>




                            <tr data-item-id="7" role="row" class="odd">
                                <?php if (!empty($fetch_attendance)) {
                                    foreach ($fetch_attendance as $class) { ?>
                            <tr>



                                <td><?php echo $class->date; ?></td>
                                <td><?php echo $class->class; ?></td>
                                <td><?php echo $class->teacher; ?></td>
                                <td><?php echo $class->student; ?></td>
                            
                                <td><?php echo $class->attendance; ?></td>
                              

                            
                            </tr>
                        <?php }
                                } else {  ?>

                        <tr>
                            <td colspan="5"> records not found</td>
                        </tr>
                    <?php } ?>
                    </tr>



                        </tbody>
                    </table>
                </div>
            </section>