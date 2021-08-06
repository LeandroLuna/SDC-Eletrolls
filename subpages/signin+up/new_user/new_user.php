<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>SDC | Cadastro</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="style_newuser.css" />
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="multistep-container">
          <div class="mutistep-form-area">
            <div class="form-box">
              <ul class="active-button">
                <li class="active">
                  <span class="round-btn">1</span>
                </li>
                <li>
                  <span class="round-btn">2</span>
                </li>
                <li>
                  <span class="round-btn">3</span>
                </li>
              </ul>

              <h4>Informações Pessoais</h4>
              <form action="./edit_info.php" method="POST">
                <div class="form-group">
                  <label for="">Nome Completo</label>
                  <input type="text" name="cnome_completo" placeholder="Nome e sobrenome" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="">E-mail</label>
                  <input type="email" name="cemail" placeholder="E-mail para contato" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="">CPF</label>
                  <input type="text" name="ccpf" placeholder="*Somente números!*" maxlength="11" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="">Data de Nascimento</label>
                  <input type="date" name="cnascimento" placeholder="Ex: 01-12-1999 " class="form-control" />
                </div>
                <div class="form-group">
                  <label for="">Endereço</label>
                  <input type="text" name="cendereco" placeholder="Ex: Av. Paulista, 99 - São Paulo - SP - 99999-99 " class="form-control" />
                </div>
                <div class="form-group">
                  <label for="">Telefone</label>
                  <input type="tel" pattern="\([0-9]{2}\)[0-9]{5}-[0-9]{4}" name="ctelefone" placeholder="Número para eventuais contatos. Ex: (99)99999-9999" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="">Gênero</label>
                  <select class="custom-select myinput" name="cgenero" id="class">
                    <option value="male">Homem</option>
                    <option value="female">Mulher</option>
                    <option value="other">Outros</option>
                  </select>
                </div>

                <div class="button-row">
                  <input type="button" value="Próximo" class="next" />
                </div>
            </div>

            <div class="form-box">
              <ul class="active-button">
                <li class="active">
                  <span class="round-btn">1</span>
                </li>
                <li class="active">
                  <span class="round-btn">2</span>
                </li>
                <li>
                  <span class="round-btn">3</span>
                </li>
              </ul>

              <h4>Educação e Formação Acadêmica</h4>
              <div class="form-group">
                <label for="">Instituições Frequentadas | Diploma | Data de
                  Conclusão</label>
                <input type="text" name="cinstituicao1" placeholder="Instituição 1" class="form-control" />
                <input type="text" name="cinstituicao2" placeholder="Instituição 2" class="form-control" />
                <input type="text" name="cinstituicao3" placeholder="Instituição 3" class="form-control" />
              </div>
              <div class="form-group">
                <label for="">Habilidades e Qualificações</label>
                <input type="text" name="chabilidades" placeholder="Ex: Excel Avançado, PowerBI, Python.. (SEPARE POR ',')" class="form-control" />
              </div>
              <div class="form-group">
                <label for="">Idiomas</label>
                <input type="text" name="cidiomas" placeholder="Ex: PT NATIVO, EN C2, FR A1.. (SEPARE POR ',')" class="form-control" />
              </div>

              <div class="button-row">
                <input type="button" value="Anterior" class="previous" />
                <input type="button" value="Próximo" class="next" />
              </div>
            </div>

            <div class="form-box">
              <ul class="active-button">
                <li class="active">
                  <span class="round-btn">1</span>
                </li>
                <li class="active">
                  <span class="round-btn">2</span>
                </li>
                <li class="active">
                  <span class="round-btn">3</span>
                </li>
              </ul>

              <h4>Experiência de trabalho</h4>
              <div class="form-group">
                <label for="">Última Experiência</label>
                <input type="text" name="cempregador1" placeholder="Empregador" class="form-control" />
                <input type="text" name="centrada_saida1" placeholder="Data de entrada e saida. Ex: 12/2018 - 06/2020" class="form-control" /><input type="text" name="ccargo1" placeholder="Cargo e Responsabilidades" class="form-control" /><input type="text" name="csalario1" placeholder="Salário" class="form-control" /><input type="text" name="csaida1" placeholder="Motivo de Saída" class="form-control" />
              </div>
              <div class="form-group">
                <label for="">Penúltima Experiência</label>
                <input type="text" name="cempregador2" placeholder="Empregador" class="form-control" />
                <input type="text" name="centrada_saida2" placeholder="Data de entrada e saida. Ex: 12/2018 - 06/2020" class="form-control" /><input type="text" name="ccargo2" placeholder="Cargo e Responsabilidades" class="form-control" /><input type="text" name="csalario2" placeholder="Salário" class="form-control" /><input type="text" name="csaida2" placeholder="Motivo de Saída" class="form-control" />
              </div>
              <div class="form-group">
                <label for="">Antepenúltima Experiência</label>
                <input type="text" name="cempregador3" placeholder="Empregador" class="form-control" />
                <input type="text" name="centrada_saida3" placeholder="Data de entrada e saida. Ex: 12/2018 - 06/2020" class="form-control" /><input type="text" name="ccargo3" placeholder="Cargo e Responsabilidades" class="form-control" /><input type="text" name="csalario3" placeholder="Salário" class="form-control" /><input type="text" name="csaida3" placeholder="Motivo de Saída" class="form-control" />
              </div>

              <div class="button-row">
                <input type="button" value="Anterior" class="previous" />
                <input type="submit" value="Finalizar" class="submit" name="editar" />
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="./code.js"></script>
</body>

</html>