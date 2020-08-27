
<section class="contacts relative">
	<a name="contacts"></a>
	<div class="container">
			<div class="row">
					<div class="col-lg-6">
							<h2 class="contacts__title">
									Контакты.
							</h2>
							<p class="contacts__text">Адрес нашего салона:</p>
							<p class="contacts__text contacts__text--decor">
								<a href="#">
									г. Москва, поселение Московский, 22-ой км. Киевского шоссе, Бизнес-Парк “Румянцево”, 
									переход между Домовладением 4 Строение 1 Корпус А и Домовладением 4 
									Строение 2 Корпус В, 3 этаж.
								</a>
							</p>
							<div class="contacts__img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts.jpg" alt="">
							</div>
							<p class="contacts__text">
									<?php the_field('time-work', 'option'); ?>
							</p>
							<a href="tel:<?php the_field('tel_url', 'option'); ?>" class="contacts__link contacts__phone" onclick="yaCounter28420846.reachGoal('tel'); return true;">
									<?php the_field('tel', 'option'); ?>
							</a>
							<a href="mailto:<?php the_field('mail', 'option'); ?>" class="contacts__link" onclick="yaCounter28420846.reachGoal('mail'); return true;">
									<p><?php the_field('mail', 'option'); ?></p>
							</a>
							<div class="contacts__social">
									<div class="contacts__icon">
											<a href="<?php the_field('instagram', 'option'); ?>" target="_blank">
													<i class="fab fa-instagram-square"></i>
											</a>
									</div>
									<div class="contacts__icon ">
											<a href="<?php the_field('facebook', 'option'); ?>" target="_blank">
													<i class="fab fa-facebook-square"></i>
											</a>
									</div>
							</div>
					</div>
					<div class="col-lg-6 contacts__map--column">
						<div class="contacts__map contacts__moskow">
								<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A1e2a0e2b10c60da34e38c94ec04155c9719b7f9e7e922d9fe8775dcffaad153e&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
						</div>
					</div>
			</div>
	</div>
</section>