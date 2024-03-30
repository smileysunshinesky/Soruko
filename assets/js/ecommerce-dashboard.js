/*  top selling chart */
var options = {
    series: [
        {
            name: "Electronics",
            data: [44, 42, 57, 86, 58, 55, 70, 43, 23, 54, 77, 34],
        },
        {
            name: "Fashion",
            data: [74, 72, 87, 116, 88, 85, 100, 73, 53, 84, 107, 64],
        },
        {
            name: "Furniture",
            data: [84, 82, 97, 126, 98, 95, 110, 83, 63, 94, 117, 74],
        },
        {
            name: "Beauty",
            data: [34, 22, 37, 56, 21, 35, 60, 34, 56, 78, 89, 53],
        },
    ],
    chart: {
        stacked: true,
        type: "bar",
        height: 332,
    },
    grid: {
        borderColor: "#f5f4f4",
        strokeDashArray: 5,
        yaxis: {
            lines: {
                show: true, // Ensure y-axis grids are shown
            },
        },
    },
    colors: [
        "var(--primary-color)",
        "rgb(69, 214, 91)",
        "rgb(243, 156, 18)",
        "rgb(52, 152, 219)",
    ],
    plotOptions: {
        bar: {
            columnWidth: "2%",
        },
    },
    dataLabels: {
        enabled: false,
    },
    legend: {
        show: true,
        position: "bottom",
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
    yaxis: {
        title: {
            text: "Total Sales",
            style: {
                color: "#adb5be",
                fontSize: "14px",
                fontFamily: "Poppins, sans-serif",
                fontWeight: 600,
                cssClass: "apexcharts-yaxis-label",
            },
        },
        axisBorder: {
            show: true,
            color: "rgba(119, 119, 142, 0.05)",
            offsetX: 0,
            offsetY: 0,
        },
        axisTicks: {
            show: true,
            borderType: "solid",
            color: "rgba(119, 119, 142, 0.05)",
            width: 6,
            offsetX: 0,
            offsetY: 0,
        },
        labels: {
            formatter: function (y) {
                return y.toFixed(0) + "";
            },
        },
    },
    xaxis: {
        type: "month",
        categories: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "sep",
            "oct",
            "nov",
            "dec",
        ],
        axisBorder: {
            show: false,
            color: "rgba(119, 119, 142, 0.05)",
            offsetX: 0,
            offsetY: 0,
        },
        axisTicks: {
            show: false,
            borderType: "solid",
            color: "rgba(119, 119, 142, 0.05)",
            width: 6,
            offsetX: 0,
            offsetY: 0,
        },
        labels: {
            rotate: -90,
        },
    },
};
var chart = new ApexCharts(document.querySelector("#earnings"), options);
chart.render();
/*  top selling chart */

/* Total Sales */
var spark1 = {
    chart: {
        type: 'line',
        height: 40,
        width: 120,
        sparkline: {
            enabled: true
        },
        dropShadow: {
            enabled: true,
            enabledOnSeries: undefined,
            top: 0,
            left: 0,
            blur: 3,
            color: '#000',
            opacity: 0.1
        }
    },
    grid: {
        show: false,
        xaxis: {
            lines: {
                show: false
            }
        },
        yaxis: {
            lines: {
                show: false
            }
        },
    },
    stroke: {
        show: true,
        curve: 'smooth',
        lineCap: 'butt',
        colors: undefined,
        width: 1,
        dashArray: 0,
    },
    fill: {
        gradient: {
            enabled: false
        }
    },
    series: [{
        name: 'Value',
        data: [54, 38, 56, 24, 65]
    }],
    yaxis: {
        min: 0,
        show: false
    },
    xaxis: {
        show: false,
        axisTicks: {
            show: false
        },
        axisBorder: {
            show: false
        }
    },
    yaxis: {
        axisBorder: {
            show: false
        },
    },
    colors: ['var(--primary-color)'],

}
var spark1 = new ApexCharts(document.querySelector("#total-sales"), spark1);
spark1.render();
/* Total Sales */

/* Total Expenses */
var spark2 = {
    chart: {
        type: 'line',
        height: 40,
        width: 120,
        sparkline: {
            enabled: true
        },
        dropShadow: {
            enabled: true,
            enabledOnSeries: undefined,
            top: 0,
            left: 0,
            blur: 3,
            color: '#000',
            opacity: 0.1
        }
    },
    grid: {
        show: false,
        xaxis: {
            lines: {
                show: false
            }
        },
        yaxis: {
            lines: {
                show: false
            }
        },
    },
    stroke: {
        show: true,
        curve: 'smooth',
        lineCap: 'butt',
        colors: undefined,
        width: 1,
        dashArray: 0,
    },
    fill: {
        gradient: {
            enabled: false
        }
    },
    series: [{
        name: 'Value',
        data: [24, 54, 15, 42, 16]
    }],
    yaxis: {
        min: 0,
        show: false
    },
    xaxis: {
        show: false,
        axisTicks: {
            show: false
        },
        axisBorder: {
            show: false
        }
    },
    yaxis: {
        axisBorder: {
            show: false
        },
    },
    colors: ['rgb(52, 152, 219)'],

}
document.getElementById('total-expenses').innerHTML = '';
var spark2 = new ApexCharts(document.querySelector("#total-expenses"), spark2);
spark2.render();
/* Total Expenses */

