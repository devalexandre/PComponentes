<?php




class GPieChart extends TElement{

private $data;
private $width;
private $height;
private $titulo;


function __construct($titulo,$width = 400,$height =500){


parent::__construct('div');
$this->width = $width;
$this->height = $height;
$this->titulo = $titulo;
$this->id = 'chart_div';


}

public function setData($data){

$chart = '';
$total = count($data);
$i = 0;

foreach($data as $d => $val):

if($total < $i){
$chart .= "[$d , $i],";
}
else{
$chart .= "[$d , $i]";
}

$i++;
endforeach;



$this->data = $chart;

}


public function show(){


TScript::create("


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
          ['Mushrooms', 3],
          ['Onions', 1],
          ['Olives', 1],
          ['Zucchini', 1],
          ['Pepperoni', 2]
        ]);

        // Set chart options
        var options = {'title':'How Much Pizza I Ate Last Night',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
        chart.draw(data, options);
        
");


   

parent::show();

}


}
