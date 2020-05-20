# SMS API

Ceci est un petit guide pour envoyer un sms à travers notre API.
pour plus d'infos sur nos services  [CONSULTER NOTRE SITE](https://sms.coursesroom.com/)

# Comment ca marche?

- Téléchargez le fichier **SmsSender.php** 
- Mettez ce fichier dans votre projet (A la racine par exemple)
- Inclure ce fichier à l'intérieure de vos fichiers dans lesquels vous voulez 
effectuer des envoi de sms grace à la fonction:

           
        require_once ("SmsSender.php"); // le fichier courant est dans le meme repertoire si non precisez bien le schemin

- utilisez la fonction  send() en faisant ceci en remplacant tous les parametres:

         SmsSender::send(VOTRE_API_KEY,"TITRE DU SMS","229xxxxxx","texte de votre sms");
            //ou
         //  echo SmsSender::send(VOTRE_API_KEY,"TITRE DU SMS","229xxxxxx","texte de votre sms");//pour avoir le retour de l'envoi
         
 Vous pouvez consulter le fichier  **SenderExemple.php** pour voir un exemple d'envoi
     
  
 Merci
 
 [Me suivre sur twitter](https://twitter.com/KBanigante)
 
 [CONSULTER NOTRE SITE](https://sms.coursesroom.com/)