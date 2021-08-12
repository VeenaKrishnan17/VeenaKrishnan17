<html>
    <head>
    <title>Transfer History</title>
        <link rel="icon" href="https://www.pngfind.com/pngs/m/16-162850_png-file-svg-saving-bank-icon-png-transparent.png" >
        <link rel="stylesheet" href="index.css" >
        <link rel="stylesheet" type="text/css" href="table.css">
        <link rel="stylesheet" type="text/css" href="style.css">   
    </head>
    <body>         
        <!-- header starts -->
        <div class="header_container">
            <div class="header_logo"> TSF Bank </div>
            <div class="nav">
                <div class="nav-items" onclick="document.location='index.php'">Home</div>
                <div class="nav-items" onclick="document.location='viewusers.php'">View users</div>
                <div class="nav-items" onclick="document.location='transfermoney.php'">Transfer Money</div>
                <div class="nav-items">History</div>
            </div>
        </div>
        <!-- header ends -->
        <div class="banner">
            <div class="overlay1">
        <!-- table starts -->
        <div class="table-responsive-sm">
            <table style="margin-top:15px;" class="table table-hover table-striped table-condensed table-bordered">
                <thead style="color : black;">
                    <tr>
                        <th class="text-center">S.No.</th>
                        <th class="text-center">Sender</th>
                        <th class="text-center">Receiver</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Date & Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include 'connection.php';

                    $sql = "select * from transaction";

                    $query = mysqli_query($conn, $sql);

                    while ($rows = mysqli_fetch_assoc($query)) {
                    ?>

                        <tr style="color : black;">
                            <td class="py-2"><?php echo $rows['sno']; ?></td>
                            <td class="py-2"><?php echo $rows['sender']; ?></td>
                            <td class="py-2"><?php echo $rows['receiver']; ?></td>
                            <td class="py-2"><?php echo $rows['balance']; ?> </td>
                            <td class="py-2"><?php echo $rows['datetime']; ?> </td>

                        <?php
                    }

                        ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
    <!-- footer starts -->
       <div class="footer">
            Designed by VEENA K, Web Development Intern at The Sparks Foundation !!

        </div>
    <!-- footer ends -->
</body>

</html>