!function(){var e=document.getElementById("fix-head");if(e){e.style.setProperty("top",-1*e.clientHeight+"px");var t=null;window.addEventListener("scroll",function(){cancelAnimationFrame(t),t=requestAnimationFrame(function(){100<window.scrollY?(e.style.setProperty("top","0"),e.style.setProperty("visibility","visible")):(e.style.setProperty("top",-1*e.clientHeight+"px"),e.style.setProperty("visibility","hidden"))})})}var i=document.getElementById("fix-btn");if(i){var n=null;window.addEventListener("scroll",function(){cancelAnimationFrame(n),n=requestAnimationFrame(function(){window.scrollY>.08*document.body.clientHeight&&window.scrollY<.96*document.body.clientHeight-window.innerHeight?(i.style.setProperty("visibility","visible"),i.style.setProperty("opacity","1")):(i.style.setProperty("visibility","hidden"),i.style.setProperty("opacity","0"))})})}var o=document.getElementById("seat-bar");if(o){var r=null,l=function(){cancelAnimationFrame(r),r=requestAnimationFrame(function(){var e=o.getBoundingClientRect();.8*window.innerHeight>e.top&&(window.removeEventListener("scroll",l),o.classList.add("on"))})};window.addEventListener("scroll",l)}}();