<!-- Fixed navbar -->
  <div class="container">
        <div class="navbar-header-">
              <?php if (isset($_SESSION['username'])) { ?>
                  <p align="Left">Anda Login Sebagai <strong><?=$_SESSION['username']?></strong> | <?=$_SESSION['ket']?></p>
            <?php  } else {

            }?>

        </div>
    </div>
