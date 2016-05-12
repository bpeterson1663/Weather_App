$(document).ready(function(){
  $('#weather').on('submit', getWeather);
});

function getWeather(event){
  console.log("made it here");
  event.preventDefault();
  var city = $('#city').val();
  if(city != ""){
    $.get('scripts/scraper.php?city='+city+'', function(data){
      $('.alert').html(data).removeClass('alert-danger').addClass('alert-success').fadeIn();
      if(data == ""){
        $('.alert').html("Sorry. The Weather is not available").addClass('alert-danger').fadeIn();
      }
    });
  }else{
    $('.alert').html("Please Enter A City").addClass('alert-danger').fadeIn();
  }
}
