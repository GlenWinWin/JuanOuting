Chart.defaults.global.legend.display = false;
var ctx = document.getElementById("myPieChart");
var data = {
    labels: [
        "Red",
        "Blue",
        "Yellow"
    ],
    datasets: [
        {
            data: [300, 50, 100],
            backgroundColor: [
                "#FF6384",
                "#36A2EB",
                "#FFCE56"
            ],
            hoverBackgroundColor: [
                "#FF6384",
                "#36A2EB",
                "#FFCE56"
            ]
        }]
};
var myPieChart = new Chart(ctx,{
      type: 'pie',
      data: data,
      options: {
        animation:{
            animateScale:true
        }
      }
  });
  var ctx = document.getElementById("myPieChart1");
  var data = {
      labels: [
          "Red",
          "Blue",
          "Yellow"
      ],
      datasets: [
          {
              data: [300, 50, 100],
              backgroundColor: [
                  "#FF6384",
                  "#36A2EB",
                  "#FFCE56"
              ],
              hoverBackgroundColor: [
                  "#FF6384",
                  "#36A2EB",
                  "#FFCE56"
              ]
          }]
  };
  var myPieChart = new Chart(ctx,{
        type: 'pie',
        data: data,
        options: {
          animation:{
              animateScale:true
          }
        }
    });
