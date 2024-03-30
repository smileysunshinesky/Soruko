/* Revenue Analytics Chart */
var options = {
    series: [
        {
            type: 'line',
            name: 'Profit',
            data: [
                {
                    x: 'Jan',
                    y: 100
                },
                {
                    x: 'Feb',
                    y: 210
                },
                {
                    x: 'Mar',
                    y: 180
                },
                {
                    x: 'Apr',
                    y: 454
                },
                {
                    x: 'May',
                    y: 230
                },
                {
                    x: 'Jun',
                    y: 320
                },
                {
                    x: 'Jul',
                    y: 656
                },
                {
                    x: 'Aug',
                    y: 830
                },
                {
                    x: 'Sep',
                    y: 350
                },
                {
                    x: 'Oct',
                    y: 350
                },
                {
                    x: 'Nov',
                    y: 210
                },
                {
                    x: 'Dec',
                    y: 410
                }
            ]
        },
        {
            type: 'line',
            name: 'Revenue',
            chart: {
                dropShadow: {
                    enabled: true,
                    enabledOnSeries: undefined,
                    top: 5,
                    left: 0,
                    blur: 3,
                    color: '#000',
                    opacity: 0.1
                }
            },
            data: [
                {
                    x: 'Jan',
                    y: 180
                },
                {
                    x: 'Feb',
                    y: 620
                },
                {
                    x: 'Mar',
                    y: 476
                },
                {
                    x: 'Apr',
                    y: 220
                },
                {
                    x: 'May',
                    y: 520
                },
                {
                    x: 'Jun',
                    y: 780
                },
                {
                    x: 'Jul',
                    y: 435
                },
                {
                    x: 'Aug',
                    y: 515
                },
                {
                    x: 'Sep',
                    y: 738
                },
                {
                    x: 'Oct',
                    y: 454
                },
                {
                    x: 'Nov',
                    y: 525
                },
                {
                    x: 'Dec',
                    y: 230
                }
            ]
        },
        {
            type: 'line',
            name: 'Sales',
            chart: {
                dropShadow: {
                    enabled: true,
                    enabledOnSeries: undefined,
                    top: 5,
                    left: 0,
                    blur: 3,
                    color: '#000',
                    opacity: 0.1
                }
            },
            data: [
                {
                    x: 'Jan',
                    y: 200
                },
                {
                    x: 'Feb',
                    y: 530
                },
                {
                    x: 'Mar',
                    y: 110
                },
                {
                    x: 'Apr',
                    y: 130
                },
                {
                    x: 'May',
                    y: 480
                },
                {
                    x: 'Jun',
                    y: 520
                },
                {
                    x: 'Jul',
                    y: 780
                },
                {
                    x: 'Aug',
                    y: 435
                },
                {
                    x: 'Sep',
                    y: 475
                },
                {
                    x: 'Oct',
                    y: 738
                },
                {
                    x: 'Nov',
                    y: 454
                },
                {
                    x: 'Dec',
                    y: 480
                }
            ]
        }
    ],
    chart: {
        height: 350,
        animations: {
            speed: 500
        }
    },
    colors: ["var(--primary-color)", "rgb(69, 214, 91)", "rgb(243, 156, 18)"],
    dataLabels: {
        enabled: false
    },
    grid: {
        borderColor: '#f1f1f1',
        strokeDashArray: 3
    },
    stroke: {
        curve: 'smooth',
        width: [1, 1, 1],
    },
    xaxis: {
        axisTicks: {
            show: false,
        },
    },
    yaxis: {
        labels: {
            formatter: function (value) {
                return "$" + value;
            }
        },
    },
    tooltip: {
        y: [{
            formatter: function (e) {
                return void 0 !== e ? "$" + e.toFixed(0) : e
            }
        }, {
            formatter: function (e) {
                return void 0 !== e ? "$" + e.toFixed(0) : e
            }
        }, {
            formatter: function (e) {
                return void 0 !== e ? e.toFixed(0) : e
            }
        }]
    },
    legend: {
        show: true,
        customLegendItems: ['Profit', 'Revenue', 'Sales'],
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
    title: {
        align: 'left',
        style: {
            fontSize: '.8125rem',
            fontWeight: 'semibold',
            color: '#8c9097'
        },
    },
    markers: {
        hover: {
            sizeOffset: 5
        }
    }
};
var chart = new ApexCharts(document.querySelector("#crm-revenue-analytics"), options);
chart.render();
/* Revenue Analytics Chart */

/* Leads By Source Chart */
var options = {
    series: [44, 55, 13, 43],
    chart: {
        width: 220,
        height: 220,
        type: "pie",
    },
    colors: ["var(--primary08)", "rgba(69, 214, 91, 0.8)", "rgba(243, 156, 18, 0.8)", "rgba(231, 76, 60, 0.8)"],
    labels: ["Mobile", "Desktop", "Laptop", "Tablet"],
    legend: {
        show: false,
    },
    stroke: {
        width: 0
    },
    dataLabels: {
        enabled: true,
        dropShadow: {
            enabled: false,
        },
    },
};
var chart1 = new ApexCharts(document.querySelector("#leads-source"), options);
chart1.render();
/* Leads By Source Chart */

/* Total Deals Chart */
var options = {
    series: [{
        name: 'Deals',
        data: [21, 22, 10, 28, 16, 21, 13, 19]
    }],
    chart: {
        height: 412,
        type: 'bar',
        events: {
            click: function (chart, w, e) {
            }
        },
        toolbar: {
            show: false,
        }
    },
    colors: ['var(--primary-color)', 'rgb(69, 214, 91)', 'rgb(243, 156, 18)', 'rgb(52, 152, 219)', 'rgb(46, 204, 113)', 'rgb(231, 76, 60)', 'rgb(0, 177, 163)', 'rgb(255, 116, 23)'],
    plotOptions: {
        bar: {
            barHeight: '2%',
            distributed: true,
            horizontal: true,
        }
    },
    dataLabels: {
        enabled: false
    },
    legend: {
        show: false
    },
    grid: {
        borderColor: '#f1f1f1',
        strokeDashArray: 3
    },
    xaxis: {
        categories: [
            ['New Deal'],
            ['Qualified Deal'],
            ['Renewal Deal'],
            ['Referral Deal'],
            ['Won Deal'],
            ['Lost Deal'],
            ['Negotiation Deal'],
            ['Proposal/Quote'],
        ],
        labels: {
            show: false,
            style: {
                fontSize: '12px'
            },
        }
    },
    yaxis: {
        offsetX: 30,
        offsetY: 30,
        labels: {
            show: true,
            style: {
                colors: "#8c9097",
                fontSize: '11px',
                fontWeight: 600,
                cssClass: 'apexcharts-yaxis-label',
            },
            offsetY: 8,
        }
    },
    tooltip: {
        enabled: true,
        shared: false,
        intersect: true,
        x: {
            show: false
        }
    },
};
var chart2 = new ApexCharts(document.querySelector("#total-deals"), options);
chart2.render();
/* Team Deals Chart */

/* Customers By Country Map */
function mapResize() {
    var markers = [
        {
            name: "Usa",
            coords: [40.3, -101.38],
        },
        {
            name: "India",
            coords: [20.5937, 78.9629],
        },
        {
            name: "Canada",
            coords: [56.1304, -106.3468],
        },
        {
            name: "Singapore",
            coords: [1.3, 103.8],
        },
    ];
    var map = new jsVectorMap({
        map: "world_merc",
        selector: "#customers-countries",
        markersSelectable: true,
        zoomOnScroll: false,
        zoomButtons: false,

        onMarkerSelected(index, isSelected, selectedMarkers) {
            console.log(index, isSelected, selectedMarkers);
        },

        // -------- Labels --------
        labels: {
            markers: {
                render: function (marker) {
                    return marker.name;
                },
            },
        },

        // -------- Marker and label style --------
        markers: markers,
        markerStyle: {
            hover: {
                stroke: "#DDD",
                strokeWidth: 3,
                fill: "#FFF",
            },
            selected: {
                fill: "#ff525d",
            },
        },
        markerLabelStyle: {
            initial: {
                fontFamily: "Poppins",
                fontSize: 13,
                fontWeight: 500,
                fill: "#35373e",
            },
        },
    });
}
function handleResize() {
    setTimeout(() => {
        mapResize();
    }, 0);
  }
  window.addEventListener('resize', handleResize);
mapResize();

/* Customers By Country Map */


