<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-HksAZsLPLyPVtFmb"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <title>Konfirmasi Pembayaran</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Konfirmasi Pembayaranmu</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td width = "2%">Status Kode</td>
                        <td width = "2%">:</td>
                        <td width = "25%"><?php echo $finish->status_code?></td>
                    </tr>
                    <tr>
                        <td width = "2%">Status Message</td>
                        <td width = "2%">:</td>
                        <td width = "25%"><?php echo $finish->status_message?></td>
                    </tr>
                    <tr>
                        <td width = "2%">Order ID</td>
                        <td width = "2%">:</td>
                        <td width = "25%"><?php echo $finish->order_id?></td>
                    </tr>
                    <tr>
                        <td width = "2%">Jumlah Bayar</td>
                        <td width = "2%">:</td>
                        <td width = "25%"><?php echo $finish->gross_amount?></td>
                    </tr>
                    <tr>
                        <td width = "2%">Tipe Pembayaran</td>
                        <td width = "2%">:</td>
                        <td width = "25%"><?php echo $finish->payment_type?></td>
                    </tr>
                    <tr>
                        <td width = "2%">Transaksion Status</td>
                        <td width = "2%">:</td>
                        <td width = "25%"><?php echo $finish->transaction_status?></td>
                    </tr>
                    <tr>
                        <td width = "2%">Bill Key</td>
                        <td width = "2%">:</td>
                        <td width = "25%"><?php 
                                    if(isset($finish->bill_key)){
                                        echo $finish->bill_key;
                                    }else{
                                        echo "-";
                                    }
                                    ?></td>
                    </tr>
                    <tr>
                        <td width = "2%">Biller Code</td>
                        <td width = "2%">:</td>
                        <td width = "25%"><?php 
                                    if(isset($finish->biller_code)){
                                        echo $finish->biller_code;
                                    }else{
                                        echo "-";
                                    }
                                    ?></td>
                    </tr>
                    <tr>
                        <td width = "2%">Bank</td>
                        <td width = "2%">:</td>
                        <td width = "25%"><?php 
                                    if(isset($finish->va_numbers[0]->bank)){
                                        echo $finish->va_numbers[0]->bank;
                                    }else{
                                        echo "-";
                                    }
                                    ?></td>
                    </tr>
                    <tr>
                        <td width = "2%">VA Number</td>
                        <td width = "2%">:</td>
                        <td width = "25%"><?php  
                                    if(isset($finish->va_numbers[0]->va_number)){
                                        echo $finish->va_numbers[0]->va_number;
                                    }else{
                                        echo "-";
                                    }
                                    ?></td>
                    </tr>

                    <tr>
                        <td width = "2%">Panduan Pembayaran</td>
                        <td width = "2%">:</td>
                        <td width = "25%"><a href="<?php echo $finish->pdf_url?>">Panduan Pembayaran</a></td>
                    </tr>
                
                </table>
            </div>
            <div class="card-footer">
            
            </div>
        </div>
    </div>
</body>
</html>