<!DOCTYPE html>
<html>
<head>
	<title> Conexão </title>
</head>		
		<?php
			/* ---------------------------------------------------- */	
			/* -------- 1ª passo: conexão com o WAMP -------------- */	
			/* ---------------------------------------------------- */	
				$servidor= "localhost"; // nome do servidor = localhost
				$usuario = "root"; //nome do usuário de acesso ao banco
				$senha = ""; //senha do usuário: em branco e sem espaço
				$bd = "gif_refrigeracoes"; //nome do banco de dados que será aberto
				$conn = mysqli_connect($servidor,$usuario,$senha, $bd);
		  /* ---------------------------------------------------- */  
            /* -------- FIM 1ª passo: conexão com o WAMP ---------- */  
            /* ---------------------------------------------------- */  



            /* ---------------------------------------------------- */  
            /* -------- 2ª passo: conexão com o servidor de dados-- */  
            /* ---------------------------------------------------- */  
            
                if (!($conn)){

                 echo ("Não foi possível fazer a conexão com servidor de banco de dados"); 
                    exit;
                } else{
                         echo ("conexão com servidor de banco de dados realizado como sucesso");
                }
            /* ---------------------------------------------------- */  
            /* -----FIM 2ª passo: conexão com o servidor de dados-- */  
            /* ---------------------------------------------------- */

            /* ---------------------------------------------------- */  
            /* -------- 3ª passo: conexão com o banco de dados ---- */  
            /* ---------------------------------------------------- */
             
                $selecao = mysqli_select_db($conn, $bd);
                if (!($selecao)){
                    echo ("<br> <br> Conexão com banco de dados realizado como sucesso"); 
                }else{
                         ("<br> <br> Conexão com banco de dados NÃO FOI realizado como sucesso"); 
                }
            /* ---------------------------------------------------- */  
            /* -----FIM 3ª passo: conexão com o banco de dados ---- */  
            /* ---------------------------------------------------- */
             

            /* -------------------------------------------------------- */  
            /* - 4ª passo: Redirecionamento de página: executa o  ------*/
            /* - redicionamento de página para Tela de Login e Senha -- */  
            /* ---------------------------------------------------- */
                         
                    header("Location: pecasadm.PHP");

            /* Caso o redirecionamento não ocorra ocorre um erro e sai do programa. */
                    exit;
            /* -------------------------------------------------------- */  
            /* - FIM 4ª passo: Redirecionamento de página: executa o  ------*/
            /* - redicionamento de página para Tela de Login e Senha -- */  
            /* ---------------------------------------------------- */
             

        ?>  	
	</body>
</html>