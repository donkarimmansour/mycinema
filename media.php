<?php

set_time_limit(0);
//php /home/mobilive/public_html/index.php

// require_once "includes/function/connect.php";
// $stmt = $db->prepare("SELECT  `id` ,`title` ,`description` FROM movies ORDER BY RAND() LIMIT 1");
// $stmt->execute();
// $stmtfetch = $stmt->fetch();


require("PHPMailer2/PHPMailerAutoload.php");
$mail = new PHPMailer();


    $mail->CharSet = "UTF-8";
    $mail->IsSMTP();
  //  $mail->SetLanguage("en");
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->SMTPKeepAlive = true; // SMTP connection will not close after each email sent, reduces SMTP overhead
    $mail->Username = "mmoneyblogs@gmail.com";
    $mail->Password = "Kmwr/@98";
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    $mail->Encoding = "8bit";
    $mail->SMTPDebug = 2;
    $mail->AddReplyTo("mmoneyblogs@gmail.com");
    $mail->From = "mmoneyblogs@gmail.com";
    $mail->FromName = "Earn Money Daily";
    $mail->IsHTML(true);
    $mail->AddAddress("don.karimmansour@gmail.com");
    //$mail->AddAddress("trigger@applet.ifttt.com");

    $mail->addStringAttachment(file_get_contents("https://images.unsplash.com/photo-1549740425-5e9ed4d8cd34?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80") ,"mobile_phone.png");

    $mail->AltBody = 'Karim Mansour';
    // $mail->Subject = '' . $stmtfetch["title"] . '';
    // $mail->Body = '<!DOCTYPE html>
    //              <html>
    //                 <head>
    //                 </head>
    //                 <body>
    //                     <h3><a title="cinima4u" href="https://cinima4u.com/movie.php?id=' . $stmtfetch["id"] . '" target="_blank"><strong>' . $stmtfetch["title"] . '</strong></a></h3>
                        
    //                        <p>&nbsp;</p>
    //                             <p>' . $stmtfetch["description"] . '</p>
    //                         <p>&nbsp;</p>

    //                         <p style="text-align: left;"><a title="cinima4u" href="https://cinima4u.com/movie.php?id=' . $stmtfetch["id"] . '" target="_blank">
    //                             <span style="text-decoration: underline;"><span style="color: #000080; text-decoration: underline;">Click To Watch</span>
    //                         </span></a></p>

    //                         <p style="text-align: left;"><span style="text-decoration: underline;">
    //                             <span style="color: #000080; text-decoration: underline;">#' . str_replace( " " , "_" ,$stmtfetch["title"])  . '</span>
    //                         </span></p>

    //                         <p style="text-align: left;"><span style="text-decoration: underline;">
    //                           <span style="color: #000080; text-decoration: underline;"><a href="https://cinima4u.com">https://cinima4u.com</a></span>
    //                         </span></p>

    //                         <p style="text-align: left;"><span style="text-decoration: underline;">
    //                             <span style="color: #000080; text-decoration: underline;">#cinima4u</span>
    //                         </span></p>
    //                     </body>
    //                 </html>' ;


    $mail->Subject = 'Textes linéaires non narratifs';
    $mail->Body = '<!DOCTYPE html>
                 <html>
                    <head>
                    </head>
                    <body>
                        <h3><a title="cinima4u" href="https://cinima4u.com/movie.php?id=" target="_blank"><strong>Textes linéaires non narratifs</strong></a></h3>
                        
                           <p>&nbsp;</p>
                                <p>Dans les textes linéaires non narratifs, le changement de paragraphe marque généralement :

                                    la composition du texte en termes d\'interlocution : c\'est ainsi que selon Valentin Volochinov — un des tout premiers linguistes à avoir défini le paragraphe argumentatif — « les paragraphes [...] sont analogues aux répliques d\'un dialogue. Il s\'agit [...] de dialogues affaiblis et transformés en énonciation monologue. À la base de la division du discours [...] en paragraphes [...], on trouve l\'ajustement aux réactions prévues [...] du lecteur » ;
                                    le désir de l\'auteur de mettre en avant un énoncé, et avec lui une idée ou une espèce (au sens classique d’unité de pensée) en particulier : il s\'agit d\'une forme d\'inter-titrage subliminal. Pratiquement n\'importe quelle phrase d\'un texte peut être placée en tête de paragraphe, pour lui donner sa couleur et son orientation6.</p>
                            <p>&nbsp;</p>

                            <p style="text-align: left;"><a title="cinima4u" href="https://cinima4u.com/movie.php?id=" target="_blank">
                                <span style="text-decoration: underline;"><span style="color: #000080; text-decoration: underline;">Click To Watch</span>
                            </span></a></p>

                            <p style="text-align: left;"><span style="text-decoration: underline;">
                                <span style="color: #000080; text-decoration: underline;">#vvvvv</span>
                            </span></p>

                            <p style="text-align: left;"><span style="text-decoration: underline;">
                              <span style="color: #000080; text-decoration: underline;"><a href="https://cinima4u.com">https://cinima4u.com</a></span>
                            </span></p>

                            <p style="text-align: left;"><span style="text-decoration: underline;">
                                <span style="color: #000080; text-decoration: underline;">#cinima4u</span>
                            </span></p>
                        </body>
                    </html>' ;

        if (!$mail->send()) {
            if (!$mail->isSendmail()) {

                if (!$mail->isQmail()) {
                    echo 'Unable to send email. Please try again.' . strtoupper($mail->ErrorInfo);

                } else {
                    echo 'Unable to send email. Please try again. qmail';
                }
            } else {
                echo 'Unable to send email. Please try again. sendmail';
            }
        } else {
            echo 'Your mail has been sent successfully.';
        }

?>