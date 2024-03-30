
/* Sessions By Device Chart */
var options = {
    series: [1754, 1234, 878, 270],
    labels: ["Mobile", "Tablet", "Desktop", "Others"],
    chart: {
        height: 220,
        type: 'donut',
    },
    dataLabels: {
        enabled: false,
    },
    legend: {
        show: false,
    },
    stroke: {
        show: true,
        curve: 'smooth',
        lineCap: 'round',
        colors: "#fff",
        width: 0,
        dashArray: 0,
    },
    plotOptions: {
      pie: {
        expandOnClick: false,
        donut: {
          size: '99%',
          background: 'transparent',
          labels: {
            show: true,
            name: {
                show: true,
                fontSize: '20px',
                color: '#495057',
                offsetY: -4
            },
            value: {
                show: true,
                fontSize: '18px',
                color: undefined,
                offsetY: 8,
                formatter: function (val) {
                    return val + "%"
                }
            },
            total: {
                show: true,
                showAlways: true,
                label: 'Total',
                fontSize: '22px',
                fontWeight: 300,
                color: '#495057',
            }
          }
        }
      }
    },
    colors: ["var(--primary-color)", "rgb(69, 214, 91)", "rgb(46, 204, 113)", "rgb(243, 156, 18)"],
};
var chart = new ApexCharts(document.querySelector("#sessions"), options);
chart.render();
/* Sessions By Device Chart */

/* Audience report Chart */
var options = {
    series: [
        {
            name: 'Views',
            type: 'column',
            data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 45, 35]
        },
        {
            name: 'Followers',
            type: 'column',
            data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43, 27]
        },
    ],
    chart: {
        toolbar: {
            show: false
        },
        height: 250,
    },
    grid: {
        borderColor: '#f1f1f1',
        strokeDashArray: 3
    },
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    dataLabels: {
        enabled: false
    },
    stroke: {
			show: true,
			width: 5,
			colors: ['transparent']
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
    xaxis: {
        axisBorder: {
            color: '#e9e9e9',
        },
    },
    plotOptions: {
        bar: {
            columnWidth: "16%",
        }
    },
    colors: ["var(--primary-color)", 'rgb(69, 214, 91)'],
};
var chart2 = new ApexCharts(document.querySelector("#audienceReport"), options);
chart2.render();
/* Audience report Chart */

