<footer class="footer">
      <div class="container">
        <p class="text-muted">Copyright &copy; <?php echo date('Y'); ?></p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || documex  nt.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

    <script type="text/javascript">
    var table;
    $(document).ready(function() {
 
        //datatables
        table = $('#list_data').DataTable({
            lengthMenu: [
              [ 10, 25, 50, -1 ], 
              [ '10 rows', '25 rows', '50 rows', 'Show all' ]
            ],
            dom: 'Blfrtip',
            buttons: [
              'csv', 'excel'
            ],
            "oLanguage": {
              "sSearch": "Filter : "
            },
            "processing": true, 
            "serverSide": true, 
            "order": [],
            "scrollX" : true,
            "scrollY" : '400px',
            "scrollCollapse" : true,
             
            "ajax": {
                "url": "<?php echo site_url('lister/get_data_user')?>",
                "type": "POST"
            },
 
             
            "columnDefs": [
            { 
                "targets": [ 0 ], 
                "orderable": false, 
            },
            ],
 
        });
 
    });
 
</script>

    <script type="text/javascript">
      var stateObject = {
        "BELUM PO": {
          "BELUM REKON": ["BELUM SELESAI", "SELESAI"],
          "REKON": ["SELESAI"],
          "CAPEXBOARD": ["BELUM SELESAI", "SELESAI"],
          "PELIMPAHAN": ["BELUM SELESAI", "SELESAI"],
          "PR": ["BELUM SELESAI", "SELESAI"]
        },
        "ADA PO": {
          "PO": ["BELUM SELESAI", "SELESAI"],
          "BAST": ["SELESAI"]
        },
        "DROP": {
          "DROP": ["DROP"]
        }
      }
      window.onload = function () {
        var stateSel = document.getElementById("stateSel"),
        countySel = document.getElementById("countySel"),
        citySel = document.getElementById("citySel");
        for (var state in stateObject) {
          stateSel.options[stateSel.options.length] = new Option(state, state);
        }
        stateSel.onchange = function () {
          countySel.length = 1; // remove all options bar first
          citySel.length = 1; // remove all options bar first
          if (this.selectedIndex < 1) return; // done   
          for (var county in stateObject[this.value]) {
            countySel.options[countySel.options.length] = new Option(county, county);
          }
        }
        stateSel.onchange(); // reset in case page is reloaded
        countySel.onchange = function () {
          citySel.length = 1; // remove all options bar first
          if (this.selectedIndex < 1) return; // done   
          var cities = stateObject[stateSel.value][this.value];
          for (var i = 0; i < cities.length; i++) {
            citySel.options[citySel.options.length] = new Option(cities[i], cities[i]);
          }
        }
      }
    </script>
  </body>
</html>