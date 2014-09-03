<div id="sidebar">

    <?php
        // Mostramos Lista Redes Sociales (Opciones del Tema - Lista Redes Sociales)
        get_template_part('inc/modulo', 'lista_redes');

        // Mostramos el último post de la categoría "Foto Destacada"
        get_template_part('inc/modulo', 'foto_destacada');

        // Mostramos Banners Sidebar (Opciones del Tema - Banners Sidebar)
        get_template_part('inc/modulo', 'banners_sidebar');
    ?>

</div>