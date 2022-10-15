<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content">

	<?php

	$archive_title    = '';
	$archive_subtitle = '';

	if ( is_search() ) {
		global $wp_query;

		$archive_title = sprintf(
			'%1$s %2$s',
			'<span class="color-accent">' . __( 'Search:', 'twentytwenty' ) . '</span>',
			'&ldquo;' . get_search_query() . '&rdquo;'
		);

		if ( $wp_query->found_posts ) {
			$archive_subtitle = sprintf(
				/* translators: %s: Number of search results. */
				_n(
					'We found %s result for your search.',
					'We found %s results for your search.',
					$wp_query->found_posts,
					'twentytwenty'
				),
				number_format_i18n( $wp_query->found_posts )
			);
		} else {
			$archive_subtitle = __( 'We could not find any results for your search. You can give it another try through the search form below.', 'twentytwenty' );
		}
	} elseif ( is_archive() && ! have_posts() ) {
		$archive_title = __( 'Nothing Found', 'twentytwenty' );
	} elseif ( ! is_home() ) {
		$archive_title    = get_the_archive_title();
		$archive_subtitle = get_the_archive_description();
	}

	if ( $archive_title || $archive_subtitle ) {
		?>

		<header class="archive-header has-text-align-center header-footer-group">

			<div class="archive-header-inner section-inner medium">

				<?php if ( $archive_title ) { ?>
					<h1 class="archive-title"><?php echo wp_kses_post( $archive_title ); ?></h1>
				<?php } ?>

				<?php if ( $archive_subtitle ) { ?>
					<div class="archive-subtitle section-inner thin max-percentage intro-text"><?php echo wp_kses_post( wpautop( $archive_subtitle ) ); ?></div>
				<?php } ?>

			</div><!-- .archive-header-inner -->

		</header><!-- .archive-header -->

		<?php
	}

	if ( have_posts() ) {

		$i = 0;

		while ( have_posts() ) {
			$i++;
			if ( $i > 1 ) {
				echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
			}
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		}
	} elseif ( is_search() ) {
		?>

		<div class="no-search-results-form section-inner thin">

			<?php
			get_search_form(
				array(
					'aria_label' => __( 'search again', 'twentytwenty' ),
				)
			);
			?>

		</div><!-- .no-search-results -->

		<?php
	}
	?>

	<?php get_template_part( 'template-parts/pagination' ); ?>

</main><!-- #site-content -->
<hr>
<div style="text-align:center; width:80%; margin:auto">
<?php
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$otros = '';
	if (preg_match("/Edg/i", $useragent)){
	echo "Estás navegando desde <b>EDGE</b>";
	}elseif (preg_match("/KHTML like Gecko/i", $useragent) || preg_match("/Safari/i",
	$useragent)){
	echo "Estás navegando desde <b>CHROME</b>";
	}else if (preg_match("/20100101/i", $useragent)) {
	echo "Estás navegando desde <b>FIREFOX</b>";
	}elseif (preg_match("/OPR/i", $useragent)) {
	echo "Estás navegando desde <b>OPERA</b>";
	}elseif (preg_match("/Mobile/i", $useragent)) {
	echo "Estás navegando desde <b>SAFAR</b>I";
	}else {
	echo "Estás navegando desde <b>OTRO NAVEGADOR</b>";
	}

	echo " <br><b>STATUS CODE</b> <br>";
	echo $_SERVER['REDIRECT_STATUS'];

	echo " <br><b>SERVIDOR</b> <br>";
	echo $_SERVER['SERVER_SOFTWARE'];

	echo " <br><b>SERVER_PORT</b> <br>";
	echo $_SERVER['SERVER_PORT'];

	echo " <br><b>HTTP_HOST</b> <br>";
	echo $_SERVER['HTTP_HOST'];

	?>
	<?php

$userA= $_SERVER['HTTP_USER_AGENT'];
print("<br><br>Navegador:".$userA);

if (preg_match("/Firefox/i", $userA)) {
	echo "<br><h3>Te encuentras navegando con Firefox</h3>";
} else {
	echo "<br><h3>Estas navegando en otro navaegador diferente Firefox.</h3>";
}

		//Probar estudiantes para colocar en formato tabla.
$arrayEstudiantes = array('Javier','Pedro','Ricardo','Ana','Edy','Cecilia','Roberth');

print("<h1 align='center'>Listado de Estudiantes DSwAC</h1>");
echo('<table align="center" border=1 style="background:yellow">');
echo '<tr>';   
echo '<th>Dato</th>';
echo '<th>Detalle</th>';
echo '</tr>'; 

if (file_exists('Estudiantes.xml')) {
	$xml = simplexml_load_file('Estudiantes.xml');
	print_r($xml);
		
	print("<br><br>Probando con foreach<br>");

	foreach ($xml->estudiante as $key => $estud) {
					echo "Estudiante: ".$estud->apellido." con cedula :".$estud->cedula ."<br>";    
			}

} else {
	exit('No se puede abrir XML');
}

	$xml = simplexml_load_file('Estudiantes.xml');
	foreach ($xml->estudiante->children() as $key => $value) {
		echo '<tr>';
		echo "<td> $key </td>";
		echo '<td>'.$value.'</td>';
		echo '</tr>';
	}
	echo '</table>';
?>
</div>
<hr>

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
