var ctx = document.getElementById("myBubbleChart");

var data = {
    datasets: [
        {
            label: 'First Dataset',
            data: [
                {
                    x: 20,
                    y: 30,
                    r: 15
                },
                {
                    x: 40,
                    y: 10,
                    r: 10
                },
                {
                    x: 10,
                    y: 20,
                    r: 5
                },
                {
                    x: 30,
                    y: 5,
                    r: 10
                }
            ],
            backgroundColor:"#FF6384",
            hoverBackgroundColor: "#FF6384",
        }]
};

var myBubbleChart = new Chart(ctx,{
    type: 'bubble',
    data: data
});
