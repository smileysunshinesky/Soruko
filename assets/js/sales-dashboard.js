/* Sales Card Chart */
let options1 = {
  series: [{
    data: [0, 32, 18, 58]
  }],
  chart: {
    height: 115,
    width: 180,
    type: 'area',
    fontFamily: 'Poppins, Arial, sans-serif',
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
    }
  },
};
const chart = new ApexCharts(document.querySelector("#sales-card"), options1);
chart.render();
/* Sales Card Chart */

/* Revenue Card Chart */
var options = {
  series: [{
    data: [0, 32, 18, 58]
  }],
  chart: {
    height: 115,
    width: 180,
    type: 'area',
    fontFamily: 'Roboto, Arial, sans-serif',
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
      colorStops: [
        [
          {
            offset: 0,
            color: 'rgba(231, 76, 60, 0.2)',
            opacity: 1
          },
          {
            offset: 60,
            color: 'rgba(231, 76, 60, 0.2)',
            opacity: 0.1
          }
        ],
      ]
    }
  },
};
var chart1 = new ApexCharts(document.querySelector("#revenue-card"), options);
chart1.render();
/* Revenue Card Chart */

/* New Customers Card Chart */
var options = {
  series: [{
    data: [0, 32, 18, 58]
  }],
  chart: {
    height: 115,
    width: 180,
    type: 'area',
    fontFamily: 'Roboto, Arial, sans-serif',
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
  colors: ["rgb(69, 214, 91)"],
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
var chart2 = new ApexCharts(document.querySelector("#customers-card"), options);
chart2.render();
/* New Customers Card Chart */

/* Orders Card Chart */
var options = {
  series: [{
    data: [0, 32, 18, 58]
  }],
  chart: {
    height: 115,
    width: 180,
    type: 'area',
    fontFamily: 'Roboto, Arial, sans-serif',
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
var chart3 = new ApexCharts(document.querySelector("#orders-card"), options);
chart3.render();
/* Orders Card Chart */

/* Earning Reports Chart */
var options = {
  series: [
    {
      name: "Sales",
      data: [15, 30, 22, 49, 32, 45, 30, 45, 65, 45, 25, 45],
    },
    {
      name: "Refunds",
      data: [8, 40, 15, 32, 45, 30, 20, 25, 18, 23, 20, 40],
    }
  ],
  chart: {
    type: "area",
    height: 318,
    toolbar: {
      show: false
    }
  },
  colors: [
    "var(--primary-color)",
    "rgb(69, 214, 91)",
  ],
  fill: {
    type: 'gradient',
    gradient: {
      shadeIntensity: 1,
      opacityFrom: 0.4,
      opacityTo: 0.1,
      stops: [0, 90, 100],
      colorStops: [
        [
          {
            offset: 0,
            color: "var(--primary01)",
            opacity: 50
          },
          {
            offset: 75,
            color: "var(--primary01)",
            opacity: 0.1
          },
          {
            offset: 100,
            color: 'transparent',
            opacity: 0.1
          }
        ],
        [
          {
            offset: 0,
            color: 'rgba(69, 214, 91, 0.1)',
            opacity: 1
          },
          {
            offset: 75,
            color: 'rgba(69, 214, 91, 0.1)',
            opacity: 0.1
          },
          {
            offset: 100,
            color: 'transparent',
            opacity: 1
          }
        ],
      ]
    }
  },
  dataLabels: {
    enabled: false,
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
  stroke: {
    curve: 'smooth',
    width: [1, 1],
    lineCap: 'round',
  },
  grid: {
    borderColor: "#edeef1",
    strokeDashArray: 2,
  },
  yaxis: {
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
var chart4 = new ApexCharts(document.querySelector("#earning-reports"), options);
chart4.render();
/* Earning Reports Chart */

/* Visitors Chart */
var options = {
  series: [1654, 1234],
  labels: ["Male", "Female"],
  chart: {
    height: 255,
    type: 'donut'
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
      startAngle: 0,
      endAngle: 360,
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
  colors: ["var(--primary-color)", "rgba(69, 214, 91, 1)"],

};
var chart5 = new ApexCharts(document.querySelector("#visitors"), options);
chart5.render();
/* Visitors Chart */

/* customers-activity */
var options = {
  series: [
    {
      name: "New Customers",
      data: [12, 20, 16, 21, 17, 22],
    },
    {
      name: "Return Customers",
      data: [20, 12, 14, 12, 19, 15],
    },
  ],
  chart: {
    type: "line",
    height: 125,
    toolbar: {
      show: false
    }
  },
  colors: [
    "var(--primary-color)",
    "rgb(69, 214, 91)"
  ],
  dataLabels: {
    enabled: false,
  },
  legend: {
    show: false,
  },
  stroke: {
    curve: 'smooth',
    width: [1, 1]
  },
  yaxis: {
    axisBorder: {
      show: false,
    },
    axisTicks: {
      show: false,
    },
    labels: {
      show: false,
      formatter: function (y) {
        return y.toFixed(0) + "";
      },
    },
  },
  xaxis: {
    show: false,
    type: "month",
    categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
    labels: {
      show: false,
    },
  },
};
var chart6 = new ApexCharts(document.querySelector("#customers-activity"), options);
chart6.render();
/* customers-activity */