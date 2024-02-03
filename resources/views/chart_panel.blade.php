<div id="chart"></div>

@push("scripts")
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script type="text/javascript">   
    var labels = <?php echo json_encode($labels); ?>;
    var min = new Date("<?php echo $labels->first(); ?>").getTime();
    var max = new Date("<?php echo $labels->last(); ?>").getTime();

    var data = <?php echo json_encode($data); ?>;

    var options = {
        chart: {
            height: 350,
            type: "line",
            stacked: false,
        },
        markers: {
            size: 4
        },
        dataLabels: {
            enabled: false
        },
        colors: ["#FF1654", "#247BA0"],
        series: data,
        stroke: {
            width: [4, 4]
        },
        plotOptions: {
            bar: {
                columnWidth: "20%"
            }
        },
        xaxis: {
            categories: labels,
            type: "datetime",
        },
        yaxis: [
            {
                min: 170,
                axisTicks: {
                    show: true
                },
                axisBorder: {
                    show: true,
                    color: "#FF1654"
                },
                labels: {
                    style: {
                        colors: "#FF1654"
                    }
                },
                title: {
                    text: "Dave",
                    style: {
                        color: "#FF1654"
                    }
                }
            },
            {
                min: 170,
                opposite: true,
                axisTicks: {
                    show: true
                },
                axisBorder: {
                    show: true,
                    color: "#247BA0"
                },
                labels: {
                    style: {
                        colors: "#247BA0"
                    }
                },
                title: {
                    text: "Phil",
                    style: {
                        color: "#247BA0"
                    }
                }
            }
        ],
        tooltip: {
            shared: false,
            intersect: true,
            x: {
                show: false
            }
        },
        legend: {
            horizontalAlign: "left",
            offsetX: 40
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);

    chart.render();
</script>
@endpush