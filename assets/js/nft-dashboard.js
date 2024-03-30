
// for NFTs Statistics
var options = {
	series: [{
		name: "Price",
		data: [20, 38, 38, 72, 55, 63, 43, 76, 55, 80, 40, 80]
	}, {
		name: "Volume",
		data: [85, 65, 75, 38, 85, 35, 62, 40, 40, 64, 50, 89]
	}],
	chart: {
		height: 330,
		type: 'bar',
		zoom: {
			enabled: false
		},
	},
    plotOptions: {
        bar: {
            columnWidth: "20%",
        }
    },
	dataLabels: {
		enabled: false
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
			show: true,
			width: 5,
			colors: ['transparent']
    },
    grid: {
        borderColor: '#f1f1f1',
        strokeDashArray: 3
    },
	colors: ["var(--primary-color)", "rgb(69, 214, 91)"],
	yaxis: {
		title: {
			text: 'Statistics',
			style: {
				color: '#adb5be',
				fontSize: '14px',
				fontFamily: 'poppins, sans-serif',
				fontWeight: 600,
				cssClass: 'apexcharts-yaxis-label',
			},
		},
	},
	xaxis: {
		type: 'month',
		categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
		axisBorder: {
			show: true,
			color: 'rgba(119, 119, 142, 0.05)',
			offsetX: 0,
			offsetY: 0,
		},
		axisTicks: {
			show: true,
			borderType: 'solid',
			color: 'rgba(119, 119, 142, 0.05)',
			width: 6,
			offsetX: 0,
			offsetY: 0
		},
		labels: {
			rotate: -90
		}
	}
};
var chart = new ApexCharts(document.querySelector("#nft-statistics"), options);
chart.render();

// for featured collections
var swiper = new Swiper(".pagination-dynamic", {
	pagination: {
		el: ".swiper-pagination",
		dynamicBullets: true,
		clickable: true,
	},
	loop: true,
	autoplay: {
		delay: 1500,
		disableOnInteraction: false
	}
});
// for featured collections

/* for trending-creator1 */
var spark1 = {
    chart: {
        type: 'line',
        height: 20,
        width: 80,
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
document.getElementById('trending-creator1').innerHTML = '';
var spark1 = new ApexCharts(document.querySelector("#trending-creator1"), spark1);
spark1.render();
/* for trending-creator1 */

/* for trending-creator2 */
var spark2 = {
    chart: {
        type: 'line',
        height: 20,
        width: 80,
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
    colors: ['rgb(69, 214, 91)'],

}
document.getElementById('trending-creator2').innerHTML = '';
var spark2 = new ApexCharts(document.querySelector("#trending-creator2"), spark2);
spark2.render();
/* for trending-creator2 */

/* for trending-creator3 */
var spark3 = {
    chart: {
        type: 'line',
        height: 20,
        width: 80,
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
        data: [15, 42, 16, 44, 24 ]
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
document.getElementById('trending-creator3').innerHTML = '';
var spark3 = new ApexCharts(document.querySelector("#trending-creator3"), spark3);
spark3.render();
/* for trending-creator3 */

/* for trending-creator4 */
var spark4 = {
    chart: {
        type: 'line',
        height: 20,
        width: 80,
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
    colors: ['rgb(52, 152, 219)'],

}
document.getElementById('trending-creator4').innerHTML = '';
var spark4 = new ApexCharts(document.querySelector("#trending-creator4"), spark4);
spark4.render();
/* for trending-creator4 */

/* for trending-creator5 */
var spark5 = {
    chart: {
        type: 'line',
        height: 20,
        width: 80,
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
        data: [15, 42, 16, 44, 24 ]
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
    colors: ['rgb(46, 204, 113)'],

}
document.getElementById('trending-creator5').innerHTML = '';
var spark5 = new ApexCharts(document.querySelector("#trending-creator5"), spark5);
spark5.render();
/* for trending-creator5 */

/* for trending-creator6 */
var spark6 = {
    chart: {
        type: 'line',
        height: 20,
        width: 80,
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
        data: [15, 42, 16, 44, 24 ]
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
    colors: ['rgb(231, 76, 60)'],

}
document.getElementById('trending-creator6').innerHTML = '';
var spark5 = new ApexCharts(document.querySelector("#trending-creator6"), spark6);
spark5.render();
/* for trending-creator6 */