<?php
$title = "Peta Sebaran SMA";
include_once "header.php";
?>

      <div class="row">

        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard centered">
            <div class="panel-heading">
              <h2 class="panel-title"><strong> - TAMPILAN PETA - </strong></h2>
              <table border=0 align="center">
                <tr>
                  <td>
              <div onClick="window.location = 'http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/legendan.php';">
                <input type="radio" style="pointer-events:none;" > Legend
            </div></td>
                  <td>
            <div onClick="window.location = 'http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/petacluster.php';">
                <input type="radio" style="pointer-events:none;"checked > Cluster
            </div></td>
          </table>

            </div>
            <div class="panel-body">
            <?php include_once "sma.php"; ?>
</script>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
<?php include_once "footer.php"; ?>

<script type="text/javascript">
 var urlmenu = document.getElementById( 'menu1' );
 urlmenu.onchange = function() {
      window.open( this.options[ this.selectedIndex ].value );
 };
</script>