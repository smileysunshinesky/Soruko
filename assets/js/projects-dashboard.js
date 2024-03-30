/* completed projects */
var options = {
    series: [{
        data: [98, 110, 80, 145, 105, 112, 87, 148, 102]
    }],
    chart: {
        height: 70,
        type: 'area',
        fontFamily: 'Poppins, sans-serif',
        foreColor: '#5d6162',
        zoom: {
            enabled: false
        },
        sparkline: {
            enabled: true
        }
    },
    tooltip: {
        enabled: true,
        x: {
            show: false
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return ''
                }
            }
        },
        marker: {
            show: false
        }
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'straight'
    },
    title: {
        text: undefined,
    },
    grid: {
        borderColor: 'transparent',
    },
    xaxis: {
        crosshairs: {
            show: false,
        }
    },
    colors: ["var(--primary-color)"],
    stroke: {
        width: [1],
    },
    fill: {
        type: 'gradient',
        gradient: {
            opacityFrom: 0.5,
            opacityTo: 0.2,
            stops: [0, 60],
            colorStops: [
              [
                {
                  offset: 0,
                  color: 'var(--primary02)',
                  opacity: 1
                },
                {
                  offset: 60,
                  color: 'var(--primary02)',
                  opacity: 0.1
                }
              ],
            ]
        },
    },
};
var chart1 = new ApexCharts(document.querySelector("#completed-projects"), options);
chart1.render();
/* completed projects */

/* overdue projects */
var options = {
    series: [{
        data: [98, 110, 80, 145, 105, 112, 87, 148, 102]
    }],
    chart: {
        height: 70,
        type: 'area',
        fontFamily: 'Poppins, sans-serif',
        foreColor: '#5d6162',
        zoom: {
            enabled: false
        },
        sparkline: {
            enabled: true
        }
    },
    tooltip: {
        enabled: true,
        x: {
            show: false
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return ''
                }
            }
        },
        marker: {
            show: false
        }
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'straight'
    },
    title: {
        text: undefined,
    },
    grid: {
        borderColor: 'transparent',
    },
    xaxis: {
        crosshairs: {
            show: false,
        }
    },
    colors: ["rgb(52, 152, 219)"],
    stroke: {
        width: [1],
    },
    fill: {
        type: 'gradient',
        gradient: {
            opacityFrom: 0.5,
            opacityTo: 0.2,
            stops: [0, 60],
        }
    },
};
document.getElementById('overdue-projects').innerHTML = '';
var chart2 = new ApexCharts(document.querySelector("#overdue-projects"), options);
chart2.render();
/* overdue projects */

/* total projects */
var options = {
    series: [{
        data: [98, 110, 80, 145, 105, 112, 87, 148, 102]
    }],
    chart: {
        height: 70,
        type: 'area',
        fontFamily: 'Poppins, sans-serif',
        foreColor: '#5d6162',
        zoom: {
            enabled: false
        },
        sparkline: {
            enabled: true
        }
    },
    tooltip: {
        enabled: true,
        x: {
            show: false
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return ''
                }
            }
        },
        marker: {
            show: false
        }
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'straight'
    },
    title: {
        text: undefined,
    },
    grid: {
        borderColor: 'transparent',
    },
    xaxis: {
        crosshairs: {
            show: false,
        }
    },
    colors: ["rgb(46, 204, 113)"],
    stroke: {
        width: [1],
    },
    fill: {
        type: 'gradient',
        gradient: {
            opacityFrom: 0.5,
            opacityTo: 0.2,
            stops: [0, 60],
        }
    },
};
document.getElementById('total-projects').innerHTML = '';
var chart3 = new ApexCharts(document.querySelector("#total-projects"), options);
chart3.render();
/* total projects */

