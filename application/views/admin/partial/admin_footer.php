  <!-- Essential javascripts for application to work-->
  <script src="<?= base_url('assets/'); ?>js/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/main.js"></script>
  <script type="text/javascript" src="<?= base_url('assets/'); ?>js/plugins/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="<?= base_url('assets/'); ?>js/plugins/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript" src="<?= base_url('assets/'); ?>js/plugins/dataTables.bootstrap.min.js"></script>

  <script type="text/javascript">
// $('#sampleTable').DataTable();
$('#sampleTable').dataTable({
    "searching": false
});
$('#sampleTable2').dataTable({
    "searching": false
});
$('#tabel_julu').dataTable({
    "searching": false,
    "bPageLength": 5,
    "bLengthChange": false,
    "info": false
});
$('#tabel_jumdes').dataTable({});
  </script>

  <script>
    function calculateTotal() {
        let unit_price = {
            air: 500
        };
        let item_price = {}

        item_price = ($("#meter_akhir").val() - $("#meter_awal").val())
        $("#pemakaian").val(item_price);
        $("#total_tagihan").val(item_price * unit_price.air);


    }


    $(function() {
        $(".qty").on("change keyup", calculateTotal)
    })
  </script>

  <script type="text/javascript">
$('#mudak').dataTable({
    "pageLength": 3,
    "info": false,
    "bLengthChange": false
});
// function in berfungsi untuk memindahkan data kolom yang di klik menuju text box
function masuk(txt, data1, data2, data3, data4) {
    document.getElementById('id_pelanggan').value = data1; // ini berfungsi mengisi value  yang ber id textbox
    document.getElementById('nama_pelanggan').value = data2;
    document.getElementById('bulan_akhir').value = data3;
    document.getElementById('meter_awal').value = data4;
}
  </script>
  <script type="text/javascript">
$(document).ready(function() {
    // Initialize
    $('#datepicker').datepicker({
        "keyboardNavigation": false,
        "format": " yyyy",
        "viewMode": "years",
        "minViewMode": "years"
    });

});
  </script>
  </body>

  </html>
