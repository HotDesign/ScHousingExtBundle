<?php

namespace HotDesign\ScHousingExtBundle\Config;

/**
 * Clase estática que se encarga de hacer un manejo de los tipos de operaciones
 * 
 */
class HousingType {

    private static $types = array(
        '1' => array(
            'label' => 'Venta',
        ),
        '2' => array(
            'label' => 'Alquiler',
        ),
        '3' => array(
            'label' => 'Venta/Alquiler',
        ),
        '4' => array(
            'label' => 'Alquilada',
        ),
        '5' => array(
            'label' => 'Vendida',
        ),
        '6' => array(
            'label' => 'A confirmar',
        ),
        '7' => array(
            'label' => 'Proyecto',
        ),
        '8' => array(
            'label' => 'En construcción',
        ),
        '9' => array(
            'label' => 'Finalizada',
        ),
    );
    private static $id_default = 5;

    public static function getChoices() {
        $output = array();
        foreach (self::$types as $k => $curr)
            $output[$k] = $curr['label'];
        return $output;
    }

    public static function getHousingTypeName($id) {
        if (isset(self::$types[$id]['label'])) {
            return self::$types[$id]['label'];
        }
        return false;
    }

    public static function getDefaultHousingType() {
        return self::$types[self::id_default];
    }

    public static function getIdDefault() {
        return self::$id_default;
    }

}