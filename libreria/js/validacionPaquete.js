  var v=true;
        $("span.help-block").hide();

        function verificarCliente(){

        var v1=0,v2=0,v3=0,v4=0;
            v1=validacion('paquete');
            v2=validacion('descripcion');
            v3=validacion('categoria');
            v4=validacion('precio');
            
            if (v1===false || v2===false || v3===false || v4===false  ) {
                 $("#exito").hide();
                 $("#error").show();
            }else{
                $("#error").hide();
                $("#exito").show();
            }
            /*total=v1+v2+v3+v4+v5+v6;
            if (v && total>=6) {
                $("#error").hide();
                $("#exito").show();
            }else{
                 $("#exito").hide();
                 $("#error").show();
            }
            
            
            validacion('nombres');
            validacion('dni');
            validacion('email');
            validacion('genderRadios');
            validacion('carrera');
            if (v) {
                alert("los campos estan validados")
            }
            else{
                alert("los campos no estan validados");
            }*/

        } 
        

        function validacion(campo){
            var a=0;
            
          if (campo==='paquete'){
                paquete = document.getElementById(campo).value;
                if( paquete == null || paquete.length == 0 || /^\s+$/.test(paquete) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Por favor ingrese un paquete.  ").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                    return true;
                    
                } 
            }
             if (campo==='descripcion'){
                descripcion = document.getElementById(campo).value;
                if( descripcion == null || descripcion.length == 0 || /^\s+$/.test(descripcion) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Por favor  ingrese una descripción del paquete.  ").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                    return true;
                    
                } 
            }
          
if (campo==='categoria'){
                indice = document.getElementById(campo).selectedIndex;
                if( indice == null || indice == 0 ) {
                    $('#categoria').parent().parent().attr("class", "form-group has-error");
                    return false;
                }
                else{
                    $('#categoria').parent().parent().attr("class", "form-group has-success");
                    return true;

                }
            }
            
if (campo==='precio'){
                precio = document.getElementById(campo).value;
                if( precio == null || precio.length == 0 || /^\s+$/.test(precio) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Por favor  ingrese un precio.  ").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                    return true;
                    
                } 
            }


            }   