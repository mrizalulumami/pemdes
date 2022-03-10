  <!-- Essential javascripts for application to work-->
  <script src="<?= base_url('assets/');?>js/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url('assets/');?>js/popper.min.js"></script>
  <script src="<?= base_url('assets/');?>js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/');?>js/main.js"></script>
  <script type="text/javascript" src="<?=base_url('assets/');?>js/plugins/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="<?=base_url('assets/');?>js/plugins/dataTables.bootstrap.min.js"></script>
  
  <script type="text/javascript">
        // $('#sampleTable').DataTable();
        $('#sampleTable').dataTable( {
        "searching": false
        } );
        $('#sampleTable2').dataTable( {
        "searching": false
        } );
        $('#tabel_julu').dataTable({
            "searching": false,
            "bPageLength": 5,
            "bLengthChange": false,
            "info": false
        });
        $('#tabel_jumdes').dataTable( {
        } );
    </script>

    <script>
        function calculateTotal() {
            let unit_price = {
                air: 500
            };
            let item_price = {}

            item_price.air = ($("#beban").val() * unit_price.air)
            $("#total_tagihan").val(item_price.air);

        }


        $(function() {
            $(".qty").on("change keyup", calculateTotal)
        })
      </script>

        <script type="text/javascript">
             $('#mudak').dataTable({
                "pageLength": 1,
                "info": false,
                "bLengthChange":false  
             });
            // function in berfungsi untuk memindahkan data kolom yang di klik menuju text box
            function masuk(txt, data1, data2) {
                document.getElementById('id_pelanggan').value = data1; // ini berfungsi mengisi value  yang ber id textbox
                document.getElementById('nama_pelanggan').value = data2;
            }
        </script>
</body>

</html>