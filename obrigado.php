<?php
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $cnpj = $_POST['cnpj'];

  $mensagem = 'Nome: $nome <br>';
  $mensagem .= 'E-mail: $email <br>';
  $mensagem .= 'Telefone: $telefone <br>';
  $mensagem .= 'CNPJ: $cnpj <br>';

  require_once('class.phpmailer.php');
  $mailer = new PHPMailer();
  $mailer->IsSMTP();
  $mailer->IsHTML(true);
  $mailer->SMTPDebug = 1;
  $mailer->Port = 587; //Indica a porta de conexão para a saída de e-mails
  $mailer->Host = 'mail.dominio.com.br'; //smtp.dominio.com.br
  $mailer->SMTPAuth = true; //define se haverá ou não autenticação no SMTP
  $mailer->Username = 'app@grampola.com.br'; //Informe o e-mai o completo
  $mailer->Password = '*************'; //Senha da caixa postal
  $mailer->FromName = $assunto; //Nome que será exibido para o destinatário
  $mailer->From = 'contato@dominio.com.br'; //Obrigatório ser a mesma caixa postal indicada em "username"
  $mailer->AddAddress('contato@dominio.com.br','Empresa'); //Destinatários
  $mailer->Subject = 'E-mail do site';
  $mailer->Body = $mensagem;
  $mailer->Send();
  //print "Mensagem enviada com sucesso!";
?>