/* Total Visitors */
var spark3 = {
    chart: {
        type: 'line',
        height: 40,
        width: 120,
        sparkline: {
            enabled: true
        },
        dropShadow: {
            enabled: true,
            enabledOnSeries: undefined,
            top: 0,
            left: 0,
            blur: 3,
            color: '#000',
            opacity: 0.1
        }
    },
    grid: {
        show: false,
        xaxis: {
            lines: {
                show: false
            }
        },
        yaxis: {
            lines: {
                show: false
            }
        },
    },
    stroke: {
        show: true,
        curve: 'smooth',
        lineCap: 'butt',
        colors: undefined,
        width: 1,
        dashArray: 0,
    },
    fill: {
        gradient: {
            enabled: false
        }
    },
    series: [{
        name: 'Value',
        data: [15, 42, 16, 44, 24]
    }],
    yaxis: {
        min: 0,
        show: false
    },
    xaxis: {
        show: false,
        axisTicks: {
            show: false
        },
        axisBorder: {
            show: false
        }
    },
    yaxis: {
        axisBorder: {
            show: false
        },
    },
    colors: ['rgb(69, 214, 91)'],

}
document.getElementById('total-visitors').innerHTML = '';
var spark3 = new ApexCharts(document.querySelector("#total-visitors"), spark3);
spark3.render();
/* Total Visitors */

/* Total Orders */
var spark4 = {
    chart: {
        type: 'line',
        height: 40,
        width: 120,
        sparkline: {
            enabled: true
        },
        dropShadow: {
            enabled: true,
            enabledOnSeries: undefined,
            top: 0,
            left: 0,
            blur: 3,
            color: '#000',
            opacity: 0.1
        }
    },
    grid: {
        show: false,
        xaxis: {
            lines: {
                show: false
            }
        },
        yaxis: {
            lines: {
                show: false
            }
        },
    },
    stroke: {
        show: true,
        curve: 'smooth',
        lineCap: 'butt',
        colors: undefined,
        width: 1,
        dashArray: 0,
    },
    fill: {
        gradient: {
            enabled: false
        }
    },
    series: [{
        name: 'Value',
        data: [54, 38, 56, 24, 65]
    }],
    yaxis: {
        min: 0,
        show: false
    },
    xaxis: {
        show: false,
        axisTicks: {
            show: false
        },
        axisBorder: {
            show: false
        }
    },
    yaxis: {
        axisBorder: {
            show: false
        },
    },
    colors: ['rgb(243, 156, 18)'],

}
document.getElementById('total-orders').innerHTML = '';
var spark4 = new ApexCharts(document.querySelector("#total-orders"), spark4);
spark4.render();
/* Total Orders */

/* Sales Overview */
var options = {
    chart: {
        height: 250,
        type: 'radialBar',
        responsive: 'true',
        offsetX: 0,
        offsetY: 10,
    },
    plotOptions: {
        radialBar: {
            startAngle: -135,
            endAngle: 135,
            size: 120,
            imageWidth: 50,
            imageHeight: 50,
            track: {
                strokeWidth: "0",
            },
            dropShadow: {
                enabled: false,
                top: 0,
                left: 0,
                bottom: 0,
                blur: 3,
                opacity: 0.5
            },
            dataLabels: {
                name: {
                    fontSize: '16px',
                    color: undefined,
                    offsetY: 30,
                },
                hollow: {
                    size: "60%"
                },
                value: {
                    offsetY: -10,
                    fontSize: '22px',
                    color: undefined,
                    formatter: function (val) {
                        return val + "%";
                    }
                }
            }
        }
    },
    colors: ['var(--primary-color)'],
    fill: {
        type: "solid",
        gradient: {
            shade: "dark",
            type: "horizontal",
            shadeIntensity: .5,
            gradientToColors: ["#b94eed"],
            inverseColors: false,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 100]
        }
    },
    stroke: {
        dashArray: 3
    },
    series: [92],
    labels: ["Profit"]
};
var chart1 = new ApexCharts(document.querySelector("#product-categories"), options);
chart1.render();
/* Sales Overview */
