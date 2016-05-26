<?php get_header(); ?>

<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

<div class="section-title">

    <div class="container">

        <div class="row">

            <div class="span12">

                <h1 class="title">Error 404</h1>

            </div>

        </div>

    </div>

</div>


<main>

	<div class="container">

		<div class="row-tight">

			<div class="span12">

        <h3>Strony nie znaleziono</h3>

        <p>

          Przepraszamy ale strona, której szukasz (<span style="opacity:0.7;"><?= $actual_link; ?></span>) nie została odnaleziona. Sprawdź, czy adres URL nie zawiera błędów lub wróć na <a href="<?= SITE_URL; ?>">stronę główną</a>.

        </p>

			</div>

		</div>

	</div>

</main>


<?php get_footer(); ?>
