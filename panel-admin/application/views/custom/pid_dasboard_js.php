<!-- ChartJS 1.0.1 -->


<script src="<?=base_url();?>assets/plugins/chartjs/Chart.min.js"></script>

<script type="text/javascript">
	$(function () {

  'use strict';

  /* ChartJS
   * -------
   * Here we will create a few charts using ChartJS
   */

  //-----------------------
  //- MONTHLY SALES CHART -
  //-----------------------
  //-------------
  //- PIE CHART -
  //-------------
  // Get context with jQuery - using jQuery's .get() method.
  var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
  var pieChart = new Chart(pieChartCanvas);
  var PieData = [
    {
      value: <?=$edu['jumlah'];?>,
      color: "#e67e22",
      highlight: "#e67e22",
      label: "Education"
    },
    {
      value: <?=$dig['jumlah'];?>,
      color: "#2980b9",
      highlight: "#2980b9",
      label: "Digital"
    },
    {
      value: <?=$ci['jumlah'];?>,
      color: "#e74c3c",
      highlight: "#e74c3c",
      label: "Creative Industry"
    },
    {
      value: <?=$tou['jumlah'];?>,
      color: "#f1c40f",
      highlight: "#f1c40f",
      label: "Tourism"
    },
    {
      value: <?=$envi['jumlah'];?>,
      color: "#2ecc71",
      highlight: "#2ecc71",
      label: "Environment"
    },
    {
      value: <?=$sci['jumlah'];?>,
      color: "#3498db",
      highlight: "#3498db",
      label: "Science"
    }
  ];
  var pieOptions = {
    //Boolean - Whether we should show a stroke on each segment
    segmentShowStroke: true,
    //String - The colour of each segment stroke
    segmentStrokeColor: "#fff",
    //Number - The width of each segment stroke
    segmentStrokeWidth: 1,
    //Number - The percentage of the chart that we cut out of the middle
    percentageInnerCutout: 50, // This is 0 for Pie charts
    //Number - Amount of animation steps
    animationSteps: 100,
    //String - Animation easing effect
    animationEasing: "easeOutQuart",
    //Boolean - Whether we animate the rotation of the Doughnut
    animateRotate: true,
    //Boolean - Whether we animate scaling the Doughnut from the centre
    animateScale: false,
    //Boolean - whether to make the chart responsive to window resizing
    responsive: true,
    // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio: false,
    //String - A legend template
    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
    //String - A tooltip template
    tooltipTemplate: "<%=value %> delegates <%=label%>"
  };
  //Create pie or douhnut chart
  // You can switch between pie and douhnut using the method below.
  pieChart.Doughnut(PieData, pieOptions);
  //-----------------
  //- END PIE CHART -
  //-----------------
});


</script>