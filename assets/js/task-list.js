(function () {
    "use strict"

    // for tasks stats
    var options = {
        series: [1754, 1234, 878, 270],
        labels: ["New Tasks", "Completed Tasks", "Pending Tasks", "Inprogress Tasks"],
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
    document.querySelector("#task-list-stats").innerHTML = " ";
    var chart = new ApexCharts(document.querySelector("#task-list-stats"), options);
    chart.render();

    let checkAll = document.querySelector('.check-all');
    checkAll.addEventListener('click', checkAllFn)

    function checkAllFn() {
        if (checkAll.checked) {
            document.querySelectorAll('.task-checkbox input').forEach(function (e) {
                e.closest('.task-list').classList.add('selected');
                e.checked = true;
            });
        }
        else {
            document.querySelectorAll('.task-checkbox input').forEach(function (e) {
                e.closest('.task-list').classList.remove('selected');
                e.checked = false;
            });
        }
    }

    //delete Btn
    let taskbtn = document.querySelectorAll(".task-delete-btn");

    taskbtn.forEach((eleBtn) => {
        eleBtn.onclick = () => {
            let task = eleBtn.closest(".task-list")
            task.remove();
        }
    })

    /* multi select with remove button */
    const multipleCancelButton = new Choices(
        '#choices-multiple-remove-button1',
        {
            allowHTML: true,
            removeItemButton: true,
        }
    );

    /* AssignedDate Picker */
    flatpickr("#assignedDate", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
    });

    /* DueDate Picker */
    flatpickr("#dueDate", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
    });
    
})();
