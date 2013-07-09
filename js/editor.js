/** Editor WYSIWYG */
var Editor = null;
 

/**
 * Evento disparado quando a página carregar.
 *
 */
$(document).ready(function(){
    Editor = new myEditor();
    Editor.Start();
});
 

/**
 * Editor WYSIWYG
 *
 */
function myEditor() {

    /**
     * Retorna a janela do editor
     *
     * @return contentWindow.document
     */
    this.getEditor = function() {
        return $("#Editor")[0].contentWindow.document;
    };


    /**
     * Inicia o editor
     */
    this.Start = function() {
        this.getEditor().designMode = 'on'; //Inicia o modo Design
        //Desativa a formatação padrão em CSS
        try { this.getEditor().execCommand("styleWithCSS", 0, false); }
        catch (e) { try { this.getEditor().execCommand("useCSS", 0, true); } catch (e) { } }
    }; 


    /**
     * Evento disparado ao clicar no botão "Negrito"
     *
     * @return False - Impede que a página seja redirecionada para "#"
     */
    $("#Editor_Bold").click(function(){
        Editor.getEditor().execCommand('bold', false, null);
        return false; //Sempre definir return false para links do editor
    });


    /**
     * Evento disparado ao clicar no botão "Itálico"
     *
     * @return False - Impede que a página seja redirecionada para "#"
     */
    $("#Editor_Italic").click(function(){
        Editor.getEditor().execCommand('italic', false, null);
        return false; //Sempre definir return false para links do editor
    });
	
	
	$("#Editor_Imput").click(function(){
					   
		Editor.getEditor().execCommand('newbutton', false, null);
		return false;
	});
   
}
