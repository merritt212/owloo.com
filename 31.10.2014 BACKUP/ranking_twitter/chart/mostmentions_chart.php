<?php 
$qry = "";
$qry = $qry . " SELECT owloo_user_id, owloo_screenanme , count( owloo_screenanme ) AS count";
$qry = $qry . " FROM owloo_mentions";
$qry = $qry . " WHERE owloo_user_id = '" . $update_id . "'";
$qry = $qry . " GROUP BY owloo_screenanme, owloo_user_id";
$qry = $qry . " ORDER BY count DESC";
$qry = $qry . " LIMIT 0 , 5";

$qrydata = mysql_query($qry);
$cat = "";
$val = "";
while ($fetchdata = mysql_fetch_array($qrydata))
{
    $cat = $cat . "'@" . $fetchdata["owloo_screenanme"] .  "',";
    $val = $val . $fetchdata["count"] .  ",";
}
?>
$(function () {
   var chartAudiencia;
    chartAudiencia = new Highcharts.Chart({
        chart: {
            renderTo: 'container4',
            type: 'bar'
        },
		colors: [
		   '#6296BE',
		   '#4D7492'
		],
        title: {
            text: ''
        },
        subtitle: {
            style: {
                position: 'absolute',
                right: '0px',
                bottom: '10px'
            }
        },
        legend: {
            
        },
        xAxis: {
            categories: [<?php echo $cat;?>]
        },
        yAxis: {
            title: {
                text: ''
            },
            labels: {
                formatter: function() {
                    return this.value;
                }
            },
            min: 0
        },
        tooltip: {
            formatter: function() {
                    return '<b>'+ this.series.name +'</b><br/>'+
                    this.x +': '+ formatNumber(this.y);
            },
            borderColor: '#F0F0F0',
            borderRadius: 2,
            borderWidth: 1
        },
        legend: {
            enabled: false
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            area: {
                fillOpacity: 0.5
            },
            series: {
                shadow: false
            }
        },
        series: [{
            name: 'Menciones',
            data: [<?php echo $val; ?>],
            lineWidth: 0
        }]
    });
});