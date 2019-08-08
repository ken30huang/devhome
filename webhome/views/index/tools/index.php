<style type="text/css">/* fonts */

div.jqcloud {
  font-family: "Helvetica", "Arial", sans-serif;
  font-size: 10px;
  line-height: normal;
}

div.jqcloud a {
  font-size: inherit;
  text-decoration: none;
}

div.jqcloud span.w10 { font-size: 550%; }
div.jqcloud span.w9 { font-size: 500%; }
div.jqcloud span.w8 { font-size: 450%; }
div.jqcloud span.w7 { font-size: 400%; }
div.jqcloud span.w6 { font-size: 350%; }
div.jqcloud span.w5 { font-size: 300%; }
div.jqcloud span.w4 { font-size: 250%; }
div.jqcloud span.w3 { font-size: 200%; }
div.jqcloud span.w2 { font-size: 150%; }
div.jqcloud span.w1 { font-size: 100%; }

/* colors */

div.jqcloud { color: #09f; }
div.jqcloud a { color: inherit; }
div.jqcloud a:hover { color: #0df; }
div.jqcloud a:hover { color: #0cf; }
div.jqcloud span.w10 { color: #0cf; }
div.jqcloud span.w9 { color: #0cf; }
div.jqcloud span.w8 { color: #0cf; }
div.jqcloud span.w7 { color: #39d; }
div.jqcloud span.w6 { color: #90c5f0; }
div.jqcloud span.w5 { color: #90a0dd; }
div.jqcloud span.w4 { color: #90c5f0; }
div.jqcloud span.w3 { color: #a0ddff; }
div.jqcloud span.w2 { color: #99ccee; }
div.jqcloud span.w1 { color: #aab5f0; }

/* layout */

div.jqcloud {
  overflow: hidden;
  position: relative;
}

div.jqcloud span { padding: 0; }</style>
<div class="container mt-80">
    <div class="card-columns">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">在线代码运行</a></h5>
                <p class="card-text">111
                </p>
            </div>
        </div>
    </div>
</div>
<div id="example" class="jqcloud" style="width: 550px; height: 350px;"></div>
<script src="https://raw.githubusercontent.com/lucaong/jQCloud/master/jqcloud/jqcloud-1.0.4.min.js"></script>
<script>
/*!
       * Create an array of word objects, each representing a word in the cloud
       */
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
          {text: "Amet", weight: 5},
          {text: "Amet", weight: 5},
          {text: "Amet", weight: 5},
          {text: "Amet", weight: 5},
          {text: "Amet", weight: 5},
          {text: "Amet", weight: 5},
          {text: "Amet", weight: 5},
          {text: "Amet", weight: 5},
          {text: "Amet", weight: 5},
          {text: "Amet", weight: 5},
          {text: "Amet", weight: 5},
          {text: "Amet", weight: 5},
          {text: "Amet", weight: 5},
          {text: "Amet", weight: 5},
          {text: "Amet", weight: 5},
          {text: "Amet", weight: 5},
          // ...as many words as you want
      ];

      $(function() {
        // When DOM is ready, select the container element and call the jQCloud method, passing the array of words as the first argument.
        $("#example").jQCloud(word_array);
      });
</script>