(function () {
    'use strcit';

    var tabledata = [
        { id: 1, name: "Tiger Jackson", position: "System Designer", office: "Sed at", age: 41, salary: "$520,800" },
        { id: 2, name: "Vadett Summers", position: "UI Developer", office: "Japan", age: 28, salary: "$270,750" },
        { id: 3, name: "Lisbon Mox", position: "Junior Lecturer", office: "San Deigo", age: 45, salary: "$286,000" },
        { id: 4, name: "Medric Belly", position: "Javascript Developer", office: "Eden Gards", age: 25, salary: "$1,060" },
        { id: 5, name: "Ayri Satovu", position: "Senior Engineer", office: "Elitr stet", age: 25, salary: "$262,700" },
        { id: 6, name: "Billie William", position: "Software Engineer", office: "Paris", age: 52, salary: "$472,000" },
        { id: 7, name: "Merrod Sailor", position: "Sales Assosiative", office: "Sydney", age: 35, salary: "$237,500" },
        { id: 8, name: "Khona David", position: "DBMS Engineer", office: "France", age: 25, salary: "$427,900" },
        { id: 9, name: "Coolio Hornet", position: "Angular Developer", office: "Stet stet", age: 39, salary: "$205,500" },
        { id: 10, name: "Sonia Fraust", position: "Software Developer", office: "Magna lorem", age: 32, salary: "$303,600" },
        { id: 11, name: "Jennie Lora", position: "Bank Manager", office: "UK", age: 45, salary: "590,560" },
        { id: 12, name: "Flynn Hank", position: "Cloud Developer", office: "Mexico", age: 25, salary: "$442,000" },
        { id: 13, name: "Ricky Martin", position: "React Developer", office: "Sed sit", age: 48, salary: "$870,600" },
        { id: 14, name: "Halsey Kep", position: "Marketing Executive", office: "Takimata sit", age: 26, salary: "$513,500" },
        { id: 15, name: "Alaric Saltzman", position: "History Teacher", office: "Mystic Falls", age: 32, salary: "$385,750" },
        { id: 16, name: "Katherina Kat", position: "Event Planner", office: "Accusam est", age: 57, salary: "$98,500" },
        { id: 17, name: "Paulson Pal", position: "Data Analyst", office: "Manchester", age: 23, salary: "$325,000" },
        { id: 18, name: "Glory Sam", position: "System Administrator", office: "Sit Invidunt", age: 32, salary: "$337,500" },
        { id: 19, name: "Bradley Cooper", position: "Civil Engineer", office: "Aliquyam", age: 26, salary: "$332,000" },
        { id: 20, name: "Keera Dsoa", position: "Cloud Developer", office: "Sylvia", age: 53, salary: "$717,500" },
        { id: 21, name: "Alia Max", position: "Project Manager", office: "Old York", age: 26, salary: "$435,000" },
        { id: 22, name: "Yuri Gagarin", position: "Data Scientist", office: "Sun", age: 42, salary: "$989,900" },
        { id: 23, name: "cisaro Pals", position: "Sales Executive", office: "Kambodia", age: 25, salary: "$706,450" },
        { id: 24, name: "Amberson Pet", position: "Sales Manager", office: "Kidney", age: 25, salary: "$185,600" },
        { id: 25, name: "peter Parker", position: "Piolet", office: "Web Spal", age: 24, salary: "$900,000" },
    ];

    // fit to width
    var table = new Tabulator("#example-table", {
        width: 100,
        minWidth: 40,
        layout:"fitColumns",
        resizableColumnFit:true,
        pagination: "local",
        paginationSize: 5,
        paginationSizeSelector: [5, 10, 15, 20, 25],
        paginationCounter: "rows",
        data: tabledata, //load data into table
        columns: [
            { title: "Name", field: "name", sorter: "string", width: 200 },
            { title: "Position", field: "position", sorter: "string", },
            { title: "Office", field: "office", sorter: "string" },
            { title: "Age", field: "age", sorter: "number" },
            { title: "Salary", field: "salary", sorter: "string" },
        ],
    });
    // fit to width

})();