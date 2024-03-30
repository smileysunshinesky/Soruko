(function () {
    "use strict"

    // for invoice stats
    var options = {
        series: [1754, 1234, 878, 270],
        labels: ["Total Invoices", "Paid Invoices", "Pending Invoices", "Overdue Invoices"],
        chart: {
            height: 300,
            type: 'donut',
        },
        dataLabels: {
            enabled: false,
        },
    
        legend: {
            show: true,
            position: "bottom",
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
                    size: '97%',
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
                            fontWeight: 600,
                            color: '#495057',
                        }
    
                    }
                }
            }
        },
        colors: ["rgba(185, 78, 237, 1)", "rgba(83, 209, 255, 1)", "rgba(69, 214, 91, 1)", "rgba(255, 203, 83, 1)"],
    };
    document.querySelector("#invoice-list-stats").innerHTML = " ";
    var chart = new ApexCharts(document.querySelector("#invoice-list-stats"), options);
    chart.render();

    //delete Btn
    let invoicebtn = document.querySelectorAll(".invoice-btn");
    invoicebtn.forEach((eleBtn) => {
        eleBtn.onclick = () => {
            let invoice = eleBtn.closest(".invoice-list")
            invoice.remove();
        }
    })
    
})();
