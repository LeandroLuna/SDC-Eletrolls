# SDC-Eletrolls

Programação da plataforma de recrutamento para empresa '**Shopping do Cidadão**'.

Desafio: **"Como desenhar e selecíonar os melhores candidatos para as nossas operações"**

Solução Proposta: **"Plataforma de recrutamento (ATS, "applicant tracking system") para triagem dos melhores candidatos de acordo com os requisitos de cada vaga, visando selecionar os candidatos ideais para as operações do 'Shopping do Cidadão' em um ciclo de contratação reduzido."**

## Descrição do projeto

O projeto desenvolvido pretende tornar a **seleção e contratação dos recrutamentos “Shopping do Cidadão” mais simplificadas possíveis**, eliminando tarefas administrativas desnecessárias e melhorando as três métricas de contratação: **velocidade, orçamento e valor líquido agregado dos candidatos.**

Para tanto, foram utilizadas técnicas de gerenciamento e modelagem de banco de dados em conjunto com linguagens de programação front-end (HTML e CSS) e back-end (JavaScript, PHP e Hack).

Complementando, para construção das tabelas envolvidas na construção do website foram utilizadas as tabelas propiciadas pela “**CloudTables**”. Ademais, todas referencias de layout e design poderão ser encontradas na secção “**Bibliográfia/Licensas**”.

**Todos os direitos reservados.**

## Organização dos arquivos

```
   /
   ├── images
   │ ├── banner.png
   │ ├── curso1.jpeg
   │ ├── curso2.jpeg
   │ ├── curso3.jpeg
   │ ├── hackathon.jpg
   │ ├── img1.png
   │ └── seletivo.jpg
   ├── subpages
   │ ├── Login
   │ │ ├── funcionarios
   │ │ │ ├── func_login.php
   │ │ │ ├── home.php
   │ │ │ └── style.css
   │ │ ├── login_homepage.php
   │ │ ├── login.html
   │ │ ├── login.php
   │ │ ├── logout.php
   │ │ ├── painel.php
   │ │ ├── style_painel.css
   │ │ ├── style.css
   │ │ └── verificar_login.php
   │ ├── signin+up
   │ │ ├── img
   │ │ │ ├── feeling_proud.svg
   │ │ │ └── hello.svg
   │ │ ├── new_user
   │ │ │ ├── code.js
   │ │ │ ├── edit_info.php
   │ │ │ ├── new_user.php
   │ │ │ └── style_newuser.css
   │ │ ├── app.js
   │ │ ├── code.js
   │ │ ├── config.php
   │ │ ├── login.php
   │ │ ├── new_user.html
   │ │ ├── new_user.php
   │ │ ├── sigin_up.php
   │ │ ├── style_newuser.css
   │ │ └── style.css
   │ ├── cursos.html
   │ ├── hackathons.html
   │ ├── privacy.html
   │ ├── style.css
   │ └── terms.html
   ├── index.html
   ├── style.css
   ├── informações do candidato.txt
   └── README.md
```

## Demonstração de funcionamento

