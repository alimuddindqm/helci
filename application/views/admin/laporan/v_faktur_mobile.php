<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="<?=base_url()?>/assets/css/receipt.css">
        <title>Helcious Receipt</title>
    </head>
    <body onload="window.print()">

    <?php 
    $b=$data->row_array();
?>
        <div class="ticket">
            <img src="<?=base_url()?>/assets/img/helcious-margin-0.png" alt="Logo" width="100%">
            <p class="centered">Cabang 1, Pabuaran
                <br></p>
            <p><?php echo $b['jual_tanggal'];?>
            <br><span>Order ID<?php echo $b['jual_nofak'];?></span></p>
            <table>
                <thead>
                    <tr class="headitem">
                        <th class="description">Pembelian</th>
                        <th class="quantity">Q.</th>
                        <th class="price">Sat</th>
                        <th class="price">Sub</th>
                    </tr>
                </thead>
                <tbody>

<?php 
$no=0;
    foreach ($data->result_array() as $i) {
        $no++;
        
        $nabar=$i['d_jual_barang_nama'];
        $satuan=$i['d_jual_barang_satuan'];
        
        $harjul=$i['d_jual_barang_harjul'];
        $qty=$i['d_jual_qty'];
        $diskon=$i['d_jual_diskon'];
        $total=$i['d_jual_total'];
?>

                    <tr>
                        <td class="description"><br><?php echo $nabar;?><br></td>
                        <td class="quantity"><br><?php echo $qty;?><br></td>
                        <td class="price"><br><?php echo number_format($harjul);?><br></td>
                        <td class="price"><br><?php echo number_format($total);?><br></td>
                    </tr>
<?php }?>

                    <tr class="totalitem">
                        <td class="description"><br>Total</td>
                        <td class="quantity"></td>
                        <td class="price"></td>
                        <td class="price"><br><?php echo ''.number_format($b['jual_total']);?></td>
                    </tr>

            

                </tbody>
            </table>
            <p class="centered">Thanks for your purchase!
                <br>Helcious.id | IG Helcious</p>
        </div>
        <!-- <button id="btnPrint" class="hidden-print">Print</button> -->
        <script src="script.js"></script>
    </body>
</html>