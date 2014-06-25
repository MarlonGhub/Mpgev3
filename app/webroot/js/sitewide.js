$(document).ready(function() {
  // $('.datetimepicker').datetimepicker({
  //     step: 15,
  //     minTime: '07:00 AM',
  //     minDate: 0,
  //     maxTime: '07:15 PM',
  //     format: 'Y-m-d h:i:s a',
  //     mask: true,
  //     formatTime: 'h:i A'
  // });
  $('.datepicker').datetimepicker({
   lang:'en',
   i18n:{
    en:{
     months:[
      'January','February','March','April',
      'May','June','July','August',
      'September','October','November','December',
     ],
     dayOfWeek:[
      "Su", "Mo", "Tu", "We", 
      "Th", "Fr", "Sa",
     ]
    }
   },
   timepicker:false,
   format:'Y-m-d',
   allowBlank: true,
   scrollInput: false,
   minDate: 0,
   onChangeDateTime:function(dp,$input){
    if ($(this).attr('id') == "duedate") {
      alert($input.val());
    }
   }

  });
  $(".phone-number").mask("(999) 999-9999");

  $(".phone-number").on("blur", function() {
      var last = $(this).val().substr( $(this).val().indexOf("-") + 1 );

      if( last.length == 3 ) {
          var move = $(this).val().substr( $(this).val().indexOf("-") - 1, 1 );
          var lastfour = move + last;
          var first = $(this).val().substr( 0, 9 );

          $(this).val( first + '-' + lastfour );
      }
  });
//  This is the Collapse for the actions on the job index page
  $('#actions').click(function(){
      $("#actionpanel").slideToggle("fast");
    });
});