_Vídeo com o funcionamento da plataforma:_ [Prótotipo](https://drive.google.com/file/d/1R-td5ytux6Ofzm6R_hB1mT5LBV38taW8/view?usp=sharing)

Ao adentrar no website o usuário se deparará com a página principal da plataforma:
![image](https://user-images.githubusercontent.com/29809108/131199430-0a363fcd-2402-412d-a73e-e08e112f98e4.png)

Nela, funcionários e candidatos poderão usufruir de uma navegação fluida através do **Header/Footer** da página, onde estarão dispostos informações referentes ao “Shopping do Cidadão”.

As primeiras informações que encontramos no site são as divisões **“Quem Somos”** e **“Trabalhe Conosco”**:
![image](https://user-images.githubusercontent.com/29809108/131199473-c91ad180-7ac1-49e3-aa40-0e07329c5ac9.png)

É aqui que o usuário se deparará com textos de motivação a respeito da organização “Shopping do Cidadão”. Desta forma, ele terá um breve resumo e se sentirá **motivado** a continuar com as demais etapas do processo de candidatura.

Acessando o menu **“Candidate-se | Processos Seletivos”**, o usuário será redirecionado para divisão onde ele poderá se registrar como um novo candidato:

![image](https://user-images.githubusercontent.com/29809108/131200141-973ff3be-45d1-4fb5-9505-0e25588f9e51.png)

Após isso, ele se encontrará em duas diferentes maneiras de se registrar, sendo essas **“Processos Seletivos”** e **“Hackathons”**:

1.  **Processos seletivos:** Através dos processos seletivos os candidatos poderão se registrar e candidatar - da maneira clássica - para as mais diversas vagas em aberto no momento.
2.  **Hackathons:** Eventos promovidos pela empresa parceira (“Shopping do Cidadão”) para recrutamento, seleção e desenvolvimento de novos talentos. Por intermédio desse recurso, poderá ser avaliadas diversas habilidades, tais como: **capacidade analítica, proatividade e agilidade, capacidade de comunicação, relacionamento etc.**

Além disso, também poderá ser encontrado na página principal a divisão **“Educa Cidadão”**:
![image](https://user-images.githubusercontent.com/29809108/131200148-cabf1933-83a6-4d80-a0c3-6abb94a7ae47.png)

Planejando o desenvolvimento de futuros talentos e possível escassez de habilidades, foi-se elaborada à “Educa Cidadão”. **O programa consiste em capacitar candidatos, oferecendo cursos de desenvolvimento pessoal (“Soft Skills” e “Hard Skills”).**

- Visando o incentivo ao uso do programa, **candidatos que se inscreverem nos cursos oferecidos pela “Educa Cidadão” terão prioridades nos processos seletivos que se inscreverem** – ver divisão anterior, **“Candidate-se | Processos Seletivos”**.

_Dessa maneira, conclui-se a apresentação da página principal._

A partir de agora dividiremos a exemplificação em duas jornadas: **candidato** e **funcionário**. Em cada uma dessas jornadas, introduziremos as etapas que cada um – funcionário e candidato – vivenciarão através da plataforma.

1. **Funcionário**:

   Clicando no menu “Login”, o funcionário será redirecionado para uma página de autenticação:
   ![image](https://user-images.githubusercontent.com/29809108/131200153-9f69f798-2a2e-4516-9fcb-57212435cdac.png)

   Clicando sobre o banner **“RECRUTAMENTO”** o funcionário será redirecionado para página anterior – **“Menu Principal”**. E, utilizando-se do e-mail e senha, o funcionário poderá realizar a conexão para a página de gerenciamento de vagas e aplicações.

   - **Por motivos de segurança, o cadastro de um novo funcionário só poderá ser realizado por um outro antigo funcionário já logado na plataforma.**

   A próxima página é a de “Gerenciamento de Vagas”, página está a principal dos funcionários:
   ![image](https://user-images.githubusercontent.com/29809108/131200162-bc3cb876-b909-4d8c-9cb0-63cdb1be8b40.png)

   Aqui os funcionários – principalmente aqueles relacionados a recursos humanos – poderão **gerenciar todas as vagas, aplicações, e seus devidos status.**  
   O funcionário terá total controle sobre ela; como **filtros de pesquisa** (utilizando o “Centro”, “Cargo” ou “Data de Abertura” como parâmetros), **números de registros** (10, 25, 50 ou 100) e **manipulações (criação, atualização, exclusão e leitura).**

2. **Candidato**:

   2.1 **Processos Seletivos**: Clicando sobre o banner de "**Processos Seletivos**" na divisão "**Candidate-se | Processos Seletivos**", será aberta uma página de
   login/cadastro para os candidatos:

   ![image](https://user-images.githubusercontent.com/29809108/131236927-3bf173e5-6e3d-478e-8ef2-7dac62b11505.png)

   A direita da página aberta os candidatos previamente cadastrado poderão realizar a conexão à "**área do candidato**" - tal área que será introduzida logo mais.

   Enquanto na parte esquerda da página, ao clicar sobre o botão "**cadastrar**", os candidatos de primeira viagem poderão realizar suas inscrições no banco de
   dados da plataforma:

   ![image](https://user-images.githubusercontent.com/29809108/131236943-73056840-7505-497d-a736-8cf434990155.png)

   Após serem submetidas as informações iniciais, o candidato será redirecionado para uma nova página para complementar mais informações sobre ele:

   ![image](https://user-images.githubusercontent.com/29809108/131236951-98ebf5df-4e7c-46e9-ad98-bb9400281be3.png)

   - **Quanto maior o número de informações que candidato submeter, maiores serão a chance dele encontrar uma vaga mais ideal ao seu perfil.**

   Após isso, ele será redirecionado para última etapa do processo, onde será exibida as vagas em aberto de acordo com as informações submetidas anteriormente:

   2.2. **Hackathons**: [Explicação de Funcionamento](https://github.com/LeandroLuna/SDC-Eletrolls/blob/main/subpages/educa_hackathon.md#hackathons)

E por fim, o funcionamento do programa **["Educa Cidadão"](https://github.com/LeandroLuna/SDC-Eletrolls/blob/main/subpages/educa_hackathon.md#educa-cidad%C3%A3o).**

## Instalação

Para hospedar o website em um servidor local em sua máquina você precisará do XAMPP:
https://www.apachefriends.org/download.html

Após isso no programa basta ativar "Apache" e "Mysql":

![image](https://user-images.githubusercontent.com/29809108/131224209-0af3eb5b-4b12-4cb7-9def-53513103b4e9.png)

Para conferir se está tudo corretamente configurado, acesse: http://localhost/dashboard/
![image](https://user-images.githubusercontent.com/29809108/131224216-b3c30fed-9c16-41bb-a163-ec3a4ecf8c7a.png)

Em seguida, clone o repositório do projeto: https://github.com/LeandroLuna/SDC-Eletrolls.git

ou

```
gh repo clone LeandroLuna/SDC-Eletrolls
```

E por fim, na raiz do programa XAMPP - que instalamos previamente -, entre na pasta "/htdocs" e coloque a pasta que acabamos de baixar. Ficando algo similar à: C:\xampp\htdocs\SDC_Eletrolls\

Para acessa-la basta abrir o navegador e pesquisar por: https://localhost/SDC_Eletrolls/ ou https://127.0.0.1/SDC_Eletrolls/

## Agradecimentos

Gostaria de agradecer ao nosso Scrum Master **Prof. Reinaldo Borges**. por seu apoio e orientação consistentes durante a execução deste projeto. Além disso, gostaria de agradecer ao restante da equipe de desenvolvimento da graduação por seus esforços colaborativos durante toda jornada. Também gostaria de agradecer à faculdade e professores da "**FIAP**" por sua participação e envolvimento no projeto, assim como a empresa "**Shopping do Cidadão**" pelas orientações, suporte e feedbacks nas mentorias.

| Nome                               | Contato                  |
| ---------------------------------- | ------------------------ |
| Leandro de Jesus Luna              | leandro.j.luna@gmail.com |
| Pedro Fernandes                    |                          |
| Fabbio Augusto de Souza Moura Boli |                          |
| Pedro Enrique Pereira Velosa       |                          |
| Rafael Procopio Bondezam           |                          |

Em nome de toda turma do 2º ano de engenharia da computação (2021), meus sinceros agradecimentos!

## Inspirações e Referências

Abaixo será listada todas inspirações e referências utilizadas para realização do projeto:

- [Complete Login Register & Logout System | PHP & MySQL | Animated Epic Login Regis Form | Source Code - YouTube](https://www.youtube.com/watch?v=lIi9rqW-yJY&list=LL&index=3&ab_channel=PureCoding)
- [Multi Step Form With Progress Bar Css Jquery | Step By Step Form With Progress Bar | Multi Step Form - YouTube](https://www.youtube.com/watch?v=saabXtJpEvY&list=LL&index=5&ab_channel=DeveloperDuniya)
- [Registration, Login in PHP using Xampp server - YouTube](https://www.youtube.com/watch?v=fsQoA7NMhsU&list=LL&index=5&ab_channel=MahmudChoudhury)
- [Tela de Login e Cadastro Interativa - HTML5 & CSS3 - [Parte 1] - YouTube](https://www.youtube.com/watch?v=GtsNZtzZiec&list=LL&index=7&ab_channel=GuilhermeChinaglia)
- [Login form in PHP and MySQL | With Password Encryption - YouTube](https://www.youtube.com/watch?v=KSiIyZ3xw-A&list=LL&index=8&ab_channel=CodeFlix)
- [Simple signup and login system with PHP and Mysql database | Full Tutorial | How to & source code - YouTube](https://www.youtube.com/watch?v=WYufSGgaCZ8&list=LL&index=9&ab_channel=QuickProgramming)
- [Build a Complete Responsive Personal Portfolio Website using Html CSS &amp; Javascript from Scratch - YouTube](https://www.youtube.com/watch?v=UnlXPMKB-wE&ab_channel=OnlineTutorials)
- [Responsive Footer Section Design using only HTML & CSS - YouTube](https://www.youtube.com/watch?v=f4J3uaNNYTE&ab_channel=CodingNepal)
- [DataTables - CloudTables](https://datatables.net/)
- [Live Vanilla DataTables CRUD with JavaScript PHP & MySql](https://www.webslesson.info/2021/08/live-vanilla-datatables-crud-with-javascript-php-mysql.html)
- [Sidebar Menu | With Sub-Menus - Using HTML, CSS & JQuery](https://www.youtube.com/watch?v=5gnRgIq8-LQ&ab_channel=CodingSnow)

## Copyright

Copyright (c) <Eletrolls - 2021>

      Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal
      in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
      copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

      The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

      THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
      FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
      LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
      THE SOFTWARE.
