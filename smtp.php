<?php


if(!isset($_POST['name']) ||
!isset($_POST['email']) ||
!isset($_POST['telephone']) ||
!isset($_POST['comments'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

require_once('phpmailer/class.phpmailer.php');
include_once('phpmailer/class.smtp.php');
 
$correo = new PHPMailer();

$correo->IsSMTP();

$correo->SMTPAuth = true;

$correo->SMTPSecure = 'tls';

$correo->Host = "smtp.gmail.com";

$correo->Port = 587;

$correo->Username = "daylanchavarriaucr@gmail.com";

$correo->Password = "dachp94gmail";

//$correo->SetFrom("daylanchavarriaucr@gmail.com", "Mi Codigo PHP");
$correo->SetFrom($_POST['email'], $_POST['name']);

$correo->AddReplyTo($_POST['email'], $_POST['name']);

$correo->AddAddress("daylanchavarriaucr@gmail.com", "APROASUR");

$correo->Subject = "Consulta del cliente: ".$_POST['name'] ; 

$correo->MsgHTML("Mensaje: <br/><br/><strong>".$_POST['comments']."</strong>" . "<br/><br/> Número de Teléfono del Cliente: " . $_POST['telephone']); //mensaje a enviar

if (!$correo->Send()) {
    echo "Hubo un error: " . $correo->ErrorInfo;
} else {
    echo "Mensaje enviado con exito.";
    require 'index.php';
    echo '<!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Muchas gracias '.$_POST['name'].", el mensaje fue enviado</h4>
        </div> 
      </div>
      ";
}
  

        
