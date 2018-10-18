const $ = require('jquery');
const fancytree = require('jquery.fancytree');

$(document).ready(function() {
  console.log("Loaded");
  $('select#tree--root').on("change", function(){
    console.log("Input changed");
    var treeId = $("select#tree--root option:selected").prop("id");
    var treeUrl = "/api/openspec/tree/" + treeId;
    $('#tree').fancytree({
      source: $.ajax({
        url: treeUrl,
        cache: false,
        dataType: "json"

      }),
      activate: function(event, data){
        // A node was activated: display its title:
        var node = data.node;
        console.log(node.key);

      },
      checkbox:true

    });
  });

  const arr = [10, 12, 15, 21];
  for (var i = 0; i < arr.length; i++) {
    setTimeout(function() {
      console.log('Index: ' + i + ', element: ' + arr[i]);
    }, 3000);
  }
});