/* Session Duration By New Users Chart */
var options = {
  series: [
  {
    type: 'rangeArea',
    name: 'Session Duration',
    data: [
      {
        x: 'Jan',
        y: [1100, 1900]
      },
      {
        x: 'Feb',
        y: [1200, 1800]
      },
      {
        x: 'Mar',
        y: [900, 2900]
      },
      {
        x: 'Apr',
        y: [1400, 2700]
      },
      {
        x: 'May',
        y: [2600, 3900]
      },
      {
        x: 'Jun',
        y: [500, 1700]
      },
      {
        x: 'Jul',
        y: [1900, 2300]
      },
      {
        x: 'Aug',
        y: [1000, 1500]
      },
      {
          x: 'Sep',
          y: [1100, 1900]
        },
        {
          x: 'Oct',
          y: [1200, 1800]
        },
        {
          x: 'Nov',
          y: [900, 2900]
        },
        {
          x: 'Dec',
          y: [1400, 2700]
        },
    ]
  },
  {
    type: 'rangeArea',
    name: 'Session Duration',
    data: [
      {
        x: 'Jan',
        y: [3100, 3400]
      },
      {
        x: 'Feb',
        y: [4200, 5200]
      },
      {
        x: 'Mar',
        y: [3900, 4900]
      },
      {
        x: 'Apr',
        y: [3400, 3900]
      },
      {
        x: 'May',
        y: [5100, 5900]
      },
      {
        x: 'Jun',
        y: [5400, 6700]
      },
      {
        x: 'Jul',
        y: [4300, 4600]
      },
      {
        x: 'Aug',
        y: [2100, 2900]
      },
      {
          x: 'Sep',
          y: [3100, 3400]
      },
      {
          x: 'Oct',
          y: [4200, 5200]
      },
      {
          x: 'Nov',
          y: [3900, 4900]
      },
      {
          x: 'Dec',
          y: [3400, 3900]
      },
    ]
  },
  {
    type: 'line',
    name: 'Total New Users',
    data: [
      {
        x: 'Jan',
        y: 1500
      },
      {
        x: 'Feb',
        y: 1700
      },
      {
        x: 'Mar',
        y: 1900
      },
      {
        x: 'Apr',
        y: 2200
      },
      {
        x: 'May',
        y: 3000
      },
      {
        x: 'Jun',
        y: 1000
      },
      {
        x: 'Jul',
        y: 2100
      },
      {
        x: 'Aug',
        y: 1200
      },
      {
        x: 'Sep',
        y: 1600
      },
      {
        x: 'Oct',
        y: 1500
      },
      {
        x: 'Nov',
        y: 2000
      },
      {
        x: 'Dec',
        y: 2000
      }
    ]
  },
  {
    type: 'line',
    name: 'Total New Users',
    data: [
      {
        x: 'Jan',
        y: 3300
      },
      {
        x: 'Feb',
        y: 4900
      },
      {
        x: 'Mar',
        y: 4300
      },
      {
        x: 'Apr',
        y: 3700
      },
      {
        x: 'May',
        y: 5500
      },
      {
        x: 'Jun',
        y: 5900
      },
      {
        x: 'Jul',
        y: 4500
      },
      {
        x: 'Aug',
        y: 2400
      },
      {
        x: 'Sep',
        y: 3300
      },
      {
        x: 'Oct',
        y: 4700
      },
      {
        x: 'Nov',
        y: 4300
      },
      {
        x: 'Dec',
        y: 3600
      }
    ]
  }
],
  chart: {
  height: 405,
  type: 'rangeArea',
  animations: {
    speed: 500
  }
},
colors: ["var(--primary02)", "rgba(69, 214, 91, 0.2)","var(--primary-color)", "rgb(69, 214, 91)"],
dataLabels: {
  enabled: false
},
fill: {
  opacity: [0.24, 0.24, 1, 1]
},
stroke: {
  curve: 'smooth',
  width: [0, 0, 1, 1]
},
legend: {
    show: true,
    customLegendItems: ['Previous Year', 'This Year'],
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
grid: {
    borderColor: '#f1f1f1',
    strokeDashArray: 3
},
markers: {
  hover: {
    sizeOffset: 5
  }
}
};
var chart4 = new ApexCharts(document.querySelector("#session-users"), options);
chart4.render();
/* Session Duration By New Users Chart */

/* Country Sessions vs Bounce Rate Chart */
var options = {
    series: [
        {
            name: 'Session',
            data: [24, 23, 20, 25, 27, 26, 24, 23, 23, 25, 23, 23],
            type: 'bar',
        },
        {
            name: 'Bounce Rate',
            data: [20, 23, 26, 22, 20, 26, 28, 26, 22, 27, 25, 26],
            type: 'area',
        },
    ],
    chart: {
        height: 315,
        zoom: {
            enabled: false
        },
    },
    dataLabels: {
        enabled: false,
        show: true,
    },
    grid: {
        borderColor: '#f1f1f1',
        strokeDashArray: 3
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
    plotOptions: {
        bar: {
            columnWidth: "5%",
            dataLabels: {
                position: 'top', // top, center, bottom
            },
        }
    },
    colors: ["var(--primary-color)", "var(--primary005)"],
    stroke: {
        curve: ['smooth', 'stepline'],
        width: [0, 0],
        columnWidth: '10%'
    },
    xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        axisBorder: {
            color: '#e9e9e9',
        },
    }
};
var chart3 = new ApexCharts(document.querySelector("#country-sessions"), options);
chart3.render();
/* Country Sessions vs Bounce Rate Chart */