<?php
 include '../../controllers/admin/reportController.php';
  for ($i = 0; $i < count($dataa); $i++){
      $dataPoints[$i] = array("label"=>$dataa[$i]['name'] , "y"=> ($dataa[$i]['soldMount']/$dataa[$i]['existMount']));
      $dataPointss[$i]=array("y" => $dataa[$i]['existMount'], "label" => $dataa[$i]['name'] );    
  }
   for($i=0;$i < count($dataaa);$i++){
       $counts[$i]=0;
   }
  for($i=0;$i < count($dataaa);$i++){
    for($j=0;$j < count($dataaall);$j++){
        if($dataaall[$j]["invoiceDate"]==$dataaa[$i]["invoiceDate"]){
         $counts[$i]++;  
        }
    }
}
    for($i=0;$i < count($dataaa) && $i<10 ;$i++){  
       $dataPointsss[$i]=array("y" =>$counts[$i], "label" => $dataaa[$i]['invoiceDate']);         
    }
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title: {
		text: "Salles %"
	},
	axisY: {
		suffix: "%",
		scaleBreaks: {
			autoCalculate: true
		}
	},
	data: [{
		type: "column",
		yValueFormatString: "#.#####%",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
        
});
chart.render();
var chartt = new CanvasJS.Chart("chartContainerr", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "items"
	},
	axisY: {
		title: "Exist Mount"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## tonnes",
		dataPoints: <?php echo json_encode($dataPointss, JSON_NUMERIC_CHECK); ?>
	}]
});
chartt.render();
var charttt = new CanvasJS.Chart("chartContainerrr", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Selles at last 10 Days"
	},
	axisY: {
		title: "Soled"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## Piece",
		dataPoints: <?php echo json_encode($dataPointsss, JSON_NUMERIC_CHECK); ?>
	}]
});
charttt.render(); 
}
</script>
</head>
<body>
<div id="chartContainerr" style="height: 370px; width: 100%;"></div>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<div id="chartContainerrr" style="height: 370px; width: 100%;"></div>
<script src="../../../canvasjs.min.js"></script>
</body>
</html>