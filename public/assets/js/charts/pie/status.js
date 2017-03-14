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
                "#4daf4a",
                "#377eb8",
                "#ff7f00"
            ],
            hoverBackgroundColor: [
              "#4daf4a",
              "#377eb8",
              "#ff7f00"
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
              data: [300, 25, 75],
              backgroundColor: [
                "#4daf4a",
                "#377eb8",
                "#ff7f00"
              ],
              hoverBackgroundColor: [
                "#4daf4a",
                "#377eb8",
                "#ff7f00"
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
