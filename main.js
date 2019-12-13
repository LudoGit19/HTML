$(document).ready(function(){
   $(".toggle-false").click(function(){
       $("#myCollapsible").collapse({
           toggle: false
       });
   });
   $(".show-btn").click(function(){
       $("#myCollapsible").collapse('show');
   });
   $(".hide-btn").click(function(){
       $("#myCollapsible").collapse('hide');
   });
   $(".toggle-btn").click(function(){
       $("#myCollapsible").collapse('toggle');
   });
});