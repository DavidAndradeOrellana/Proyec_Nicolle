function getresult(url) {    
  $.ajax({
    url: url,
    type: "POST",
    data:  {rowcount:$("#rowcount").val(),Nombre:$("#Nombre").val(),IdUsuario:$("#IdUsuario").val()},
    success: function(data){ $("#toys-grid").html(data); $('#add-form').hide();}
     });
  }
  getresult("getresult.php");
  function add() {
  var valid = validate();
  if(valid) {
    $.ajax({
      
      success: function(data){ getresult("getresult.php"); }
       });
    }
  }