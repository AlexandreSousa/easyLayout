			$.miniBB = function (id, bblink)
			{
				
				/* Lista de BBCodes */
				
				var BBCodes = 
				{
					b: 			'[b]%[/b]',
					i: 			'[i]%[/i]',
					u: 			'[u]%[/u]',
					p: 			'[p]%[/p]',
					h1: 		'<h1>%</h1>',
					h2: 		'[h2]%[/h2]',
					h3: 		'[h3]%[/h3]',
					h4: 		'[h4]%[/h4]',
					h5: 		'[h5]%[/h5]',
					h6: 		'[h6]%[/h6]',
					url: 		'[url=@]%[/url]',
					img: 		'[img=@]',
					hr:			'[hr]',
					br:			'[br]',
					div:		'<div id="" class="">%</div>',
					input:		'<input type="" name="@" value="">'
				};
				
				/* Algumas variáveis */
				
				var BBType, textarea, selected, ie_selected, replaced, value = '';
				
				/* Precaução =P */
				
				id = id.replace('#');
				
				/* Quando um botão do BBCode é clicado... */
				
				$(bblink).click(function()
				{	
				
					/* Ele separa da hash o tipo de botão */
				
					BBType = this.href.split('#').pop();
					
					/* Se o tipo de botão existir na lista do BBCode */
					
					if (BBCodes[BBType])
					{
						
						/* Ele "chama" o elemento com a textarea */
						
						textarea = document.getElementById(id.split('#').pop());
						
						/* Se o browser for IEca, ele "pega" o texto selecionado */
						
						if (document.selection)
						{
							ie_selected = document.selection.createRange();
							selected = ie_selected.text;
						}
						
						/* Se o browser for Chrome/FF/Safari, também... */
						
						else
						{
							selected = textarea.value.substring(textarea.selectionStart, textarea.selectionEnd);
						}
						
						/* A seguir, ações para os diferentes tipos de BBCodes */
						
						switch (BBType)
						{
							
							/* Ação para BBCode simples com abertura/fechamento */
							
							default:
								replaced = BBCodes[BBType].replace('%', selected);
							break;
							
							/* Ação para links */
							
							case 'url':
								value = prompt ("Digite a URL para o link:", "http://");
								if (!value) value = '';
								replaced = BBCodes[BBType].replace('@', value);
								replaced = replaced.replace('%', selected);
							break;
							
							/*Ação input */
							case 'input':
								value = prompt ("Digite o Nome do input:", "imput1");
								if (!value) value = '';
								replaced = BBCodes[BBType].replace('@', value);
								replaced = replaced.replace('%', selected);
							break;
							
							/* Quebras de página e linhas horizontais (tags sem fechamentos) */
							
							case 'br':
							case 'hr':
								replaced = selected + BBCodes[BBType];
							break;
							
							/* Imagens */
							
							case 'img':
								value = prompt ("Digite a URL para a imagem:", "http://");
								if (!value) value = '';
								replaced = selected + BBCodes[BBType].replace('@', value);
							break;
						}
						
						/* Se o navegador for o Ruinternet Explorer */
						
						if (document.selection)
						{
							/* Se for selecionado o texto, substitui. Senão, acrescenta */
							if (ie_selected.text)
								ie_selected.text = replaced;
							else
								textarea.value = textarea.value + replaced;
						}
						
						/* Se for FF/Chrome/Safari/etc, faz o que tem que fazer */
													
						else
						{
							textarea.value = textarea.value.substring(0, textarea.selectionStart) + replaced + textarea.value.substring(textarea.selectionEnd, textarea.value.length);					
						}		
							
					}
					
					/* Retorna o foco para textarea e encerra script */
					
					textarea.focus();
					return false;
				});
			};
		
			$(document).ready(function() 
			{
				$.miniBB('exemplo', '.buttons');
			});
			
			
			// VariÃ¡vel de verificaÃ§Ã£o
            var atualCode = '';
             
            /**
             * FunÃ§Ã£o de atualizaÃ§Ã£o de conteÃºdo
             */
            function update()
            {
                // Verifica se o conteudo atual Ã© diferente do conteÃºdo do iframe
                if(atualCode != $('#exemplo').val())
                {
                    // Se for, substitui o iframe com o novo conteÃºdo
                    $('iframe').contents().find('html').html($('#exemplo').val());
                     
                    // Guarda o novo conteÃºdo na variÃ¡vel de verificaÃ§Ã£o
                    atualCode = $('#exemplo').val();
                }
                 
                // Espera 0.15 seg e chama a funÃ§Ã£o de atualizaÃ§Ã£o novamente
                setTimeout(update, 150);
            }
             
            // Chamada inicial disparada ao carregar pagina
            $(document).ready(update);