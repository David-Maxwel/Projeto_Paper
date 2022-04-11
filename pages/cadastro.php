<div >
    <header class="form_registro_titulo">
        <h2>Cadastro</h2>
    </header>
    <div class="form_registro">
        <form action="">
            <table class="form_grande" >
                <tr>
                    <th>Nome Completo</th>
                </tr> 
                <tr>
                    <td><input type="text" required></td>
                </tr> 
            </table>
            <table class="form_medio" >
                <tr>
                    <th>CPF</th>
                </tr> 
                <tr>
                    <td><input type="tel" maxlength="11" minlength="11" required></td>
                </tr> 
            </table>
            <table class="form_medio" >
                <tr>
                    <th>Data de Nascimento</th>
                </tr> 
                <tr>
                    <td><input type="date" required></td>
                </tr> 
            </table>
            <table class="form_medio">
                <tr >
                    <th>Telefone</th>                   
                </tr>
                <tr>
                    <td><input type="tel" placeholder="DDD + Número" maxlength="11" minlength="10" required></td>
                </tr>
            </table>
            <table class="form_grande">            
                <tr >
                    <th>Email</th>
                </tr>
                <tr>
                    <td><input type="email" required></td>
                </tr>
            </table>            
            <table class="form_medio">
                <tr>
                    <th>Senha</th>                   
                </tr>
                <tr>
                    <td><input type="password" id="senha" required></td>
                </tr>
            </table>
            <table class="form_medio">
                <tr>
                    <th>Confirmar Senha</th>                   
                </tr>
                <tr>
                    <td><input type="password" id="conf_senha" required></td>
                </tr>
            </table>
            <br>
            <div class="form_cent_text">
                <h2>Qual lado da aplicação você desenvolve?</h2>
            </div>                       
            <table class="form_cent_item">
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Front-end</td>
                    <td><input type="checkbox"></td>
                    <td>Back-end</td>
                    <td><input type="checkbox"></td>
                    <td>Fullstack</td>
                </tr>
            </table>
            <br>
            <div class="form_cent_text">
                <h2>Selecione as tecnologias que você possui experiência:</h2>
            </div>                       
            <table class="form_cent_item">
                <tr>
                    <td><input type="checkbox"></td>
                    <td>HTML</td>
                    <td><input type="checkbox"></td>
                    <td>CSS</td>
                    <td><input type="checkbox"></td>
                    <td>JavaScript</td>
                    <td><input type="checkbox"></td>
                    <td>PHP</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>JAVA</td>
                    <td><input type="checkbox"></td>
                    <td>C</td>
                    <td><input type="checkbox"></td>
                    <td>C++</td>
                    <td><input type="checkbox"></td>
                    <td>C#</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Python</td>
                    <td><input type="checkbox"></td>
                    <td>TypeScript</td>
                    <td><input type="checkbox"></td>
                    <td>Go</td>
                    <td><input type="checkbox"></td>
                    <td>Ruby</td>
                </tr>  
                <tr>   
                    <td><input type="checkbox"></td>
                    <td>Kotlin</td>
                    <td><input type="checkbox"></td>
                    <td>Swift</td>
                    <td><input type="checkbox"></td>
                    <td>Outras</td>
                </tr>
            </table>
            <br>
            <table class="form_peq">
                <tr>
                    <th>Senioridade</td>
                    <td>
                        <select name="senioridade" id="form_reg_select_senioridade">
                            <option value="junior">Junior</option>
                            <option value="pleno">Pleno</option>
                            <option value="senior">Sênior</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Tempo de experiência: </td>
                    <td><input type="tel" placeholder="meses"  maxlength="3" required></td>
                </tr>
            </table>
            <br>
            <div class="form_cent_text">
                <h2>Anexar Currículo</h2>
            </div>
            <table class="form_cent_item">
                <tr>
                    <th><input type="file"></th>
                </tr>
            </table>
            <br>
            <div class="form_cent_text">
                <h2>Conte-nos um pouco sobre você</h2>
            </div>
            <textarea name="" id="" rows="10"></textarea>
            <br>
            <table id="form_btnCriar" class="form_esp_linha">
                <tr>
                    <td><input class="btn_submit" type="submit" value="Cadastrar" onclick="return validarSenha()"></td>
                </tr>
            </table>
        </form>
    </div>
</div>