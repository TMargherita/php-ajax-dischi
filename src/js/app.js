const $ = require('jquery');
const Handlebars = require("handlebars");

$(document).ready(function(){

  $.ajax({
    "url": "http://localhost/php-ajax-dischi/server.php",
    "method": "GET",
    "success" : function(data) {
      render(data);
      printAuthorSelect(data);
    },
    "error": function(err){
      alert("Errore");
    }
  });

  $("#select-authors").change(function (){
    var author = $(this).val();

    $.ajax({
      "url": "http://localhost/php-ajax-dischi/server.php",
      "data" : {
        "author" : author
      },
      "method": "GET",
      "success" : function(data) {
        render(data);
      },
      "error": function(err){
        alert("Errore");
      }
    });
  });

});

//funzione che ritorna i risultat all'interno del template dei cds
function render(data) {

  var source = $("#cd-template").html();
  var template =  Handlebars.compile(source);

  for(var i=0; i < data.length; i++) {

    printAuthorSelect(data[i]["author"]);
    var html = template(data[i]);
    $("album").append(html);
  }

}

function printAuthorSelect(author) {
  var author = [];

  for (var i=0; i < data.length; i++) {
    var author = data[i]["author"];

    if(!authors.include(auhtor)) {
      var source = $("#author-option-template").html();
      var template =  Handlebars.compile(source);
      var context = {
        "author" : author
      };

      var html = template(data[i]);
      $("#select-authors").append(html);
      author.push(author);
    }
  }

}
