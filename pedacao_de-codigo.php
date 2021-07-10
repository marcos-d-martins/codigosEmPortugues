<?php
  elseif(is_float($dadoInformado)):
            echo "Não pode ser número quebrado! Informe um inteiro.";
            return false;
        elseif(is_int($dadoInformado)):
            echo "número inteiro!";
            while(is_int($dadoInformado)):
                //var_dump($dadoInformado);
                for ($contador = 1; $contador < 10; $contador++):
                    for($contadorDeBlocos = 2; $contadorDeBlocos < 10; $contadorDeBlocos++):
                    
                        echo "<label><span class=\"titulo_campo\">Bloco {$contadorDeBlocos}: informe outro número inteiro:</span>
                                <input type=\"text\" name=\"titulo\" class=\"campos_formulario\" autofocus >
                                {$dadoInformado}
                            </label>

                        <input type=\"submit\" class=\"btn_enviar\" value=\"cadastrar categoria\" name=\"cadastrar_categoria\">";
                        $numeros = [$dadoInformado];
                        array_push($numeros, $dadoInformado);
                    endfor;
                    if(!is_int($dadoInformado)):
                        echo "informe um número inteiro!";
                        echo "<label><span class=\"titulo_campo\">informe outro número inteiro:</span>
                            <input type=\"text\" name=\"titulo\" class=\"campos_formulario\" autofocus>
                        </label>

                        <input type=\"submit\" class=\"btn_enviar\" value=\"cadastrar categoria\" name=\"cadastrar_categoria\">";
                        if(is_int($dadoInformado)):
                            echo "Boa! informe mais um número inteiro";
                            echo "<label><span class=\"titulo_campo\">informe outro número inteiro:</span>
                                    <input type=\"text\" name=\"titulo\" class=\"campos_formulario\" autofocus>
                                </label>

                                <input type=\"submit\" class=\"btn_enviar\" value=\"cadastrar categoria\" name=\"cadastrar_categoria\">";
                        endif;
                    endif;
                endfor;
            endwhile;
        endif;
?>
