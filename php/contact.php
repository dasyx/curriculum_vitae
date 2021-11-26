<?php

ini_set("SMTP", "smtp.free.fr");
ini_set("smtp_port", "25");

$firstname = $name = $email = $phone = $message = "";
$firstnameError = $nameError = $emailError = $phoneError = $messageError = "";
$isSuccess = false;
$emailTo = "david.levast27@gmail.com";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = verifyInput($_POST["firstname"]);
    $name = verifyInput($_POST["name"]);
    $email = verifyInput($_POST["email"]);
    $phone = verifyInput($_POST["phone"]);
    $message = verifyInput($_POST["message"]);
    $isSuccess = true;
    $emailText = "";

    if (empty($firstname)) {
        $firstnameError = "Je veux connaître votre prénom !";
        $isSuccess = false;
    } else {
        $emailText .= "FirstName: $firstname\n";
    }
    if (empty($name)) {
        $nameError = "Je veux connaître votre nom aussi !";
        $isSuccess = false;
    } else {
        $emailText .= "LastName: $name\n";
    }
    if (!isEmail($email)) {
        $emailError = "Ceci ne correspond pas à un email valide, même joueur joue encore !";
        $isSuccess = false;
    } else {
        $emailText .= "Email: $email\n";
    }
    if (!isPhone($phone)) {
        $phoneError = "Allô Houston ? Votre numéro doit ressembler à 0123456789";
        $isSuccess = false;
    } else {
        $emailText .= "Phone: $phone\n";
    }
    if (empty($message)) {
        $messageError = "Pardon je n'ai pas saisi votre message, car vous ne l'avez pas saisi !";
        $isSuccess = false;
    } else {
        $emailText .= "Message: $message\n";
    }
    if ($isSuccess) {
        # Envoi de l'email si aucun message d'erreur lors de la saisie utilisateur
        $headers = "From: $firstname $name <$email>\r\nReply-To: $email";
        mail($emailTo, "Un message de votre site", $emailText, $headers);
        # Remise à zéro des champs de saisie lors de l'envoi du mail
        $firstnameError = $nameError = $emailError = $phoneError = $messageError = "";
    }
}
function isPhone($var)
{

    return preg_match("/^(0)[1-9](\d{2}){4}$/", $var);
}
function isEmail($var)
{

    return filter_var($var, FILTER_VALIDATE_EMAIL);
}
function verifyInput($var)
{

    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
}
?>

<section id="form">
    <div class="container">
        <div class="divider"></div>
        <div class="heading">
            <h2>Discutons un peu !</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-lg-offset-1">
                <form id="contact-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="firstname">Prénom<span class="blue"> *</span></label>
                            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" value="<?php echo $firstname; ?>">
                            <p class="comments"><?php echo $firstnameError; ?></p>
                        </div>
                        <div class="col-md-6">
                            <label for="name">Nom<span class="blue"> *</span></label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom" value="<?php echo $name; ?>">
                            <p class="comments"><?php echo $nameError; ?></p>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email<span class="blue"> *</span></label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Votre email" value="<?php echo $email; ?>">
                            <p class="comments"><?php echo $emailError; ?></p>
                        </div>
                        <div class="col-md-6">
                            <label for="phone">Téléphone</label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre téléphone" value="<?php echo $phone; ?>">
                            <p class="comments"><?php echo $phoneError; ?></p>
                        </div>
                        <div class="col-md-12">
                            <label for="name">Message<span class="blue"> *</span></label>
                            <textarea id="message" name="message" class="form-control" placeholder="Votre message" rows="4"><?php echo $message; ?></textarea>
                            <p class="comments"><?php echo $messageError; ?></p>
                        </div>
                        <div class="col-md-12">
                            <p class="blue"><strong>* Ces informations sont requises</strong></p>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="form_button" value="Envoyer">
                        </div>
                    </div>
                    <p class="thanks" style="display:
                        <?php
                        if ($isSuccess) {
                            echo 'block';
                        } else {
                            echo 'none';
                        }

                        ?>">Votre message a bien été envoyé. Merci de m'avoir contacté !
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>