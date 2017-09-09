<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 ">
        <div class="inputbox well well-lg">
            <form class="form-horizontal" method="post" action="suche.php">
                <?php
                foreach(array(

                    array("stopName"=>"München","zeit"=>"10 Stunden"),
                    array("stopName"=>"Hamburg","zeit"=>"12 Stunden"),
                    array("stopName"=>"Berlin","zeit"=>"13 Stunden"),
                ) as $item) {

                ?>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Zwischenstopp</label>

                    <div class="col-sm-5">
                        <?php
                        echo $item["stopName"];
                        ?>
                    </div>

                    <div class="col-sm-5">
                        <button type="submit" class="btn btn-info"><?php echo $item["zeit"];?></button>
                    </div>
                </div>
                <?php
                }
                ?>


            </form>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>


<figure id="container" title="spin the truck"></figure>
<script src="https://d3js.org/d3.v3.min.js"></script>
<script src="js/transmit_js_3dtruck.min.js"></script>