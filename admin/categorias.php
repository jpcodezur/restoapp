<?php include "autoload.php"; ?>
<!DOCTYPE html>
<html lang="en">

<?php include "includes/head.php" ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <?php include "includes/nav-bar.php"; ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <?php include "includes/left-bar.php"; ?>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                
                <div class="row">
                    
                    <!--<form role="form">
                        <div class="form-group">
                            <label>Text Input</label>
                            <input class="form-control">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                    </form>-->
                    
                    <div class="col-lg-12">
                        <div class="row">
                            <button id="nueva-categoria" class="btn btn-lg btn-primary" type="button">Nueva Categoria</button>
                        </div>
                        <h2>Categorias</h2>
                        <div class="table-responsive">
                            <?php Helper::getInstance()->renderTable("categorias",$_POST); ?>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
