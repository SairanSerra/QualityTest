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
    public static function formatar($tipo = "", $string, $size = 10)
    {
        $string = mb_ereg_replace("[^0-9]", "", $string);

        switch ($tipo) {
            case 'fone':
                if ($size === 10) {
                    $string = '(' . substr($tipo, 0, 2) . ') ' . substr($tipo, 2, 4)
                        . '-' . substr($tipo, 6);
                } elseif ($size === 11) {
                    $string = '(' . substr($tipo, 0, 2) . ') ' . substr($tipo, 2, 5)
                        . '-' . substr($tipo, 7);
                }
                break;
            case 'cep':
                $string = substr($string, 0, 5) . '-' . substr($string, 5, 3);
                break;
            case 'documento':
                if (strlen($string) === 11) {
                    $string = substr($string, 0, 3) . '.' . substr($string, 3, 3) .
                        '.' . substr($string, 6, 3) . '-' . substr($string, 9, 2);
                } else {
                    $string = substr($string, 0, 2) . '.' . substr($string, 2, 3) .
                        '.' . substr($string, 5, 3) . '/' .
                        substr($string, 8, 4) . '-' . substr($string, 12, 2);
                }
                break;
            case 'cpf':
                $string = substr($string, 0, 3) . '.' . substr($string, 3, 3) .
                    '.' . substr($string, 6, 3) . '-' . substr($string, 9, 2);
                break;
            case 'cnpj':
                $string = substr($string, 0, 2) . '.' . substr($string, 2, 3) .
                    '.' . substr($string, 5, 3) . '/' .
                    substr($string, 8, 4) . '-' . substr($string, 12, 2);
                break;
            case 'rg':
                $string = substr($string, 0, 2) . '.' . substr($string, 2, 3) .
                    '.' . substr($string, 5, 3);
                break;
            default:
                $string = 'É necessário definir um tipo(fone, cep, cpg, cnpj, rg)';
                break;
        }

        return $string;
    }
}