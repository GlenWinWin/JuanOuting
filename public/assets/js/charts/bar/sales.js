var ctx = document.getElementById("myBarChart");
var data = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
        {
            label: "My First dataset",
            backgroundColor: [
                '#e41a1c',
                '#377eb8',
                '#4daf4a',
                '#984ea3',
                '#ff7f00',
                '#a65628'
            ],
            borderColor: [
              '#e41a1c',
              '#377eb8',
              '#4daf4a',
              '#984ea3',
              '#ff7f00',
              '#a65628'
            ],
            borderWidth: 1,
            data: [65, 59, 80, 81, 56, 55, 40],
        }
    ]
};
var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: data
});
var ctx = document.getElementById("myBarChart1");
var data = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
        {
            label: "My First dataset",
            backgroundColor: [
              '#e41a1c',
              '#377eb8',
              '#4daf4a',
              '#984ea3',
              '#ff7f00',
              '#a65628'
            ],
            borderColor: [
              '#e41a1c',
              '#377eb8',
              '#4daf4a',
              '#984ea3',
              '#ff7f00',
              '#a65628'
            ],
            borderWidth: 1,
            data: [65, 59, 80, 81, 56, 55, 40],
        }
    ]
};
var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: data
});
