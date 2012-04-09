$(function() {
  
    Highcharts.setOptions({
        colors:  ['#97090d' , 
                  '#d00011' , 
                  '#f26922' , 
                  '#f3ae13' , 
                  '#00a95a' , 
                  '#74c043' , 
                  '#97c83c' , 
                  '#c1d72e' , 
                  '#00a290' , 
                  '#02b6c4' , 
                  '#0091c5' , 
                  '#007dab' , 
                  '#1e5782']
    });
  
    var chart;

    $(document).ready(function() {
        chart = new Highcharts.Chart({         
            credits: {
                enabled: false
              },
            chart: {
                renderTo: 'container',
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },

            title: {
                text: ''
            },

            tooltip: {
                formatter: function() {
                    return '<b>' + this.point.name + '</b>: ' + this.percentage.toFixed(2) + ' %';
                }
            },

            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    size: "100%",
                    dataLabels: {
                        enabled: false,
                        color: '#000000',
                        connectorColor: '#000000',
                        distance: 5,
                        softConnector: false,
                        rotation: 35,
                        style : {
                          fontSize: '10px'
                        },
                        formatter: function() {
                            return this.point.name + ': ' + this.percentage.toFixed(2) + ' %';
                        }
                    }
                }
            },
            
            series: [{
                type: 'pie',
                name: 'Browser share',
                data: [
                  ['National Defense', 24.93],
                  ['Health Care', 23.66],              
                  ['Jobs and Family Security', 19.12],
                  ['Net Interest', 8.12],
                  ['Additional Government Programs', 7.86],
                  ['Veterans Benefits', 4.49],
                  ['Education and Job Training', 3.58],
                  ['Natural Resources, Energy and Environment', 2.04],
                  ['Immigration, Law Enforcement, and Administration of Justice', 1.98],
                  ['International Affairs', 1.61],
                  ['Science Space and Technology Programs', 1.04],
                  ['Agriculture', .73],
                  ['Community, Area, and Regional Development', .48],
                  ['Response to National Disasters', .36]
                ]
            }]
        });
    });

    $('<div class="legend" />').insertAfter('#container');
    $('.legend').append('<ul />');
    nameData = chart.series[0].data;
    for (var i = 0; i < nameData.length; i++){
      legendName = nameData[i]['name'];
      legendColor = nameData[i]['color'];
      legendPercent = nameData[i]['y'];
      $('.legend ul').append('<li style="color:' + legendColor + '">' + legendName + ' : ' + legendPercent +' %</li>');
    }
    //$('.legend ul li').click(function(){
    //  alert('clicked!');
    //  $(this.point).click();
    //});
});