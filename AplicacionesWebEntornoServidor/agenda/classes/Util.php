<?php

class Util {

    static function encriptar($cadena, $coste = 10) {
        $opciones = array(
            'cost' => $coste
        );
        return password_hash($cadena, PASSWORD_DEFAULT, $opciones);
    }

    static function enviarCorreo ($destino, $asunto, $mensaje) {
        require_once 'clases/vendor/autoload.php';
        $cliente = new Google_Client();
        $cliente->setApplicationName(Constantes::APLICACIONAPIGMAIL);
        $cliente->setAccessType('offline');
        $cliente->setAccessToken(file_get_contents('_token_/token.conf'));
        if ($cliente->getAccessToken()) {
            $service = new Google_Service_Gmail($cliente);
            try {
                $mail = new PHPMailer();
                $mail->CharSet = "UTF-8";
                $mail->From = Constantes::CORREO;
                $mail->FromName = Constantes::ALIAS;
                $mail->AddAddress($destino);
                $mail->AddReplyTo($origen, $alias);
                $mail->Subject = $asunto;
                $mail->Body = $mensaje;
                $mail->preSend();
                $mime = $mail->getSentMIMEMessage();
                $mime = rtrim(strtr(base64_encode($mime), '+/', '-_'), '=');
                $mensaje = new Google_Service_Gmail_Message();
                $mensaje->setRaw($mime);
                $service->users_messages->send('me', $mensaje);
                return true;
            } catch (Exception $e) {
                return false;
            }
        } else {
            return false;
        }
    }

    static function renderHtmlSelect(array $array, $name, $valor = null) {
        $html = '<select name="' . $name . '">';
        foreach ($array as $key => $value) {
            $selected = '';
            if ($valor == $key) {
                $selected = 'selected="selected"';
            }
            $html .= '<option ' . $selected . 'value=' . $key . '>' . $value . '</option>';
        }
        $html .= '</select>';
        return $html;
    }

    static function renderSelectEstadoCivil($name, $valor = null){
        $array = array(
            "" => "",
            1 => 'soltero',
            2 => 'casado',
            3 => 'divorciado',
            4 => 'viudo',
            5 => 'de hecho',
            6 => 'otro'
        );
        return self::renderHtmlSelect($array, $name, $valor);
    }

    static function varDump($valor){
        return '<pre>' . var_export($valor, true) . '</pre>';   
    }

    static function verificarClave($claveSinEncriptar, $claveEncriptada) {
        return password_verify($claveSinEncriptar, $claveEncriptada);
    }
}
