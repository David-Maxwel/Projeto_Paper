

<table class="dados_cliente">
    <tr>
        <td><img src="https://www.pngplay.com/wp-content/uploads/12/User-Avatar-Profile-Download-Free-PNG.png" alt="perfil"></td>
        <td>
            <table>
                <tr>
                    <th><input id="dados_cliente_nome" type="text" name="nome" value="Meu Nome Completo Aqui" disabled></th>          
                </tr>
            </table>
            <table>
                <tr>
                    <td><input id="idade" type="text" name="idade" value="xx Anos" disabled></td>
                    <td><input id="cpf" type="text" name="cpf" value="000.000.000-00" disabled ></td>
                    <td><input id="tel" type="text" name="tel" value="(99) 99999-9999" disabled ></td>
                </tr>               
            </table>           
        </td>
    </tr>
    <tr>
        <td>
            <div class="dropdown">
                <button class="dropbtn">Menu</button>
                <div class="dropdown-content">
                    <a href="#">Alterar Foto</a>
                    <a href="#">Editar Perfil</a>
                    <a href="#">Minhas Vagas</a>
                    <a href="#">Notificações</a>
                    <a href="#/login">Sair</a>
                </div>
            </div>
        </td>
        <td>
            <table>
                <tr>
                    <td><input id="email" type="email" name="email" value="insira.email@dominio.com.br" disabled ></td>
                    <td>
                        <table id="tab_social">
                            <tr>
                                <td><img id="cliente_social_img" src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="Linkedin"></td>
                                <td><input id="linkedin" type="text" name="linkedin" value="linkedin_user" disabled></td>
                            </tr>
                            <tr>
                                <td><img id="cliente_social_img" src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="GitHub"></td>
                                <td><input id="github" type="text" name="github" value="github_user" disabled></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>   
    </tr>
</table>
<table class="dados_cliente" id="add_esp_form">
    <tr id="dados_cliente_inf_prof_tit">
        <th>INFORMAÇÕES PROFISSIONAIS</th>
    </tr>
    <tr>
        <table class="dados_cliente" id="rmv_esp_form">
            <tr id="dados_cliente_texto_ngt">
                <th>Tempo de experiência</th>  
                <th>Senioridade</th>
                <th>Tipo de Dev.</th>            
            </tr>
            <tr>
                <td><input id="ipt_peq" type="tel" placeholder="meses"  maxlength="3" value="000" disabled> Meses</td>
                <td>
                    <select name="senioridade">
                        <option value="junior">Junior</option>
                        <option value="pleno">Pleno</option>
                        <option value="senior">Sênior</option>
                    </select>
                </td>
                <td>
                    <select name="tipo_dev">
                        <option value=""></option>
                        <option value="front">Front-End</option>
                        <option value="back">Back-End</option>
                        <option value="full">Fullstack</option>
                    </select>
                </td>
            </tr>
        </table>
    </tr>
    <tr>
        <table class="dados_cliente" id="rmv_esp_form">
            <tr id="dados_cliente_texto_ngt_center">
                <th>Tecnologias que possui experiência</th>
            </tr>
        </table>
        <table class="dados_cliente" id="rmv_esp_form">
            <tr id="dados_cliente_texto">
                <td><input type="checkbox"></td>
                <td>Angular</td>
                <td><input type="checkbox"></td>
                <td>AWS</td>
                <td><input type="checkbox"></td>
                <td>Bootstrap</td>
                <td><input type="checkbox"></td>
                <td>C</td>
            </tr>
            <tr id="dados_cliente_texto">
                <td><input type="checkbox"></td>
                <td>C#</td>
                <td><input type="checkbox"></td>
                <td>C++</td>
                <td><input type="checkbox"></td>
                <td>CSS</td>
                <td><input type="checkbox"></td>
                <td>Flutter</td>
            </tr>
            <tr id="dados_cliente_texto">
                <td><input type="checkbox"></td>
                <td>Go</td>
                <td><input type="checkbox"></td>
                <td>HTML</td>
                <td><input type="checkbox"></td>
                <td>JAVA</td>
                <td><input type="checkbox"></td>
                <td>JavaScript</td>
            </tr>
            <tr id="dados_cliente_texto">
                <td><input type="checkbox"></td>
                <td>Kotlin</td>
                <td><input type="checkbox"></td>
                <td>MariaDB</td>
                <td><input type="checkbox"></td>
                <td>MS SQL</td>
                <td><input type="checkbox"></td>
                <td>MySQL</td>
            </tr>
            <tr id="dados_cliente_texto">
                <td><input type="checkbox"></td>
                <td>Oracle</td>
                <td><input type="checkbox"></td>
                <td>PHP</td>
                <td><input type="checkbox"></td>
                <td>PostgreSQL</td>
                <td><input type="checkbox"></td>
                <td>Python</td>
            </tr>

            <tr id="dados_cliente_texto">
                <td><input type="checkbox"></td>
                <td>React</td>
                <td><input type="checkbox"></td>
                <td>React Native</td>
                <td><input type="checkbox"></td>
                <td>Ruby</td>
                <td><input type="checkbox"></td>
                <td>Rust</td>
            </tr>  
            <tr id="dados_cliente_texto">   
                <td><input type="checkbox"></td>
                <td>Swift</td>
                <td><input type="checkbox"></td>
                <td>TypeScript</td>
                <td><input type="checkbox"></td>
                <td>Vue.js</td>
                <td><input type="checkbox"></td>
                <td>Outros...</td>
            </tr>
        </table>
    </tr>
    <tr>
        <table class="dados_cliente" id="rmv_esp_form">
            <tr id="dados_cliente_texto_ngt_center">
                <th>Anexar Currículo</th>
            </tr>
        </table>
        <table class="dados_cliente" id="rmv_esp_form">
            <tr id="dados_cliente_texto">
                <td><input type="file"></td>
            </tr>
        </table>
    </tr>
    <tr>
        <table class="dados_cliente" id="rmv_esp_form">
            <tr class="form_cent_text">
                <th>Conte-nos um pouco sobre você</th>
            </tr>
        </table>
        <table class="dados_cliente" id="rmv_esp_form">
            <tr>
                <td><textarea name="" id="" rows="10"></textarea></td>
            </tr>
        </table>
    </tr>
</table>
<footer class="rodapé">

</footer>
    