/* pending projects */
var options = {
    series: [{
        data: [98, 110, 80, 145, 105, 112, 87, 148, 102]
    }],
    chart: {
        height: 70,
        type: 'area',
        fontFamily: 'Poppins, sans-serif',
        foreColor: '#5d6162',
        zoom: {
            enabled: false
        },
        sparkline: {
            enabled: true
        }
    },
    tooltip: {
        enabled: true,
        x: {
            show: false
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return ''
                }
            }
        },
        marker: {
            show: false
        }
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'straight'
    },
    title: {
        text: undefined,
    },
    grid: {
        borderColor: 'transparent',
    },
    xaxis: {
        crosshairs: {
            show: false,
        }
    },
    colors: ["rgb(231, 76, 60)"],
    stroke: {
        width: [1],
    },
    fill: {
        type: 'gradient',
        gradient: {
            opacityFrom: 0.5,
            opacityTo: 0.2,
            stops: [0, 60],
        }
    },
};
document.getElementById('pending-projects').innerHTML = '';
var chart4 = new ApexCharts(document.querySelector("#pending-projects"), options);
chart4.render();
/* pending projects */

/* projects revenue */
var chart = {
    series: [
        {
            name: "Income",
            data: [44, 42, 57, 86, 58, 55, 70, 43, 23, 54, 77, 34],
        },
        {
            name: "Expenses",
            data: [-34, -22, -37, -56, -21, -35, -60, -34, -56, -78, -89, -53],
        },
    ],
    chart: {
        toolbar: {
            show: false,
        },
        type: "bar",
        fontFamily: "'Poppins', sans-serif",
        height: 380,
        stacked: true,
    },
    colors: ["var(--primary-color)", "rgb(69, 214, 91)"],
    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: "22%",
        },
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
			show: true,
            width: ["6", "6"],
            curve: 'smooth',
    },
    legend: {
        show: true,
        position: "top",
        offsetX: 0,
        offsetY: 8,
        markers: {
            width: 5,
            height: 5,
            strokeWidth: 0,
            strokeColor: '#fff',
            fillColors: undefined,
            radius: 12,
            customHTML: undefined,
            onClick: undefined,
            offsetX: 0,
            offsetY: 0
        },
    },
    grid: {
        borderColor: "rgba(0,0,0,0.1)",
        strokeDashArray: 3,
        xaxis: {
            lines: {
                show: false,
            },
        },
    },
    xaxis: {
        axisBorder: {
            show: false,
        },
        categories: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
        ],

    },
    yaxis: {
        tickAmount: 4,
    },
};
var chart = new ApexCharts(document.querySelector("#projects-revenue"), chart);
chart.render();
/* projects revenue */

/* new projects */
var options = {
    chart: {
        height: 150,
        width: 150,
        type: "radialBar",
    },

    series: [48],
    colors: ["rgb(69, 214, 91)"],
    plotOptions: {
        radialBar: {
            hollow: {
                margin: 0,
                size: "70%",
                background: "#fff"
            },
            dataLabels: {
                name: {
                    offsetY: -10,
                    color: "#4b9bfa",
                    fontSize: "10px",
                    show: false
                },
                value: {
                    offsetY: 5,
                    color: "#4b9bfa",
                    fontSize: "12px",
                    show: true,
                    fontWeight: 800
                }
            }
        }
    },
    stroke: {
        lineCap: "round"
    },
    labels: ["Followers"]
};
var chart5 = new ApexCharts(document.querySelector("#projects-done"), options);
chart5.render();
/* new projects */

/* on going projects */
var total = {
    chart: {
        type: 'line',
        height: 45,
        sparkline: {
            enabled: true
        },
        dropShadow: {
            enabled: true,
            enabledOnSeries: undefined,
            top: 0,
            left: 0,
            blur: 1,
            color: '#fff',
            opacity: 0.05
        }
    },
    stroke: {
        show: true,
        curve: 'smooth',
        lineCap: 'butt',
        colors: undefined,
        width: 2,
        dashArray: 0,
    },
    fill: {
        gradient: {
            enabled: false
        }
    },
    series: [{
        name: 'Value',
        data: [54, 38, 56, 35, 65, 43, 53, 45, 62, 80, 35, 48]
    }],
    yaxis: {
        min: 0,
        show: false
    },
    xaxis: {
        axisBorder: {
            show: false
        },
    },
    yaxis: {
        axisBorder: {
            show: false
        },
    },
    colors: ["rgba(243, 156, 18, 0.2)"],
    tooltip: {
        enabled: false,
    }
}
var total = new ApexCharts(document.querySelector("#projects-ongoing"), total);
total.render();
/* on going projects */