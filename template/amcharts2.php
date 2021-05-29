<?php
 $a = countData($ourl);//received
 $b = countData($onedayurl);//24 hours open

 $open = percent($b,$a);
if($open == 0 | $open == null){
echo "No data to display";
}else{
echo '<script>
am4core.ready(function() {


 am4core.useTheme(am4themes_animated);




// Create chart instance
 var chart = am4core.create("chartdiv2", am4charts.RadarChart);

// Add data
 chart.data = [{
   "category": "Open for more than 24 hours",
       "full": '.$open.'
                  }];

                         // Make chart not full circle
                         chart.startAngle = -90;
                         chart.endAngle = 180;
                         chart.innerRadius = am4core.percent(60);

                         // Set number format
                         chart.numberFormatter.numberFormat = "#.#";

                         // Create axes
                         var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
                         categoryAxis.dataFields.category = "category";
                         categoryAxis.renderer.grid.template.location = 0;
                         categoryAxis.renderer.grid.template.strokeOpacity = 0;
                         categoryAxis.renderer.labels.template.horizontalCenter = "right";
                         categoryAxis.renderer.labels.template.fontWeight = 500;

                           categoryAxis.renderer.minGridDistance = 10;

                           var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
                           valueAxis.renderer.grid.template.strokeOpacity = 0;
                           valueAxis.min = 0;
                           valueAxis.max = 100;
                           valueAxis.strictMinMax = true;

                           // Create series
                           var series1 = chart.series.push(new am4charts.RadarColumnSeries());
                           series1.dataFields.valueX = "full";
                           series1.dataFields.categoryY = "category";
                           series1.clustered = false;
                           series1.columns.template.fill = "#F00";
                           series1.columns.template.fillOpacity = 0.8 //0.08;
                           series1.columns.template.cornerRadiusTopLeft = 20;
                           series1.columns.template.strokeWidth = 0;
                           series1.columns.template.tooltipText = "[bold]{full}%[/]"
                           series1.columns.template.radarColumn.cornerRadius = 20;

                           
                             // Add cursor
                            // chart.cursor = new am4charts.RadarCursor();

                             });
     </script>'; // end am4core.ready()
  }
?>
