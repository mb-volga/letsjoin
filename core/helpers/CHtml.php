<?php

/*
 * button
 * link
 * img
 * input
 */

/**
 * Класс-хелпер. Предназначен для шаблонизации html разметки
 *
 * @author Ислам
 */
class CHtml 
{
    /**
     * @param type $text Текст ссылки
     * @param type $url URL адрес
     * @param type $htmlOptions Аттрибуты
     * @return type
     */
    public static function link($text, $url ='#', $htmlOptions = array())
    {
        if($text !== '' )
        {
            $htmlOptions['href'] = self::normalizeURL($url);
            return self::openTag('a', $htmlOptions, $text);
        }
    }
    
    /**
     * 
     * @param string $text Текст кнопки
     * @param array $htmlOptions
     * @return string
     */
    public static function button($text, $htmlOptions = array())
    {
        if($text !== '' )
        {
            return self::openTag('button', $htmlOptions, $text);
        }
    }
    
    /**
     * Возвращает тег <option>$text</option>
     * @param string $text
     * @param array $htmlOptions
     * @return type
     */
    public static function option( $text, $htmlOptions = array() )
    {
        if($text !== '')
        {
            return self::openTag( 'option', $htmlOptions, $text );
        }
    }

    /**
     * 
     * @param type $src
     * @param string $htmlOptions
     * @return type
     */
    public static function img($src ='#', $htmlOptions = array())
    {
        if($src !== '' )
        {
            $htmlOptions['src'] = CApp::app()->dirApp.'/images'.$src;
            return self::openTag('img', $htmlOptions);
        }
    }
    
    /**
     * Возвращает html элемент <input type=submit>
     * @param type $value
     * @param type $htmlOptions
     * @return type
     */
    public static function inputSubmit($value ='#', $htmlOptions = array())
    {
        if(!$value !== '')
        {
            $htmlOptions['type'] = 'submit';
            $htmlOptions['value'] = $value;
            return self::openTag('input', $htmlOptions);
        }
    }
    
    /**
     * Возвращает html элемент <input type=button>
     * @param type $value
     * @param type $htmlOptions
     * @return type
     */
    public static function inputButton($value ='#', $htmlOptions = array())
    {
        if(!$value !== '')
        {
            $htmlOptions['type']='button';
            $htmlOptions['value'] = $value;
            return self::openTag('input', $htmlOptions);
        }
    }

     
    /**
     * Возвращает html элемент <input type=checkbox>
     * @param type $value
     * @param type $htmlOptions
     * @return type
     */
    public static function inputCheckbox($value ='#', $htmlOptions = array())
    {
        if(!$value !== '')
        {
            $htmlOptions['type']='checkbox';
            $htmlOptions['value'] = $value;
            return self::openTag('input', $htmlOptions);
        }
    }
   
    
    /**
     * Возвращает html элемент <input type=radio>
     * @param type $value
     * @param type $htmlOptions
     * @return type
     */
    public static function inputRadio($value ='#', $htmlOptions = array())
    {
        if(!$value !== '')
        {
            $htmlOptions['type']='radio';
            $htmlOptions['value'] = $value;
            return self::openTag('input', $htmlOptions);
        }
    }
  
    
    /**
     * Возвращает html элемент <input type=reset>
     * @param type $value
     * @param type $htmlOptions
     * @return type
     */
    public static function inputReset($value ='#', $htmlOptions = array())
    {
        if(!$value !== '')
        {
            $htmlOptions['type']='reset';
            $htmlOptions['value'] = $value;
            return self::openTag('input', $htmlOptions);
        }
    }

    /**
     * Возвращает html элемент <input>
     * @param type $value
     * @param type $htmlOptions
     * @return type
     */
    public static function input($value ='#', $htmlOptions = array())
    {
        if(!$value !== '')
        {
            $htmlOptions['value'] = $value;
            return self::openTag('input', $htmlOptions);
        }
    }

    
    /**
     * 
     * @param type $value
     * @param type $htmlOptions
     * @return type
     */
    public static function inputText($htmlOptions = array())
    {
        $htmlOptions['type'] = 'text';
        return self::openTag('input', $htmlOptions);
    }
    
    /**
     * 
     * @param array $htmlOptions
     * @return type
     */
    public static function inputPassword($htmlOptions = array())
    {
        $htmlOptions['type'] = 'text';
        return self::openTag('input', $htmlOptions);
    }

    /**
     * 
     * Возвращает корректную ссылку
     * @param type $href
     * @return type
     */
    private static function normalizeURL($href)
    {
        return CApp::app()->dirApp . '/' . $href;
    }
    
    /**
     * 
     * @param string $tag
     * @param array $htmlOptions
     * @param boolean $content
     * @return string
     */
    private static function openTag($tag, $htmlOptions=array(), $content=false)
    {
        $htmlCode = '<' . $tag .' '. self::Options($htmlOptions) . self::closeTag($tag, $content);
        return $htmlCode;
    }

    /**
     * 
     * @param string $tag
     * @param boolean $content
     * @return string htmlCode
     */
    private static function closeTag($tag, $content=false)
    {
        $htmlCode = $content ? '>'. $content .'</'. $tag . '>' : ' />' ;
        return $htmlCode;
    }
    
    /**
     * 
     * @param array $htmlOptions
     * @return string
     */
    private static function Options($htmlOptions = array())
    {
        is_array($htmlOptions) ? $htmlOptions : (array) $htmlOptions;
        $htmlCode = '';
        
        foreach ($htmlOptions as $key => $value) {
            $htmlCode .= $key .'="' . $value . '" ';
        }
        
        return $htmlCode;
    }
}
