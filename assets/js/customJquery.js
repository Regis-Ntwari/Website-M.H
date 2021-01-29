var script = document.createElement('script')
script.src = './assets/js/jquery-3.5.1.min.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);

$(document).ready(function() {
    $("#event").click(()=>{
      $("#event").addClass("active")
      $("#logistics").removeClass("active")
      $("#household").removeClass("active")
      $("#sport").removeClass("active")
      $("#about").removeClass("active")
    })
    $("#logistics").click(()=>{
      $("#logistics").addClass("active")
      $("#event").removeClass("active")
      $("#household").removeClass("active")
      $("#sport").removeClass("active")
      $("#about").removeClass("active")
    })
    $("#household").click(()=>{
      $("#household").addClass("active")
      $("#logistics").removeClass("active")
      $("#event").removeClass("active")
      $("#sport").removeClass("active")
      $("#about").removeClass("active")
    })
    $("#sport").click(()=>{
      $("#sport").addClass("active")
      $("#logistics").removeClass("active")
      $("#household").removeClass("active")
      $("#event").removeClass("active")
      $("#about").removeClass("active")
    })
    $("#about").click(()=>{
      $("#about").addClass("active")
      $("#logistics").removeClass("active")
      $("#household").removeClass("active")
      $("#sport").removeClass("active")
      $("#event").removeClass("active")
    })
  })