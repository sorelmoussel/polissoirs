
<body>
    <div class="container">

        <?php
        include '../controller/config.php';
        include ($root . '/app/view/fragment/fragmentMenuVin.html');
        ?>


        <!-- ===================================================== -->
        <!-- Jumbotrom -->
        <!-- ===================================================== -->

        <div class="panel panel-success">
            <div class="panel-heading">
                fragmentHeader.html
            </div>
        </div> 
        <div class="jumbotron">
            <h1>La cave de l'Utt </h1>
            <p>C'est la meilleure cave de la région ....</p>
        </div>

        <!-- ===================================================== -->
        <!-- ===================================================== -->


        <form role="form" method='get' action='router.php'>
            <div class="form-group">
                <input type="hidden" name='action' value='idFormAction'>
                <label for="id">id : </label> <select class="form-control" id='id' name='id' style="width: 100px">
                    <?php
                    foreach ($results as $key => $id) {
                        echo ("<option>$id</option>");
                    }
                    ?>
                </select>
            </div>
            <p/>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
        <p/>
    </div>

