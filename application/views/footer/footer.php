
	<div class="footer  col-md-12  text-center">
		<footer>@Jonathan Castro All right reserved</footer>
	</div>


   <script src="<?php echo base_url();?>assets/js/jquery.js"></script>

   <!-- <script src="assets/js/sidebar.js"></script> -->
    
   <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

   <script src="<?php echo base_url();?>assets/js/cargar.js"></script>

  <!--    Datepicker js -->

   <script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>

  <!-- Datatable js -->
   <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>

   <script src="<?php echo base_url();?>assets/js/tabla.js"></script>



  <!--  <script src="assets/js/scripts.js"></script> -->

 <!--   <script src="assets/js/validar.js"></script> -->

 <!--   <script src="assets/js/tabla.js"></script> -->

    <!--  date picker libreria -->
  <!--  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->

    <!-- tabla script -->
  <!--  <script src="assets/js/jquery.dataTables.min.js"></script> -->

<!-- Date picker -->
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({dateFormat: "dd-mm-yy",
monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ]

}
      );
  } );
  </script>


  <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Ingresos', <?php echo $ingresos->totalingresos?>],
          ['Egresos', <?php echo $egresos->totalegresos?>]
          
        ]);

        // Set chart options
        var options = {'title':'Estadisticas contables',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('grafico'));
        chart.draw(data, options);
      }
    </script>





</body>
</html>