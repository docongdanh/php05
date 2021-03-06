<?php require('frontend/views/common/header.php'); ?>

<body>

    <?php require('frontend/views/common/navbar.php'); ?>

    <div class="container">
        <div class="row">
            <!-- BEGIN CONTENT -->
            <?php require('frontend/views/cart/order_detail.php'); ?>
            <!-- END CONTENT -->    
        </div><!--/row-->
    </div><!--/.container-->

    <script type="text/javascript" src="webroot/js/jquery-1.10.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="webroot/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebar .panel-heading').click(function () {
                $('#sidebar .list-group').toggleClass('hidden-xs');
                $('#sidebar .panel-heading b').toggleClass('glyphicon-plus-sign').toggleClass('glyphicon-minus-sign');
            });
        });
    </script>
</body>
</html>