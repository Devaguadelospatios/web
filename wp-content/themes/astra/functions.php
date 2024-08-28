<?php

/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define('ASTRA_THEME_VERSION', '4.7.3');
define('ASTRA_THEME_SETTINGS', 'astra-settings');
define('ASTRA_THEME_DIR', trailingslashit(get_template_directory()));
define('ASTRA_THEME_URI', trailingslashit(esc_url(get_template_directory_uri())));

/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define('ASTRA_EXT_MIN_VER', '4.7.0');

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

define('ASTRA_PRO_UPGRADE_URL', astra_get_pro_url('https://wpastra.com/pro/', 'dashboard', 'free-theme', 'upgrade-now'));
define('ASTRA_PRO_CUSTOMIZER_UPGRADE_URL', astra_get_pro_url('https://wpastra.com/pro/', 'customizer', 'free-theme', 'upgrade'));

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';

/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if (is_admin()) {
    require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/lib/docs/class-astra-docs-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-wp-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

/* Setup API */
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-api-init.php';

if (is_admin()) {
    /**
     * Admin Menu Settings
     */
    require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
    require_once ASTRA_THEME_DIR . 'admin/class-astra-admin-loader.php';
    require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';
}

/**
 * Metabox additions.
 */
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/posts-structures/class-astra-post-structures.php';
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/surecart/class-astra-surecart.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-starter-content.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/scroll-to-top/class-astra-scroll-to-top.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if (version_compare(PHP_VERSION, '5.4', '>=')) {
    require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
    require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
    require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymous functions.
if (version_compare(PHP_VERSION, '5.3', '>=')) {
    require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';


// publicar proceso abierto

add_filter('cf7_2_post_status_procesos_abiertos', 'publish_new_procesos_abiertos', 10, 3);
/**
 * Function to change the post status of saved/submitted posts.
 * @param string $status the post status, default is 'draft'.
 * @param string $ckf7_key unique key to identify your form.
 * @param array $submitted_data complete set of data submitted in the form as an array of field-name=>value pairs.
 * @return string a valid post status ('publish'|'draft'|'pending'|'trash')
 */
function publish_new_procesos_abiertos($status, $ckf7_key, $submitted_data)
{
    /*The default behaviour is to save post to 'draft' status.  If you wish to change this, you can use this filter and return a valid post status: 'publish'|'draft'|'pending'|'trash'*/
    return 'publish';
}

// Programar evento para cambiar el estado de procesos a 'draft' después de la fecha de cierre.
if (!wp_next_scheduled('revisar_procesos_abiertos')) {
    wp_schedule_event(time(), 'hourly', 'revisar_procesos_abiertos');
}

add_action('revisar_procesos_abiertos', 'cambiar_procesos_a_borrador');

/**
 * Función para cambiar el estado de los procesos a 'draft' cuando la fecha de cierre ha pasado.
 */
function cambiar_procesos_a_borrador()
{
    // Obtener la fecha actual
    $current_date = date('Y-m-d');

    // Argumentos para la consulta de procesos abiertos
    $args = array(
        'post_type' => 'procesos_abiertos', // post
        'post_status' => 'publish',
        'meta_query' => array(
            array(
                'key' => 'process_deadline',
                'value' => $current_date,
                'compare' => '<',
                'type' => 'DATE'
            )
        )
    );

    // Consulta de procesos que necesitan ser cambiados a borrador
    $query = new WP_Query($args);

    // Si hay procesos que cumplirán con la condición
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $post_id = get_the_ID();
            // Cambiar el estado del proceso a 'draft'
            wp_update_post(array(
                'ID' => $post_id,
                'post_status' => 'draft'
            ));
        }
    }

    // Restaurar post data después del loop
    wp_reset_postdata();
}

// Registrar y encolar la hoja de estilos personalizada
function custom_single_styles()
{
    if (is_single()) {
        wp_enqueue_style('single-styles', get_template_directory_uri() . '/single-styles.css');
    }
}
add_action('wp_enqueue_scripts', 'custom_single_styles');


//Funcion para agregar los iconos
function load_font_awesome()
{
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'load_font_awesome');



/*Eliminar tabla notificaciones

function eliminar_tabla_notificaciones() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'notificaciones';
    $wpdb->query("DROP TABLE IF EXISTS $table_name");
}

add_action('after_setup_theme', 'eliminar_tabla_notificaciones');
*/

// funcion para crear la Tabla en la Base de Datos
function crear_tabla_notificaciones()
{
    global $wpdb;
    $tabla = $wpdb->prefix . 'notificaciones';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $tabla (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        fecha_fijacion date NOT NULL,
        nombre_propietario varchar(255) NOT NULL,
        codigo_usuario varchar(255) NOT NULL,
        tipo_acto varchar(255) NOT NULL,
        radicado varchar(255),
        notificacion varchar(255) NOT NULL,
        enlace varchar(255),
        fecha_desfijacion date NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

add_action('after_setup_theme', 'crear_tabla_notificaciones');


//funcion para guardar los datos en la bd
function guardar_datos_contact_form_7($cf7)
{
    error_log('Se ha ejecutado guardar_datos_contact_form_7 para el formulario con ID: ' . $cf7->id());

    if ($cf7->id() == '3378') {
        error_log('El ID del formulario coincide correctamente.');

        $submission = WPCF7_Submission::get_instance();

        if ($submission) {
            error_log('Submission obtenida correctamente.');
            $data = $submission->get_posted_data();
            $uploaded_files = $submission->uploaded_files();
            global $wpdb;

            $table_name = $wpdb->prefix . 'notificaciones';
            if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
                error_log('La tabla no existe: ' . $table_name);
                return;
            }

            $upload_dir = wp_upload_dir();
            $upload_base = $upload_dir['basedir'];

            // Función auxiliar para manejar la copia de archivos
            function handle_file_upload($file, $upload_base)
            {
                if (is_array($file)) {
                    $file = $file[0]; // Usa el primer archivo si es un array
                }
                $filename = basename($file);
                $destination = $upload_base . '/' . $filename;
                if (copy($file, $destination)) {
                    error_log('Archivo copiado a: ' . $destination);
                    return esc_url_raw(wp_upload_dir()['baseurl'] . '/' . $filename);
                } else {
                    error_log('Error al mover archivo: ' . $file);
                    return '';
                }
            }

            // Procesar cada archivo
            $enlace_url = isset($uploaded_files['enlace']) ? handle_file_upload($uploaded_files['enlace'], $upload_base) : '';

            error_log('Enlace URL: ' . $enlace_url);


            // Inserción en la base de datos
            $inserted = $wpdb->insert(
                $table_name,
                array(
                    'fecha_fijacion' => strtoupper(sanitize_text_field($data['fecha-fijacion'])),
                    'nombre_propietario' => strtoupper(sanitize_text_field($data['nombre-propietario'])),
                    'codigo_usuario' => strtoupper(sanitize_text_field($data['codigo-usuario'])),
                    'tipo_acto' => strtoupper(sanitize_text_field($data['tipo-acto'])),
                    'radicado' => strtoupper(sanitize_text_field($data['radicado'])),
                    'notificacion' => strtoupper(sanitize_text_field($data['notificacion'])),
                    'enlace' => $enlace_url,
                    'fecha_desfijacion' => strtoupper(sanitize_text_field($data['fecha-desfijacion']))
                )
            );

            if ($inserted === false) {
                error_log('Error en la inserción desde el formulario: ' . $wpdb->last_error);
            } else {
                error_log('Inserción desde el formulario exitosa.');
            }
        } else {
            error_log('No se pudo obtener la submission.');
        }
    } else {
        error_log('ID de formulario incorrecto. ID actual: ' . $cf7->id());
    }
}

add_action('wpcf7_mail_sent', 'guardar_datos_contact_form_7');



// funcion para mostrar en el front
function mostrar_notificaciones()
{
    global $wpdb;
    $tabla = $wpdb->prefix . 'notificaciones';
    $fecha_actual = date('Y-m-d'); // Obtener la fecha actual

    //fecha_desfijacion menor que la fecha actual
    $resultados = $wpdb->get_results($wpdb->prepare(
        "SELECT * FROM $tabla WHERE fecha_desfijacion >= %s",
        $fecha_actual
    ), ARRAY_A);

    if (!$resultados) {
        return '<p>No hay notificaciones disponibles.</p>';
    }

    $output = '<style>
    .notificaciones-tabla {
        width: 100%;
        border-collapse: collapse;
        table-layout: auto; /* Cambia a auto para que se adapte mejor */
    }
    .notificaciones-tabla th, .notificaciones-tabla td {
        background-color: #FF5A00;
        color: white;
        padding: 10px;
        text-align: left;
        font-size: 14px;
        border: 1px solid #ddd;
        word-wrap: break-word;
    }
    .notificaciones-tabla td {
        background-color: #ffffff;
        color: #000000;
        font-size: 12px;
    }
    .notificaciones-tabla a {
        color: #000000;
        text-decoration: none;
    }
    .notificaciones-tabla a:hover {
        color: #FF5A00;
        text-decoration: none;
    }
    .icono-descarga {
        margin-right: 5px;
    }

    /* Ajustes para pantallas pequeñas */
    @media screen and (max-width: 768px) {
        .notificaciones-tabla th, .notificaciones-tabla td {
            display: block;
            width: 100%;
            text-align: right;
        }
        .notificaciones-tabla th {
            text-align: left;
            background-color: #FF5A00;
        }
        .notificaciones-tabla td:before {
            content: attr(data-title); /* Utiliza el atributo data-title para mostrar el título de la columna */
            float: left;
            font-weight: bold;
        }
        .notificaciones-tabla tr {
            margin-bottom: 10px;
            display: block;
            border: 1px solid #ddd;
        }
    }
    </style>';

    $output .= '<table class="notificaciones-tabla">';
    $output .= '<tr>
                    <th>Fecha de fijación</th>
                    <th>Nombre del propietario</th>
                    <th>Código de usuario</th>
                    <th>Tipo de acto</th>
                    <th>Radicado</th>
                    <th>Notificación</th>
                    <th>Enlace</th>
                    <th>Fecha de desfijación</th>
                </tr>';

    foreach ($resultados as $fila) {
        $output .= '<tr>';
        $output .= '<td>' . strtoupper(esc_html($fila['fecha_fijacion'])) . '</td>';
        $output .= '<td>' . strtoupper(esc_html($fila['nombre_propietario'])) . '</td>';
        $output .= '<td>' . strtoupper(esc_html($fila['codigo_usuario'])) . '</td>';
        $output .= '<td>' . strtoupper(esc_html($fila['tipo_acto'])) . '</td>';
        $output .= '<td>' . strtoupper(esc_html($fila['radicado'])) . '</td>';
        $output .= '<td>' . strtoupper(esc_html($fila['notificacion'])) . '</td>';

        if (!empty($fila['enlace'])) {
            $output .= '<td><a href="' . esc_url($fila['enlace']) . '" download>
                            <span class="icono-descarga">📄PDF</span>
                        </a></td>';
        } else {
            $output .= '<td>No disponible</td>';
        }

        $output .= '<td>' . strtoupper(esc_html($fila['fecha_desfijacion'])) . '</td>';
        $output .= '</tr>';
    }

    $output .= '</table>';
    return $output;
}

add_shortcode('mostrar_notificaciones', 'mostrar_notificaciones');


/******************************************TABLA HISTORICA DE PROCESOS****************************************************************** */
function crear_tabla_historico_procesos() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'historico_procesos';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        post_id bigint(20) NOT NULL,
        titulo text NOT NULL,
        contenido longtext NOT NULL,
        fecha_creacion datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        fecha_cierre date DEFAULT '0000-00-00' NOT NULL,
        archivo_url text,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

add_action('after_setup_theme', 'crear_tabla_historico_procesos');


function generar_tabla_procesos($resultados) {
    $output = '<style>
        .procesos-tabla {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .procesos-tabla th, .procesos-tabla td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        .procesos-tabla th {
            background-color: #FF5A00; /* Encabezado color naranja */
            color: white;
            font-size: 14px;
        }
        .procesos-tabla td {
            background-color: #ffffff;
            color: #000000;
            font-size: 12px;
        }
        .procesos-tabla a {  
            color: #000000;
            text-decoration: none;
        }
        .procesos-tabla a:hover {
            color: #FF5A00;
        }
    </style>';

    $output .= '<table class="procesos-tabla">';
    $output .= '<tr>
                    <th>Fecha de Creación</th>
                    <th>Nombre del Proceso</th>
                    <th>Descripción</th>
                    <th>Fecha de Cierre</th>
                    <th>Archivo</th>
                </tr>';

    foreach ($resultados as $fila) {
        $fecha_creacion = date('Y-m-d', strtotime($fila['fecha_creacion']));
        $output .= '<tr>';
        $output .= '<td>' . esc_html($fecha_creacion) . '</td>';
        $output .= '<td>' . strtoupper(esc_html($fila['titulo'])) . '</td>';
        $output .= '<td>' . esc_html($fila['contenido']) . '</td>';
        $output .= '<td>' . esc_html($fila['fecha_cierre']) . '</td>';

        if (!empty($fila['archivo_url'])) {
            $output .= '<td><a href="' . esc_url($fila['archivo_url']) . '" download>
                        <span class="icono-descarga">📄 Descargar</span>
                    </a></td>';
        } else {
            $output .= '<td>No disponible</td>';
        }

        $output .= '</tr>';
    }

    $output .= '</table>';

    return $output;
}

function mostrar_historico_procesos() {
    global $wpdb;
    $tabla = $wpdb->prefix . 'historico_procesos';
    $resultados = $wpdb->get_results("SELECT * FROM $tabla", ARRAY_A);

    $output = '<input type="text" id="busqueda-titulo" placeholder="Buscar por título" style="width: 100%; padding: 10px; margin-top: 20px;">';
    $output .= '<div id="tabla-procesos">';

    // Generar la tabla completa de procesos con los resultados iniciales
    $output .= generar_tabla_procesos($resultados);

    $output .= '</div>';

    $output .= '<script>
                    jQuery(document).ready(function($) {
                        $("#busqueda-titulo").on("keyup", function() {
                            var titulo = $(this).val();

                            $.ajax({
                                url: "' . admin_url('admin-ajax.php') . '",
                                type: "POST",
                                data: {
                                    action: "buscar_procesos",
                                    titulo: titulo
                                },
                                success: function(response) {
                                    if (response.success) {
                                        $("#tabla-procesos").html(response.data);
                                    } else {
                                        $("#tabla-procesos").html("<p>No se encontraron coincidencias.</p>");
                                    }
                                }
                            });
                        });
                    });
                </script>';

    return $output;
}

add_shortcode('mostrar_historico_procesos', 'mostrar_historico_procesos');

function buscar_procesos() {
    global $wpdb;
    $tabla = $wpdb->prefix . 'historico_procesos';
    $titulo = sanitize_text_field($_POST['titulo']);

    $resultados = $wpdb->get_results($wpdb->prepare(
        "SELECT * FROM $tabla WHERE titulo LIKE %s",
        '%' . $wpdb->esc_like($titulo) . '%'
    ), ARRAY_A);

    if (!empty($resultados)) {
        $output = generar_tabla_procesos($resultados);
        wp_send_json_success($output);
    } else {
        wp_send_json_error('No se encontraron coincidencias.');
    }
}

add_action('wp_ajax_buscar_procesos', 'buscar_procesos');
add_action('wp_ajax_nopriv_buscar_procesos', 'buscar_procesos');

 



/******************************************TABLA HISTORICA NOTIFICACIONES************************************************************ */


function buscar_notificaciones_ajax()
{
    global $wpdb;
    $tabla = $wpdb->prefix . 'notificaciones';
    $radicado_busqueda = isset($_POST['radicado']) ? sanitize_text_field($_POST['radicado']) : '';

    // Si no hay nada en el campo de búsqueda, devuelve todas las notificaciones
    if (empty($radicado_busqueda)) {
        $resultados = $wpdb->get_results("SELECT * FROM $tabla", ARRAY_A);
    } else {
        $resultados = $wpdb->get_results($wpdb->prepare(
            "SELECT * FROM $tabla WHERE radicado LIKE %s",
            '%' . $wpdb->esc_like($radicado_busqueda) . '%'
        ), ARRAY_A);
    }

    if (!$resultados) {
        wp_send_json_error('No se encontraron coincidencias.');
        wp_die();
    }

    // Generar la tabla con los resultados filtrados utilizando la función que mantiene los estilos
    $output = generar_tabla_notificaciones($resultados);

    wp_send_json_success($output);
    wp_die();
}

add_action('wp_ajax_buscar_notificaciones', 'buscar_notificaciones_ajax');
add_action('wp_ajax_nopriv_buscar_notificaciones', 'buscar_notificaciones_ajax');

function generar_tabla_notificaciones($resultados)
{
    $output = '<style>
        .notificaciones-tabla {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
            margin-top: 50px;
        }
        .notificaciones-tabla th, .notificaciones-tabla td {
            width: 12.5%;
            background-color: #FF5A00;
            color: white;
            padding: 10px;
            text-align: left;
            font-size: 14px;
            border: 1px solid #ddd;
            word-wrap: break-word;
        }
        .notificaciones-tabla td {
            background-color: #ffffff;
            color: #000000;
            font-size: 12px;
        }
        .notificaciones-tabla a {  
            color: #000000;
            text-decoration: none;
        }
        .notificaciones-tabla a:hover {
            color: #FF5A00;
            text-decoration: none;
        }
        .icono-descarga {
            margin-right: 5px;
        }
    </style>';

    $output .= '<table class="notificaciones-tabla">';
    $output .= '<tr>
                    <th>Fecha de fijación</th>
                    <th>Nombre del propietario</th>
                    <th>Código de usuario</th>
                    <th>Tipo de acto</th>
                    <th>Radicado</th>
                    <th>Notificación</th>
                    <th>Enlace</th>
                    <th>Fecha de desfijación</th>
                </tr>';

    foreach ($resultados as $fila) {
        $output .= '<tr>';
        $output .= '<td>' . strtoupper(esc_html($fila['fecha_fijacion'])) . '</td>';
        $output .= '<td>' . strtoupper(esc_html($fila['nombre_propietario'])) . '</td>';
        $output .= '<td>' . strtoupper(esc_html($fila['codigo_usuario'])) . '</td>';
        $output .= '<td>' . strtoupper(esc_html($fila['tipo_acto'])) . '</td>';
        $output .= '<td>' . strtoupper(esc_html($fila['radicado'])) . '</td>';
        $output .= '<td>' . strtoupper(esc_html($fila['notificacion'])) . '</td>';

        if (!empty($fila['enlace'])) {
            $output .= '<td><a href="' . esc_url($fila['enlace']) . '" download>
                            <span class="icono-descarga">📄PDF</span>
                        </a></td>';
        } else {
            $output .= '<td>No disponible</td>';
        }

        $output .= '<td>' . strtoupper(esc_html($fila['fecha_desfijacion'])) . '</td>';
        $output .= '</tr>';
    }

    $output .= '</table>';

    return $output;
}


function mostrar_historico_notificaciones()
{
    global $wpdb;
    $tabla = $wpdb->prefix . 'notificaciones';
    $resultados = $wpdb->get_results("SELECT * FROM $tabla", ARRAY_A);

    $output = '<input type="text" id="busqueda-radicado" placeholder="Buscar por radicado">';
    $output .= '<div id="tabla-notificaciones">';

    // Llamar a la función que genera la tabla completa de notificaciones con estilos
    $output .= generar_tabla_notificaciones($resultados);

    $output .= '</div>';

    $output .= '<script>
                    jQuery(document).ready(function($) {
                        $("#busqueda-radicado").on("keyup", function() {
                            var radicado = $(this).val();

                            $.ajax({
                                url: "' . admin_url('admin-ajax.php') . '",
                                type: "POST",
                                data: {
                                    action: "buscar_notificaciones",
                                    radicado: radicado
                                },
                                success: function(response) {
                                    if (response.success) {
                                        $("#tabla-notificaciones").html(response.data);
                                    } else {
                                        $("#tabla-notificaciones").html("<p>No se encontraron coincidencias.</p>");
                                    }
                                }
                            });
                        });
                    });
                </script>';

    return $output;
}

add_shortcode('mostrar_historico_notificaciones', 'mostrar_historico_notificaciones');
