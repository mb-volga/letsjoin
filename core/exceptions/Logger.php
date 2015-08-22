<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Logs
 *
 * @author Ислам
 */
define('LOG_FILE', __DIR__ . '/../../administration/log');

class Logger 
{
    
    /**
     * 
     * @param type $data <p>Массив данных для записи</p>
     * <table>
     * <tr>
     * <td><b><i>$data[code]</b></i></td>
     * <td>Код ошибки</td>
     * </tr>
     * 
     * <tr>
     * <td><b><i>$data[file]</b></i></td>
     * <td>Файл с ошибкой</td>
     * </tr>
     * 
     * <tr>
     * <td><b><i>$data[line]</b></i></td>
     * <td>Строка ошибки</td>
     * </tr>
     * 
     * <tr>
     * <td><b><i>$data[msg]</b></i></td>
     * <td>Сообщение ошибки</td>
     * </tr>
     * 
     * <tr>
     * <td><b><i>$data[previous]</b></i></td>
     * <td>Предыдущее исключение, если имеется или NULL в противном случае</td>
     * </tr>
     *
     * <tr>
     * <td><b><i>$data[traceAsString]</b></i></td>
     * <td>Трассировка ошибок в виде строки</td>
     * </tr>
     * 
     * </table>
     * 
     * 
     * @param type $filename <p>Имя файла</p>
     * @param type $flag 
     * 
     * <table>
     * 
     * <tr>
     * <td><b><i>FILE_APPEND</b></i></td>
     * <td>Если файл filename уже существует, данные будут дописаны в конец файла вместо того, чтобы его перезаписать. По умолчанию</td>
     * </tr>
     * 
     * <tr>
     * <td><b><i>FILE_USE_INCLUDE_PATH</b></i></td>
     * <td>Ищет filename в подключаемых директориях. Подробнее смотрите директиву include_path</td>
     * </tr>
     * 
     * <tr>
     * <td><b><i>LOCK_EX</b></i></td>
     * <td>Получить эксклюзивную блокировку на файл на время записи</td>
     * </tr>
     * 
     * </table>
     * 
     */
    public static function writeLogs($data = array(), $flag = FILE_APPEND)
    {
        $filename = LOG_FILE . '/logs.txt';
        $error_string = "\n". date('j.m.y, G:i ');
        
        ksort($data);
        foreach ($data as $key => $value) {
            if (is_array($value) ) continue;
            $error_string .= " $key: $value ";
        }
        
        return file_put_contents( $filename, $error_string, $flag );
    }
}
