<style type="text/css">/* fonts */

</style>
<script src="https://raw.githubusercontent.com/lucaong/jQCloud/master/jqcloud/jqcloud-1.0.4.min.js"></script>
<script>
/*!
       * Create an array of word objects, each representing a word in the cloud
       */
      

$(function() {
    var word_array = [
      {text: "Lorem", weight: 15},
      {text: "Ipsum", weight: 9, link: "http://jquery.com/"},
      {text: "Dolor", weight: 6, html: {title: "I can haz any html attribute"}},
      {text: "Click", weight: 7, handlers : { 
          click: function() { 
              alert("it works!"); 
          }
        }
    } ,
      {text: "Amet2", weight: 20},
      {text: "Amet1", weight: 10},
      {text: "Amet3", weight: 13},
      {text: "Amet4", weight: 5},
  ];
  $("#example").jQCloud(word_array);
});
</script>