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
    <title>Pembayaran SPP</title>
</head>
<body>
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <b>Pembayaran SPP</b>
    </a>
    </nav>
    <div class="container mt-4">
    <center><b><h3>Data Pembayaran SPP</h3></b></center>
        <form id="payment-form" method="post" action="<?=site_url()?>/snap/finish">

        <div class="form-group mt-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name ="nama" id= "nama">
        </div>
        <div class="form-group">
        <label for="kelas">Kelas</label>
            <select name="kelas" id="kelas" class="form-control">
                <option value="VII">VII</option>
                <option value="VIII">VIII</option>
                <option value="XI">XI</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Jumlah Bayar</label>
            <input type="text" class="form-control" name ="jmlbayar" id = "jmlbayar">
        </div>
        <div class="form-row">
            <div class="col">
                <input class = "form-control" type="hidden" name="result_type" id="result-type" value="">
            </div>
            <div class="col">
                <input class = "form-control" type="hidden" name="result_data" id="result-data" value="">
            </div>
            <div class="col">
                
            </div>
        </div>
        <button id="pay-button" class = "btn btn-primary text-center">Bayar</button>
        

        
        </form>
    </div>
<script type="text/javascript">
  
  $('#pay-button').click(function (event) {
    event.preventDefault();
    $(this).attr("disabled", "disabled");

    var nama = $("#nama").val();
    var kelas = $("#kelas").val();
    var jmlbayar = $("#jmlbayar").val();
  
  $.ajax({
    type : 'POST',
    url: '<?=site_url()?>/snap/token',
    data : {
        nama : nama,
        kelas : kelas,
        jmlbayar : jmlbayar
    },
    cache: false,

    success: function(data) {
      //location = data;

      console.log('token = '+data);
      
      var resultType = document.getElementById('result-type');
      var resultData = document.getElementById('result-data');

      function changeResult(type,data){
        $("#result-type").val(type);
        $("#result-data").val(JSON.stringify(data));
        //resultType.innerHTML = type;
        //resultData.innerHTML = JSON.stringify(data);
      }

      snap.pay(data, {
        
        onSuccess: function(result){
          changeResult('success', result);
          console.log(result.status_message);
          console.log(result);
          $("#payment-form").submit();
        },
        onPending: function(result){
          changeResult('pending', result);
          console.log(result.status_message);
          $("#payment-form").submit();
        },
        onError: function(result){
          changeResult('error', result);
          console.log(result.status_message);
          $("#payment-form").submit();
        }
      });
    }
  });
});

</script>
</body>
</html>