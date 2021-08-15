<?php
              if( isset( $_FILES['fotos']['tmp_name'] ) && $publicacao == '' ) :
                            
                            $ng = new AdmPublicacoes();
                            $ng->enviarGaleria( $_FILES['fotos'], $id );

                            if( $ng->getResult() ):
                                $trazerCapa = new Ler();
                                $trazerCapa->executarLeitura('fotos', "WHERE id = {$id}");

                                if( $trazerCapa->resultado() ):
                                    echo "<div class='galeria'>";
                                        Verificacao::imagens( $galeria['foto'], $publicacao['descricao'].'-'.$gb, 200, 185 );
                                        echo "<a href=\"editar_publicacao.php?postid={$id}*9378*825*14;&imagemGal={$galeria['id']}\" class='imagem j_delete'>";
                                        echo "<img src='icone/cancel.png' alt='excluir' title=\"{$galeria['id']}\" class='galeria-botao-excluir'>";
                                        echo "</a>";
                                    echo "</div>";
                                    Verificacao::imagens( $publicacao['imagem'], $publicacao['descricao'], 200,200 );
                                endif;

                                errosDoUsuarioCustomizados( "Galeria atualizada! {$ng->getQtdGaleria()} enviadas.", CORPF_VERDE );
                            endif;
                            
                        endif;
        ?>
