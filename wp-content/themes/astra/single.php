<?php

/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra
 * @since 1.0.0
 */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if (astra_page_layout() == 'left-sidebar') : ?>

    <?php get_sidebar(); ?>

<?php endif ?>

<div id="primary" <?php astra_primary_class(); ?>>

    <?php astra_primary_content_top(); ?>

    <? php/* astra_content_loop(); */ ?>

    <?php
    // Obtener la fecha actual
    $current_date = date('Y-m-d');

    // Inicia el loop
    if (have_posts()) : while (have_posts()) : the_post();

            // Obtener la fecha de cierre del proceso
            $fecha_cierre = get_post_meta(get_the_ID(), 'process_deadline', true); ?>

            <!-- Tarjeta de información del post -->
            <div class="post-meta-card">
                <i class="fa fa-user"></i>
                <span class="author-name">Por <?php the_author(); ?></span>

                <i class="fa fa-calendar"></i>
                <span><?php the_time('d F, Y'); ?></span>

                <h1><?php the_title(); ?></h1>
                <div class="process-details">
                    <div><?php the_content(); ?>
                        <div class="archivo">
                            <?php
                            $archivo_url = get_post_meta(get_the_ID(), 'file_615', true);
                            if ($archivo_url) {
                                echo '<p><a href="' . esc_url($archivo_url) . '" download><strong>Descargar archivo</strong></a></p>';
                            } else {
                                echo '<p><strong>Archivo Adjunto:</strong> No disponible</p>';
                            }
                            ?>

                        </div>
                    </div>
                    <!--<h2>Características</h2>-->
                    <table class="process-table">
                        <tr>
                            <td><strong>Fecha de cierre</strong></td>
                            <td><?php echo esc_html($fecha_cierre ? $fecha_cierre : 'No especificada'); ?></td>
                        </tr>
                    </table>
                </div>

                <!-- Botón para mostrar el formulario -->
                <button id="apply-button" class="apply-button">Enviar Propuesta de Licitación</button>

                <!-- Formulario oculto inicialmente -->
                <div id="apply-form" class="apply-form" style="display:none;">
                    <?php echo do_shortcode('[contact-form-7 id="1cd0716" title="Aplicar a proceso"  html_id="apply-form"]'); ?>
                </div>
            </div>

            <!-- Añadir el script JavaScript -->
           <!-- <script>
                document.getElementById('apply-button').addEventListener('click', function() {
                    var form = document.getElementById('apply-form');
                    form.style.display = form.style.display === 'none' || form.style.display === '' ? 'block' : 'none';
                });
            </script>-->

            <!--Recordar borrar sino funciona-->
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var processTitle = '<?php echo esc_js(get_the_title()); ?>';
                    document.getElementById('apply-button').addEventListener('click', function() {
                        document.getElementById('process-title').value = processTitle;
                        var form = document.getElementById('apply-form');
                        form.style.display = form.style.display === 'none' || form.style.display === '' ? 'block' : 'none';
                    });
                });
            </script>



            <?php
            // Obtener los datos del post
            $post_id = get_the_ID();
            $titulo = get_the_title();
            $contenido = get_the_content();
            $fecha_creacion = get_the_date('Y-m-d H:i:s'); // Obtener la fecha de creación
            $archivo_url = get_post_meta(get_the_ID(), 'file_615', true);

            // Guardar los datos en la tabla "Historico de Procesos"
            global $wpdb;
            $table_name = $wpdb->prefix . 'historico_procesos';

            // Verificar si el proceso ya existe en el histórico
            $exists = $wpdb->get_var($wpdb->prepare(
                "SELECT COUNT(*) FROM $table_name WHERE post_id = %d",
                $post_id
            ));

            if ($exists == 0) {
                // Insertar solo si no existe en el histórico
                $wpdb->insert(
                    $table_name,
                    array(
                        'post_id' => $post_id,
                        'titulo' => $titulo,
                        'contenido' => $contenido,
                        'fecha_creacion' => $fecha_creacion, // Incluir la fecha de creación
                        'fecha_cierre' => $fecha_cierre,
                        'archivo_url' => $archivo_url,
                    ),
                    array(
                        '%d',
                        '%s',
                        '%s',
                        '%s',
                        '%s',
                        '%s'
                    )
                );
            }

            ?>
    <?php endwhile;
    endif; ?>

    <?php astra_primary_content_bottom(); ?>


</div><!-- #primary -->

<?php if (astra_page_layout() == 'right-sidebar') : ?>

    <?php get_sidebar(); ?>

<?php endif ?>


<?php get_footer(); ?>