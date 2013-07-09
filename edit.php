<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>Visualiza&ccedil;&atilde;o em tempo real</title>    
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
         
        <script type="text/javascript">
		
	
		
            // Variável de verificação
            var atualCode = '';
             
            /**
             * Função de atualização de conteúdo
             */
            function update()
            {
                // Verifica se o conteudo atual é diferente do conteúdo do iframe
                if(atualCode != $('#code').val())
                {
                    // Se for, substitui o iframe com o novo conteúdo
                    $('iframe').contents().find('html').html($('#code').val());
                     
                    // Guarda o novo conteúdo na variável de verificação
                    atualCode = $('#code').val();
                }
                 
                // Espera 0.15 seg e chama a função de atualização novamente
                setTimeout(update, 150);
            }
             
            // Chamada inicial disparada ao carregar pagina
            $(document).ready(update);
			
			
			   $("#Editor_Bold").click(function(){
				ActiveDocument.execCommand('bold', true, null);
				
				});
        </script>
         
        <style type="text/css">
            body{ margin: 0 auto; width: 800px; }
            .geral{ font-family: Arial,Helvetica,sans-serif; font-size: 11px; }
            ul{ margin: 0; padding: 0; }
            li{ list-style: none outside none; margin-bottom: 10px; }
            #code{ height: 300px; width: 100%; background-color: #FAFAFA; border: 1px dashed gray; margin-top: 5px; padding: 10px; }
            #realTime iframe { width: 100%; border: 1px dashed gray; height: 470px; padding: 5px; }
        </style> 
         
    </head>
    <body>
        <div class="geral">
            <ul>
                <li>
                    <h1>Insira ou edite o c&oacute;digo HTML</h1>
                    
                    <a id="Editor_Bold" href="#">Negrito</a>
                    
                    <textarea id="code">
<html>
   <head>
      <style type="text/css">
         .content{
            font-family: Trebuchet MS;
            background-color: #EDEDED;
            padding: 20px;
         }
         p{
            color: #494140;
            text-align: justify;
            font-size: 12px;
         }
      </style>
   </head>
   <body>
      <div class="content">
         <img src="http://www.behave.com.br/assets/images/css/titulo.png" alt="Logomarca Behave" />
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam leo ante, sagittis quis faucibus ac, lacinia ut turpis. Donec sollicitudin, dolor sed vehicula dapibus, ante dolor ullamcorper nibh, at consequat justo ipsum at tellus. Quisque eget metus sed leo fringilla interdum. Pellentesque nulla orci, volutpat eu tempus nec, porttitor suscipit mi. Duis varius enim et metus aliquet non cursus mauris laoreet. Proin sit amet enim quis augue placerat vulputate. Sed quis semper nisl. Proin lacus felis, tempor ut ultricies ut, feugiat ac lectus.</p>
         <p>Ut a libero justo. Sed luctus diam a mauris gravida commodo. Duis id libero quam, vehicula viverra dolor. Phasellus eget gravida metus. Sed mattis posuere velit eu tincidunt. Fusce malesuada quam eu orci fermentum nec elementum est sollicitudin. Suspendisse potenti. Suspendisse laoreet venenatis ante, quis commodo enim ultricies ac. Sed nibh massa, mollis et congue ac, rutrum sit amet lorem. Nunc vitae ligula lacus, id viverra sapien. Donec tincidunt dapibus hendrerit. Nam id malesuada magna. Vivamus faucibus suscipit lorem eget tristique.</p>
         <p>Mauris quis leo nisi. Nulla ante leo, tristique ut elementum id, convallis sed augue. Fusce vulputate, odio non sollicitudin tincidunt, libero tortor rutrum nulla, nec fringilla dui eros ac odio. Phasellus neque nisi, scelerisque a tristique sed, bibendum ac nulla. Quisque sit amet mauris eu nulla pharetra congue. Donec libero eros, fermentum in venenatis mollis, malesuada aliquam dui. Etiam iaculis facilisis ligula nec pretium. Sed vehicula, nisl a bibendum pulvinar, leo nunc laoreet mi, eu ornare erat ipsum sit amet purus. Donec tincidunt lacinia dapibus. Mauris consectetur sem nec erat tincidunt dapibus mattis mauris congue. Nunc nec turpis odio. Fusce pellentesque eros non nisl tincidunt consectetur. Aenean scelerisque, leo non dignissim tempor, turpis odio pellentesque purus, quis porttitor eros ipsum id mauris.</p>
      </div>
   </body>
</html>
                    </textarea>
                </li>
                <li>
                    <h1>Visualiza&ccedil;&atilde;o em tempo real</h1>
                    <div id="realTime">
                        <iframe id="result"></iframe>
                    </div>
                </li>
           </ul>
        </div>
    </body>
</html>
