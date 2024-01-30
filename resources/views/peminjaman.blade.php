<!DOCTYPE html>
<html>
<title>Peminjaman Saya</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <a href="/" class="w3-bar-item w3-button">Dashboard</a>
  <a href="/peminjaman_saya" class="w3-bar-item w3-button">Peminjaman Saya</a>
</div>

<div id="main">

<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h2>Peminjaman Saya</h2>
  </div>
</div>

<div class="w3-container">
  <h3>Daftar Peminjaman</h3>
  <hr>
  <table id="tabel_mobil" class="table table-stripped">
    <thead>
    <tr>
      <th>No</th>
      <th>Merek</th>
      <th>Model</th>
      <th>No Plat</th>
      <th>Tarif Sewa(/Hari)</th>
      <th>Aksi</th>
    </tr>
    </thead>
  </table>
</div>

</div>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $.ajaxSetup({
      headers:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $("#tabel_mobil").DataTable({
      processing: true,
      serverside: true,
      ajax: "{{ url('dataPeminjaman') }}",
      columns:[{
        data: 'DT_RowIndex',
        name: 'DT_RowIndex',
        orderable: false,
        searchable: false
      },{
        data: 'merek',
        name: 'Merek'
      },{
        data: 'model',
        name: 'Model'
      },{
        data: 'no_plat',
        name: 'No Plat'
      },{
        data: 'tarif_sewa',
        name: 'Tarif Sewa'
      },{
        data: 'aksi',
        name: 'Aksi'
      }]
    });
    $('#tabel_mobil').on('click', '.btn-pinjam', function(e){
      e.preventDefault();
      if(confirm("apakah ingin meminjam mobil"+$(".btn-pinjam").attr("data-id")+" ?")){
        alert("Berhasil Pinjam")
      }
    });
  });
</script>
</body>
</html>
