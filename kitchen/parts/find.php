
<section class="find">
	<a name="projects"></a>
	<div class="container d-flex find__container">
		<div class="find__title--wrapper">
			<h2 class="find__title">
				<?php the_field('projects_title'); ?>
			</h2>
		</div>
		<div class="find__tabs--wrapper">

			<p class="find__all find__tab--active">
				Материалы
			</p>
			<p class="find__tab find__tab--classic">
				Кварцевый агломерат
			</p>
			<p class="find__tab find__tab--provans">
				Акриловый камень
			</p>
			<p class="find__tab find__tab--modern">
				Керамика
			</p>
			<p class="find__tab find__tab--neoclassic">
				Натуральный мрамор
			</p>
			<p class="find__tab find__tab--scandinavian">
				HPL(ламинат)
			</p>
			<p class="find__tab find__tab--loft">
				Стекло
			</p>

			<div class="find__slider">

				<div class="find__slide find__sub-slider classic">
					<div class="find__sub-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/find1.jpg" alt="">
						<div class="find__grid--wrapper">
							<div class="find__text--grid">
								<?php the_field('кварцевый_агломерат'); ?>
							</div>
							<p class="find__grid-title">
								Кварцевый...
							</p>
						</div>
						<div class="find__line">
							<p class="find__name">
								Кварцевый...
							</p>
							<p class="find__link">
								Описание
							</p>
						</div>
					</div>
				</div>

				<div class="find__slide find__sub-slider provans">
						<div class="find__sub-slide">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/find2.jpg" alt="">
								<div class="find__grid--wrapper">
										<div class="find__text--grid">
											<?php the_field('акриловый_камень'); ?>
										</div>
										<p class="find__grid-title">
												Акриловый...
										</p>
								</div>
						<div class="find__line">
								<p class="find__name">
										Акриловый...
								</p>
								<p class="find__link">
										Описание
								</p>
						</div>
						</div>
				</div>

				<div class="find__slide find__sub-slider modern">
						<div class="find__sub-slide">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/find3.png" alt="">
								<div class="find__grid--wrapper">
										<div class="find__text--grid">
											<?php the_field('керамика'); ?>
										</div>
										<p class="find__grid-title">
												Керамика
										</p>
								</div>
						<div class="find__line">
								<p class="find__name">
										Керамика
								</p>
								<p class="find__link">
										Описание
								</p>
						</div>
						</div>
				</div>

				<div class="find__slide find__sub-slider neoclassic">
					<div class="find__sub-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/find4.png" alt="">
						<div class="find__grid--wrapper">
							<div class="find__text--grid">
								<?php the_field('натуральный_мрамор'); ?>
							</div>
							<p class="find__grid-title">
								Мрамор
							</p>
						</div>
						<div class="find__line">
							<p class="find__name">
								Мрамор
							</p>
							<p class="find__link">
								Описание
							</p>
						</div>
					</div>
				</div>

				<div class="find__slide find__sub-slider scandinavian">
					<div class="find__sub-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/find5.jpg" alt="">
						<div class="find__grid--wrapper">
							<div class="find__text--grid">
								<?php the_field('hplламинат'); ?>
							</div>
							<p class="find__grid-title">
								Мрамор
							</p>
						</div>
						<div class="find__line">
							<p class="find__name">
								Мрамор
							</p>
							<p class="find__link">
								Описание
							</p>
						</div>
					</div>
				</div>

				<div class="find__slide find__sub-slider loft">
					<div class="find__sub-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/find6.jpg" alt="">
						<div class="find__grid--wrapper">
							<div class="find__text--grid">
								<?php the_field('стекло'); ?>
							</div>
							<p class="find__grid-title">
								Стекло
							</p>
						</div>
						<div class="find__line">
							<p class="find__name">
								Стекло
							</p>
							<p class="find__link">
								Описание
							</p>
						</div>
					</div>
				</div>

			</div>

			</div>
	</div>
</section>