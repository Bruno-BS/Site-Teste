<?php
// Função para enviar o e-mail de confirmação
function enviarEmailConfirmacao($nome, $email)
{
    $elasticEmailApiKey = "5D150ABC1ACC82BA6881AC6FD523E0E4079F93C0017E352BE133E702F80C78DCDFEE3153306396F7823F513E1E9A9F04"; // Substitua pela sua chave de API do Elastic Email
    $elasticEmailUrl = "https://api.elasticemail.com/v2/email/send";

    $emailParams = array(
        'apikey' => $elasticEmailApiKey,
        'from' => 'dev.brunohenrique@gmail.com', // Substitua pelo e-mail remetente
        'fromName' => 'Bruno, do BonanzApp', // Substitua pelo nome remetente
        'to' => $email,
        'subject' => 'Confirmação de Cadastro',
        'bodyHtml' => /*'<p>Olá ' . $nome . ',</p><p>obg por cadastrar men!</p>',*/ '<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #F5F6F8;">
  <center role="article" aria-roledescription="email" lang="en" style="width: 100%; background-color: #F5F6F8;">
    <!--[if mso | IE]>
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #F5F6F8;">
    <tr>
    <td>
    <![endif]-->
    <!-- Email Body -->
    <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="640" style="margin: auto;" class="email-container">

      <!-- Unsubscribe -->
      <tr>
        <td style="padding: 20px 32px; text-align: center">
          <p style="height: auto; margin: 15px 0; background: #F5F6F8; font-family: Open Sans; font-size: 11px; line-height: 15px; color: #555555; background-color: #F5F6F8;">
            Unable to view? Read it <a href="{view}" class="link-btn">online</a></p>
        </td>
      </tr>

      <!-- Logo -->
      <tr>
        <td class="logo" style="padding: 10px 0 32px; text-align: center">
          <img src="https://api.smtprelay.co/userfile/a18de9fc-4724-42f2-b203-4992ceddc1de/default-logo.png" width="380" height="46" alt="logo" border="0" style="height: auto;background: #F5F6F8;font-family: Open Sans;font-size: 15px;line-height: 15px;color: #555555;background-color: #F5F6F8;" bgcolor="#F5F6F8">
        </td>
      </tr>

      <!-- Header image -->
      <tr>
        <td>
          <img src="https://media.tenor.com/xsF2TKXuEZ8AAAAC/caveira-da-capoeira-break-dance.gif" width="640" height="" alt="alt_text" border="0" style="width: 100%; max-width: 640px; height: auto; margin: auto; display: block;" class="g-img">          
        </td>
      </tr>

      <!-- Section: email title -->
      <tr>
        <td style="padding: 48px 32px 20px; text-align: center; background-color: #ffffff;">
          <p class="header-text" style="height: auto; margin: 15px 0; background: #ffffff; font-family: Open Sans; text-align: center; font-size: 32px; line-height: 34px; color: #000000; background-color: #ffffff;">
            obg por se cadastrar men
          </p>
          <p style="height: auto; margin: 28px 0 15px; background: #ffffff; text-align: center; font-family: Open Sans; font-size: 15px; line-height: 27px; color: #5F5F5F; background-color: #ffffff;">
            Você está me ajudando a criar o BonanzApp!
            Se eu ficar rico, te dou 1 real.
          </p>
        </td>
      </tr>
      <td style="padding: 20px 32px 64px; text-align: center; background-color: #ffffff;">
        <!-- Button -->
        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" style="margin: auto; padding: 20px;">
          <tr>
            <td class="button-td button-td-primary" style="border-radius: 4px; background: #2e66ff;">
              <a class="button-a button-a-primary" href="#" style="background: #2e66ff; border: 1px solid #2e66ff; font-family: Open Sans; font-size: 16px; line-height: inherit; text-decoration: none; padding: 16px; color: #ffffff; display: block; border-radius: 4px;">
                Q butão pica men, ele n faz nada
              </a>
            </td>
          </tr>
        </table>
      </td>

      <!-- Section: columns -->
      <tr>
        <td style="padding: 64px 32px 0; text-align: center; background-color: #f9fafb;">
          <p class="header-text" style="height: auto; margin: 0; background: #f9fafb; font-family: Open Sans; font-size: 32px; line-height: 34px; color: #000000; background-color: #f9fafb;">
            Section: columns
          </p>
        </td>
      </tr>
      <tr>
        <td style="padding: 0 32px 32px; text-align: center; background-color: #f9fafb;">
          <p style="height: auto; margin: 4px 0px; background: #f9fafb; font-family: Open Sans; font-size: 15px; line-height: 27px; color: #5F5F5F; background-color: #f9fafb;">
            A layout with images, texts and links aligned vertically.
          </p>
        </td>
      </tr>

      <!-- Columns -->
      <tr>
        <td style="padding: 0 0 58px; background-color: #f9fafb;">
          <table role="presentation" class="grid" cellspacing="0" cellpadding="0" border="0" width="100%">
            <tr>
              <th valign="top" width="33.33%" class="stack-column-center mobile-gap">
                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                  <tr>
                    <td style="padding: 10px; text-align: center">
                      <img src="https://api.smtprelay.co/userfile/a18de9fc-4724-42f2-b203-4992ceddc1de/pexels-pixabay-417173.jpg" width="170" height="" alt="alt_text" border="0" style="width: 100%; max-width: 170px; height: auto; background: #f9fafb; font-family: Open Sans; font-size: 15px; line-height: 15px; color: #555555;">
                    </td>
                  </tr>
                  <tr>
                    <td style="font-family: Open Sans; font-size: 19px; line-height: 29px; color: #000000; padding: 0 10px 10px; text-align: center;" class="center-on-narrow">
                      <p class="column-header" style="margin: 0;">Small title</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-family: Open Sans; font-size: 15px; line-height: 27px; color: #555555; padding: 0 10px 10px; text-align: center;" class="center-on-narrow">
                      <p style="margin: 0 0 32px;">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor.</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-family: Open Sans; font-size: 15px; line-height: 27px; color: #5457FF; padding: 0 10px 10px; text-align: center;" class="center-on-narrow link-button">
                      <a class="button-a" href="#">Read more</a>
                    </td>
                  </tr>
                </table>
              </th>
              <th valign="top" width="33.33%" class="stack-column-center mobile-gap">
                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                  <tr>
                    <td style="padding: 10px; text-align: center">
                      <img src="https://api.smtprelay.co/userfile/a18de9fc-4724-42f2-b203-4992ceddc1de/pexels-brady-knoll-5409751.jpg" width="170" height="" alt="alt_text" border="0" style="width: 100%; max-width: 170px; height: auto; background: #f9fafb; font-family: Open Sans; font-size: 15px; line-height: 15px; color: #555555;">
                    </td>
                  </tr>
                  <tr>
                    <td style="font-family: Open Sans; font-size: 19px; line-height: 29px; color: #000000; padding: 0 10px 10px; text-align: center;" class="center-on-narrow">
                      <p class="column-header" style="margin: 0;">Small title</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-family: Open Sans; font-size: 15px; line-height: 27px; color: #555555; padding: 0 10px 10px; text-align: center;" class="center-on-narrow">
                      <p style="margin: 0 0 32px;">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor.</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-family: Open Sans; font-size: 15px; line-height: 27px; color: #5457FF; padding: 0 10px 10px; text-align: center;" class="center-on-narrow link-button">
                      <a class="button-a" href="#">Read more</a>
                    </td>
                  </tr>
                </table>
              </th>
              <th valign="top" width="33.33%" class="stack-column-center">
                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                  <tr>
                    <td style="padding: 10px; text-align: center">
                      <img src="https://api.smtprelay.co/userfile/a18de9fc-4724-42f2-b203-4992ceddc1de/pexels-pixabay-326058.jpg" width="170" height="" alt="alt_text" border="0" style="width: 100%; max-width: 170px; height: auto; background: #f9fafb; font-family: Open Sans; font-size: 15px; line-height: 15px; color: #555555;">
                    </td>
                  </tr>
                  <tr>
                    <td style="font-family: Open Sans; font-size: 19px; line-height: 29px; color: #000000; padding: 0 10px 10px; text-align: center;" class="center-on-narrow">
                      <p class="column-header" style="margin: 0;">Small title</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-family: Open Sans; font-size: 15px; line-height: 27px; color: #555555; padding: 0 10px 10px; text-align: center;" class="center-on-narrow">
                      <p style="margin: 0 0 32px;">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor. </p>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-family: Open Sans; font-size: 15px; line-height: 27px; color: #5457FF; padding: 0 10px 10px; text-align: center;" class="center-on-narrow link-button">
                      <a class="button-a" href="#">Read more</a>
                    </td>
                  </tr>
                </table>
              </th>
            </tr>
          </table>
        </td>
      </tr>

      <!-- Section: about the author -->
      <tr>
        <td style="padding: 64px 20px 32px; text-align: center; background: #ffffff; background-color: #ffffff;" bgcolor="#ffffff">
          <img src="https://api.smtprelay.co/userfile/a18de9fc-4724-42f2-b203-4992ceddc1de/author-default.png" width="120" height="120" alt="logo" border="0" style="height: auto; background: #ffffff; background-color: #ffffff;" bgcolor="#ffffff">
        </td>
      </tr>
      <tr>
        <td style="padding: 0 32x 0; text-align: center; background: #ffffff; background-color: #ffffff;" bgcolor="#ffffff">
          <p class="header-text" style="height: auto; margin: 15px 0; background: #ffffff; font-family: Open Sans; font-size: 31px; line-height: 34px; color: #000000; background-color: #ffffff;">
            Section: about the author
          </p>
        </td>
      </tr>
      <tr>
        <td style="padding: 20px 32px; text-align: center; background: #ffffff; background-color: #ffffff;" bgcolor="#ffffff">
          <p style="height: auto; margin: 0; background: #ffffff; font-family: Open Sans; font-size: 15px; line-height: 27px; color: #5F5F5F; background-color: #ffffff;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar lorem quis ante dapibus
            ullamcorper. Cras facilisis erat ornare nulla varius.
          </p>
        </td>
      </tr>
      <tr>
        <td style="background: #ffffff; background-color: #ffffff;" bgcolor="#ffffff">
          <img src="https://api.smtprelay.co/userfile/a18de9fc-4724-42f2-b203-4992ceddc1de/footer-default.png" width="640" height="" alt="alt_text" border="0" style="width: 100%; max-width: 640px; height: auto; margin: auto; display: block;" class="g-img">
        </td>
      </tr>

      <!-- Social -->
      <tr>
        <td class="footer" align="center" valign="top" style="padding: 50px 0 28px;">
          <table border="0" cellpadding="0" cellspacing="0" role="presentation">
            <tr>
              <td align="center" valign="top">
                <a href="#" target="_blank">
                  <img src="https://api.smtprelay.co/userfile/a18de9fc-4724-42f2-b203-4992ceddc1de/ro_sol_co_32_facebook2023-04-07T15_55_16.png" class="fadeimg" alt="Facebook" width="32" height="32" style="max-width: 32px;">
                </a>
              </td>
              <td align="center" valign="top" style="padding: 0 10px 0 20px;">
                <a href="#" target="_blank">
                  <img src="https://api.smtprelay.co/userfile/a18de9fc-4724-42f2-b203-4992ceddc1de/ro_sol_co_32_twitter2023-04-07T15_55_16.png" class="fadeimg" alt="Twitter" width="32" height="32" style="max-width: 32px;">
                </a>
              </td>
              <td align="center" valign="top" style="padding: 0 20px 0 10px;">
                <a href="#" target="_blank">
                  <img src="https://api.smtprelay.co/userfile/a18de9fc-4724-42f2-b203-4992ceddc1de/ro_sol_co_32_youtube2023-04-07T15_55_16.png" class="fadeimg" alt="You Tube" width="32" height="32" style="max-width: 32px;">
                </a>
              </td>
              <td align="center" valign="top">
                <a href="#" target="_blank">
                  <img src="https://api.smtprelay.co/userfile/a18de9fc-4724-42f2-b203-4992ceddc1de/ro_sol_co_32_linkedin2023-04-07T15_55_16.png" class="fadeimg" alt="Linked In" width="32" height="32" style="max-width: 32px;">
                </a>
              </td>
            </tr>
          </table>
        </td>
      </tr>

      <!-- Unsubscribe -->
      <tr>
        <td style="padding: 20px 32px 0px; text-align: center; background: #F5F6F8; background-color: #F5F6F8;" bgcolor="#F5F6F8">
          <p class="text-center small" style="height: auto; background: #F5F6F8; margin: 15px 0; font-family: Open Sans; font-size: 11px; line-height: 15px; color: #555555; background-color: #F5F6F8;">
            If you no longer wish to receive mail from us, you can <a href="{unsubscribe}" class="link-btn">unsubscribe</a>
          </p>
        </td>
      </tr>

      <!-- Account Address -->
      <tr>
        <td style="padding: 5px 32px 64px; text-align: center; background: #F5F6F8; background-color: #F5F6F8;" bgcolor="#F5F6F8">
          <p style="height: auto; margin: 0px; background: #F5F6F8; font-family: Open Sans; font-size: 11px; line-height: 15px; color: #555555; background-color: #F5F6F8;">
            {accountaddress}
          </p>
        </td>
      </tr>

    </table>

    <!--[if mso | IE]>
    </td>
    </tr>
    </table>
    <![endif]-->
  </center>'
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $elasticEmailUrl);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($emailParams));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    $responseData = json_decode($response, true);

    if (isset($responseData['success']) && $responseData['success']) {
        echo "E-mail de confirmação enviado com sucesso para " . $email;
    } elseif (isset($responseData['error'])) {
        echo "Erro ao enviar o e-mail de confirmação: " . $responseData['error'];
    } else {
        echo "Erro desconhecido ao enviar o e-mail de confirmação.";
    }
}

// Dados de conexão com o banco de dados
$servername = "localhost";
$username = "id21104048_admin";
$password = "Contarde1a10ehfoda!";
$dbname = "id21104048_admin";

// Conectar ao banco de dados
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar a conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Obter os valores enviados pelo formulário
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

// Inserir os valores no banco de dados
$sql = "INSERT INTO Cadastro (Nome, Telefone, Email) VALUES ('$nome', '$telefone', '$email')";

if (mysqli_query($conn, $sql)) {
    // Redirecionar para a página "index.html" após 1 segundo
    header("Refresh: 1; URL=index.html");
    echo "Dados salvos com sucesso no banco de dados! Redirecionando...";
} else {
    echo "Erro ao salvar os dados: " . mysqli_error($conn);
}

// Fechar a conexão com o banco de dados
mysqli_close($conn);

// Enviar o e-mail de confirmação
enviarEmailConfirmacao($nome, $email);

?>
