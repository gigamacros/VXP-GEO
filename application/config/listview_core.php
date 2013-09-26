<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['theme'] = "default";

$config['core'] = array(
    'table' => array(
    # lista de campos que se muestran en la tabla
    'fields' => array(),

    # lista de campos que se pueden ocultar
    'hidden_fields' => array(),

    # nombre de campo que actúa como clave principal
    'p_key' => null,

    # atribut HTML Table (class, id, style dll)
    'attr' => null,

    # opción de activar / desactivar la selección múltiple, 
    # que permite al usuario seleccionar filas de múltiples registros
    # que más tarde se puede eliminar del mismo
    'multi_select' => array(
        'active' => true,
        'attr' => array('style' => 'width:10px;'),
        'form' => array(
            'action' => "",
            "attr" => array('class' => "formdata"),
            "checkbox" => array(
                'check_all' => array('class' => 'checkall', 'name' => 'check_all', 'value' => ""),
                'check_item' => array('class' => 'check_item', 'name' => 'check_item', 'value' => "")
            )
        )
    ),

    # opción de activar / desactivar numeración automática en una fila de la tabla
    'numbering' => array(
    'active' => true,
    'label' => 'No',
    'attr' => array('style' => 'width:10px;')
    ),

    # método de clasificación
    # por: nombre del campo que se utilizará para ordenar
    # orden: ASC|DESC
    'sort' => array('by' => null, 'order' => 'desc'),

    # Acción adicional a la tabla (Edit, Delete)
    'action'	=> array(
        'attr' => array('style' => 'width:40px;'),
        'position' => 'first', #last | first | none
        'merge' => true,
        'label' => 'Action',
        'links'	=> array(
            'edit' => array('link_point' => 'href', 'attr' => array('title' => 'Editar')),
            'delete' => array('link_point' => 'href', 'attr' => array('title' => 'Eliminar', 'onclick' => "javascript:return confirm('¿Estás seguro de que quiere eliminar estos datos?')"))
        )
    ),

    # el número de filas que se mostrarán en una sola página
    'per_page' => 20,

    # el número total de registros
    'total_rows' => 0,

    # mysql query que más tarde se demostró que una fila de tabla
    'query' => null,

    # Nombre del controlador
    # si se deja en blanco se buscará automáticamente
    'class_path' => "",

    # opción si la tabla no se creará la cabecera de la tabla <th>
    'no_header' => false,

    # tabla de direcciones URL que aparece
    'base_url' => '',

    # dirección view
    'view' => '_listview/_container'
    ),
    'show_record' => array(
        'options' => array(20 => "20", 50 => "50", 100 => "100"),
        'total_rows' => 0
    ),
    'pagination' => array(
        'base_url' => "",
        'total_rows' => 0,
        'per_page' => 20,
        'uri_segment' => 3
    ),
    'search_form' => array(
        'filters' => null,
        'base_url' => "",
        "data" => array()	
    )
);

/* End of file listview_core.php */
/* Location: ./application/config/listview_core.php */