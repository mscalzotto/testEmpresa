<?php

class HtmlElements {

    public static function openForm($id, $action, $method = 'post') {
        return print '<form id="'. $id .'" action="'. $action .'" method="'. $method .'">';
    }

    public static function closeForm() {
        return print '</form>';
    }

    public static function input($class = 'defaultInputClass', $type, $name = null, $placeholder = null, $value = null) {
        !is_null($class)? $class = 'class="'. $class . '"' : null;
        !is_null($placeholder)? $placeholder = 'placeholder="'. $placeholder .'"' : null;
        !is_null($value)? $value = 'value="'. $value .'"' : null;
        !is_null($name)? $name = 'name="'. $name .'"' : null;

        return print '<input type="'. $type .'" '. $name .' '. $placeholder .' '. $value .' '. $class .' />';
    }

    public static function nav(array $navElements) {
        $header  =  '<nav>';
        $header .=    '<ul>';
                        foreach ($navElements as $navName => $navLink) {
        $header .=          '<li class="navElement_' .  $navName . '"><a class="navLink_' . $navName . '"href="' . $navLink . '">' . $navName . '</a></li>';
                        }
        $header .=    '</ul>';
        $header .=  '</nav>';

        return print $header;
    }

    public static function select($db, $type, $class = 'defaultSelectClass', $name = 'defaultSelectName') {
        //Check if the entered type is valid
        $typesQuery = "SELECT * FROM puesto"; 
        $dbTypes = $db->query($typesQuery, PDO::FETCH_ASSOC);

        foreach ($dbTypes as $typeId => $dbType) {
            $types[] = $dbType['puesto'];
        }

        //If type is "empleado" build employee_type select and stop excecution
        if ($type === "empleado") {
            $select  = '<select class="'. $class .'" name="' . $name . '">';
            $select .=   '<option value="default">-- Seleccione ' . $type . '--</option>';
            
            if (isset($types) && $types != null) {
                foreach ($types as $typeId => $type) {
                    $typeId++;
                    $select .=   '<option value="'. $typeId .'">'. ucfirst($type) .'</option>';
                }
            }
    
            $select .= '</select>';
    
            return print $select;
        }

        //If $type is not employee and it isn't valid, throw an exception
        if (!isset($types) && !in_array($type, $types)) {
            throw new InvalidArgumentException('Parametro "type" invalido.');
        }

        //Fill the select element according $type value
        $idQuery = 'SELECT id_puesto FROM puesto WHERE puesto = "' . $type . '"';
        $idPuesto = $db->query($idQuery);
        
        if (!empty($idPuesto)) {
            $categoriesQuery = 'SELECT categoria FROM categoria WHERE id_puesto = "' . $idPuesto[0]['id_puesto'] . '"';
            $categories = $db->query($categoriesQuery);

            $select  = '<select class="'. $class .'" name="' . $name . '">';
            $select .=   '<option value="default">-- Seleccione ' . $type . '--</option>';

            foreach ($categories as $categoryId => $category) {
                $categoryId++;
                $select .=   '<option value="'. $categoryId .'">'. ucfirst($category['categoria']) .'</option>';
            }

            $select .= '</select>';
            
            return print $select;
        }

    }
}