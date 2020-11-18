<select name="id_autor" class="titulo_campo_selecoes">
  <option value="null">Selecione um autor</option>
    <?php
        $lerAutor = new Ler();
        $lerAutor->consultaManual("SELECT DISTINCT u.id AS id_autor,
            p.id_autor, u.nome AS autor 
            FROM usuario u LEFT JOIN publicacao p ON u.id = p.id_autor 
            WHERE u.id != :id", "id={$_SESSION['autenticado']['id']}");

        if(!$lerAutor->resultado()):
             echo "<option disabled='disabled'>Não há autores</option>";
        else:
            foreach($lerAutor->resultado() AS $autores):
                echo "<option value=\"{$autores['id_autor']}\" ";
                if($autores['id_autor'] == $publicacao['id_autor']):
                    echo " selected=\"selected\"  ";
                endif;

                echo " style = 'color:black;'><b> &rsaquo; </b>{$autores['autor']}</option>";
            endforeach;
        endif;
      ?>
  </select>
