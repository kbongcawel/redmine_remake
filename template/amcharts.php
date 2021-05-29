<?php
$a = countData($ourl);
$b = countData($onedayurl);
$closed_raw = $a-$b; 

function percent($num, $total)
{
   if($total !=0){ 
   return number_format((100.0*$num)/$total, 2);
   }
}
$closed = percent($closed_raw,$a);
if($closed == 0 | $closed == null){
echo "No data to display";
}else{
echo '<script>
am4core.ready(function() {


 am4core.useTheme(am4themes_animated);




// Create chart instance
 var chart = am4core.create("chartdiv", am4charts.RadarChart);

// Add data
 chart.data = [{
   "category": "Closed within 24 hours",
     "closed": '.$closed.'
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
                         categoryAxis.renderer.labels.template.adapter.add("fill", function(fill, target) {
                           return (target.dataItem.index >= 0) ? chart.colors.getIndex(target.dataItem.index) : fill;
                           });
                           categoryAxis.renderer.minGridDistance = 10;

                           var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
                           valueAxis.renderer.grid.template.strokeOpacity = 0;
                           valueAxis.min = 0;
                           valueAxis.max = 100;
                           valueAxis.strictMinMax = true;

                           
                           var series2 = chart.series.push(new am4charts.RadarColumnSeries());
                           series2.dataFields.valueX = "closed";
                           series2.dataFields.categoryY = "category";
                           series2.clustered = false;
                           series2.columns.template.strokeWidth = 0;
                           series2.columns.template.tooltipText = "[bold]{closed}%[/]";
                           series2.columns.template.radarColumn.cornerRadius = 20;

                           series2.columns.template.adapter.add("fill", function(fill, target) {
                             return chart.colors.getIndex(target.dataItem.index);
                             });   

                             });
     </script>'; // end am4core.ready()
 }
?>
