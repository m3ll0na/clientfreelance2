$(function() {

   $('#pick-date').pickadate({
      min: new Date(),
      //disabled: []
   });
   $('#pick-date').trigger("click");
});