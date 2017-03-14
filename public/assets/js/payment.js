$(document).ready(function() {

  $('.tabs .method, .mod-tabs .mod-tab').on('click', function() {
      $('.tabs .method, .tab-content .tab,  .mod-tabs .mod-tab, .mod-tabs-content .mod-tab-content').removeClass('active');
      $(this).addClass('active');
      var id =   $(this).find('a').attr('href');
      $(id).addClass('active');
    });
});
