<?php


class SmsSender{
    /**
     * cette fonction permet d'envoyer un sms à un numero de telephone
     * @param $api_key est votre cle API obtenu  chez le fournisseur de service (https://sms.coursesroom.com  pour plus d'infos)
     * @param $from une chaine de caractère qui apparaitra en TITRE chez le recpteur du sms
     * @param $to le numero de téléphoen (au format internationnal) auquel vous voulez envoyer le sms
     * @param $message le contenu du sms
     */
     function send($api_key,$from,$to,$message){

         $url="https://sms.coursesroom.com/sms";
         $url="http://localhost:4002/sms";


         $ch = curl_init( $url );

         $payload = json_encode( array( "sender_key"=>$api_key,
             "from"=>$from,
             "to"=>$to,
             "body"=>$message) );
         curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
         curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

         curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

         $result = curl_exec($ch);
         curl_close($ch);

        return $result;
    }

    /**
     * Check your current credit or request for account creation
     */
    function chechCredit($api_key=null,$phone=null,$firstname=null,$lastname=null,$mail=null){

        $url="https://sms.coursesroom.com/sms";
        //$url="http://localhost:4002/users";




        if ($api_key!=null)
        {

            $ch = curl_init( $url ."/key/".$api_key);
            curl_setopt( $ch );
        }
        else
        {
            $ch = curl_init( $url );
            $payload = json_encode( array(
                "phone"=>$phone,
                "mail"=>$mail,
                "firstname"=>$firstname,
                "lastname"=>$lastname) );
            curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
        }


        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }

}

