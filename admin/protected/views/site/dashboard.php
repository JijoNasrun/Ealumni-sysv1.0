<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
    $this->module->id,
);
?>
<!DOCTYPE html>
<html>

<body>
 				<section id="content" class="animated fadeIn">

                  <div class="col-md-3">
                        <div class="panel bg-danger light of-h mb10">
                            <div class="pn pl20 p5">
                                <div class="icon-bg"> <i class="fa fa-bar-chart-o"></i> </div>
                                <h2 class="mt15 lh15"> <?php echo $result['a']; ?></h2>
                                <h5 class="text-muted">Admin</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="panel bg-danger light of-h mb10">
                            <div class="pn pl20 p5">
                                <div class="icon-bg"> <i class="fa fa-bar-chart-o"></i> </div>
                                <h2 class="mt15 lh15"> <?php echo $result2['b']; ?></h2>
                                <h5 class="text-muted">Summon</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="panel bg-danger light of-h mb10">
                            <div class="pn pl20 p5">
                                <div class="icon-bg"> <i class="fa fa-bar-chart-o"></i> </div>
                                <h2 class="mt15 lh15"> <?php echo $result3['c']; ?></h2>
                                <h5 class="text-muted">Staff</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="panel bg-danger light of-h mb10">
                            <div class="pn pl20 p5">
                                <div class="icon-bg"> <i class="fa fa-bar-chart-o"></i> </div>
                                <h2 class="mt15 lh15"> <?php echo $result4['d']; ?></h2>
                                <h5 class="text-muted">Issued</h5>
                            </div>
                        </div>
                    </div>
                   
            </section>

</body>

</html>
