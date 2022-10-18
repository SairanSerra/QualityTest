<?php

namespace App\helpers;

class Utils
{
    public static function retiraFormat($tipo = "", $string, $size = 0)
    {

        switch ($tipo) {
            case 'phone':
                $string = str_replace('(', '', $string);
                $string = str_replace(')', '', $string);
                $string = str_replace('-', '', $string);
                $string = str_replace(' ', '', $string);
                break;
            case 'cep':
                $string = str_replace('.', '', $string);
                $string = str_replace('-', '', $string);
                break;
            case 'cpf':
                $string = str_replace('.', '', $string);
                $string = str_replace('-', '', $string);
                break;
            case 'cnpj':
                $string = str_replace('.', '', $string);
                $string = str_replace('/', '', $string);
                $string = str_replace('-', '', $string);
                break;
            case 'rg':
                $string = str_replace('.', '', $string);
                $string = str_replace('-', '', $string);
                break;
            case 'moeda':
                if ($string != null) {
                    $string = str_replace('R$', '', $string);
                    $string = str_replace(',', '.', $string);
                } else {
                    $string = "0.00";
                }
                break;
            case 'moeda2':
                if ($string != null) {
                    $string = str_replace('R$', '', $string);
                    $string = str_replace('.', '', $string);
                    $string = str_replace(',', '.', $string);
                    $string = str_replace(' ', '', $string);
                    $string = str_replace(' ', '', $string);
                } else {
                    $string = "0.00";
                }
                break;
            case 'document':
                if ($size === 14) {
                    $string = str_replace('.', '', $string);
                    $string = str_replace('-', '', $string);
                } else {
                    $string = str_replace('.', '', $string);
                    $string = str_replace('-', '', $string);
                    $string = str_replace('/', '', $string);
                }
                break;
            case 'date':
                $string = explode('/', $string);
                $string = $string[2] . '-' . $string[1] . '-' . $string[0];
                break;
            case 'acentos':
                $comAcentos = array('à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ü', 'ú', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'O', 'Ù', 'Ü', 'Ú');
                $semAcentos = array('a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'y', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U');

                $string = str_replace($comAcentos, $semAcentos, $string);
                break;
            default:
                $string = 'É ncessário definir um tipo(fone, cep, cpg, cnpj, rg)';
                break;
        }

        return $string;
    }
}