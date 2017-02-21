
//Glenwin stars Reviews
function updateTable(num){
  var yey1 = "";
  $("input:checkbox[name=kitchen]").each(function(){
    if($(this).is(':checked'))
      yey1 += $(this).val()+",";
  });
  document.getElementById("filterByStars").value = num;
  var priceRange = document.getElementById("priceRange").value;
  $.getJSON('all.php',
    'stars='+num+'&ukie='+yey1+'&priceRange='+priceRange,
    function(result){
      $('#dynamicTableglen').empty();
      $.each(result.result, function(){
        $('#dynamicTableglen').append('<tr><td>'+this['name']+'&emsp;'+this['stars']+'&emsp;'+this['review']+'</td></tr>');
      });
    }
  );
  var res = priceRange.split(",");
  $.ajax({
    type: 'POST',
    url: 'all.php', // create this file with php+mysql(any db)
    data: {
      'stars':num,
      'ukie':yey1,
      'priceRange':priceRange // send this parameter
    },
    success: function (data){
      filterSystem(data,res[0], res[1]);
    }
  });
}
function kitchen(){
  updateTable(document.getElementById("filterByStars").value == '' ? 0 : document.getElementById("filterByStars").value);
}

  $(document).ready(function () {
    $('#slider-container').slider({
      range: true,
      min: 1,
      max: 50000,
      values: [1, 50000],
      create: function() {
        $("#amount").val("Php 1 - Php 50000");
      },
      slide: function (event, ui) {

        var minValue = ui.values[0];
        var maxValue = ui.values[1];

        $("#amount").val("Php" + minValue + " - Php" + maxValue);
        document.getElementById("priceRange").value = minValue+","+maxValue;
        updateTable(document.getElementById("filterByStars").value == '' ? 0 : document.getElementById("filterByStars").value);
      }
    })
  });
  function filterSystem(data,minPrice, maxPrice) {
    $("#filterResorts").html(data).filter(function () {
      var price = parseInt($(this).data("price"), 10);
      return price >= minPrice && price <= maxPrice;
    }).show();
  }
