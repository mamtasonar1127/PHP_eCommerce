<?php
    require('top.inc.php');
    $sql="SELECT * FROM categories order by categories asc";
    $res = mysqli_query($con,$sql);

?>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- /row -->
        <div class="row mt">
            <div class="col-lg-12">
                <div class="content-panel">
                    <h4><i class="fa fa-angle-right"></i> Categories List</h4>
                    <section id="no-more-tables">
                        <table class="table table-bordered table-striped table-condensed cf">
                            <thead class="cf">
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Categories</th>
                                <th>Actions</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                                while($row=mysqli_fetch_assoc($res)){
                            ?>
                            <tr>
                                <th></th>
                                <th><?php echo $row['categories_id']?></th>
                                <th><?php echo $row['categories']?></th>
                                <th></th>
                            </tr>
                             <?php
                                }
                             ?>
                            </tbody>
                        </table>
                    </section>
                </div>
                <!-- /content-panel -->
            </div>
            <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
    </section>
    <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
<?php require('footer.inc.php') ?>