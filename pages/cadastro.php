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
            <table id="form_btnCriar" class="form_esp_linha">
                <tr>
                    <td><input class="btn_submit" type="submit" value="Cadastrar" onclick="return validarSenha()"></td>
                </tr>
            </table>
        </form>
    </div>
</div>