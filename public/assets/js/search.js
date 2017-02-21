    $("#FromDate").val($.datepicker.formatDate('mm/dd/yy', new Date(new Date())));
    $("#ToDate").val($.datepicker.formatDate('mm/dd/yy', new Date(new Date().getTime() + 1*24*60*60*1000)));

  $(function DatePicker(){
    $("#FromDate").datepicker({
      onSelect: function(dateText, inst) {
        $("#ToDate").val($.datepicker.formatDate('mm/dd/yy', new Date(new Date(dateText).getTime() + 1*24*60*60*1000)));
          $("#FromDate").val($.datepicker.formatDate('mm/dd/yy', new Date(new Date(dateText).getTime())));
        $.datepicker.setDefaults({"defaultDate":dateText});
      }
    });

    $("#ToDate").datepicker({
      onSelect: function (dateText, inst) {
        $("#ToDate").val($.datepicker.formatDate('mm/dd/yy', new Date(new Date(dateText).getTime())));
      }
    });
  });
    
