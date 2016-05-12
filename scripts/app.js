$(document).ready(function(){
  $('#weather').on('submit', getWeather);
});

function getWeather(event){
  console.log("made it here");
  event.preventDefault();
  var city = $('#city').val();
  if(city != ""){
    $.get('scripts/scraper.php?city='+city+'', function(data){
      alert(data);
    });
  }else{
    alert("Please Enter A City");
  }
}
