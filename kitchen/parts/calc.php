
<a name="calc"></a>

<section class="calc">
	<div class="container">
		<div class="row align-items-end">
			<div class="col-lg-6">
				<h2 class="calc__title">
					<?php the_field('calc__title'); ?>
				</h2>
				<p class="calc__subtitle">
					<?php the_field('calc__subtitle'); ?>
				</p>
			</div>
			<div class="col-lg-5 offset-lg-1">
				<h2 class="calc__title calc__title2">
					<?php the_field('calc__title2'); ?>
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 relative">
				<form action="" class="calc--wrapper">
					<div class="calc__items--wrapper">
						<p class="calc__name">
							Какое изделие Вам нужно:
						</p>
						<div class="calc__item calc__item1">
								<label for="calc1" class="calc--checked">
										<input type="radio" checked="checked" name="style" class="calc__radio calc__radio1" id="calc1">
								</label>
								<p class="voting__text">
									Столешница на кухню
								</p>
						</div>
						<div class="calc__item calc__item1">
								<label for="calc2">
										<input type="radio" name="style" class="calc__radio calc__radio1" id="calc2">
								</label>
								<p class="voting__text">
										Столешница в ванную
								</p>
						</div>
						<div class="calc__item calc__item1">
								<label for="calc3">
										<input type="radio" name="style" class="calc__radio calc__radio1" id="calc3">
								</label>
								<p class="voting__text">
										Подоконник
								</p>
						</div>
						<div class="calc__item calc__item1">
								<label for="calc4">
										<input type="radio" name="style" class="calc__radio calc__radio1" id="calc4">
								</label>
								<p class="voting__text">
								Другое изделие
								</p>
						</div>
					</div>
					<div class="calc__items--wrapper">
							<p class="calc__name">
									Выберите материал
							</p>
							<div class="calc__item calc__item2">
									<label for="calc11">
											<input type="radio" name="material" class="calc__radio" id="calc11">
									</label>
									<p class="voting__text">
											Кварцевый агломерат
									</p>
							</div>
							<div class="calc__item calc__item2">
									<label for="calc12">
											<input type="radio" name="material" class="calc__radio" id="calc12">
									</label>
									<p class="voting__text">
											Акриловый камень
									</p>
							</div>
							<div class="calc__item calc__item2" >
									<label for="calc13" class="calc--checked">
											<input type="radio" checked="checked" name="material" class="calc__radio" id="calc13">
									</label>
									<p class="voting__text">
											Керамика
									</p>
							</div>
							<div class="calc__item calc__item2">
									<label for="calc14">
											<input type="radio" name="material" class="calc__radio" id="calc14">
									</label>
									<p class="voting__text">
											Натуральный мрамор
									</p>
							</div>
							<div class="calc__item calc__item2">
									<label for="calc15">
											<input type="radio" name="material" class="calc__radio" id="calc15">
									</label>
									<p class="voting__text">
											HPL(ламинат)
									</p>
							</div>
							<div class="calc__item calc__item2">
									<label for="calc16">
											<input type="radio" name="material" class="calc__radio" id="calc16">
									</label>
									<p class="voting__text">
											Стекло
									</p>
							</div>
					</div>
					<div class="calc__items--wrapper">
							<p class="calc__name">
									Укажите длинну, м
							</p>
							<div class="calc__number--wrapper">
									<input type="number" max="3" min="0" class="calc__number" onkeyup="this.value = this.value.replace(/[^\d]/g,'');">
							</div>
					</div>
					<div class="calc__items--wrapper">
							<p class="calc__name">
									Что нужно еще:
							</p>
							<div class="calc__item calc__item4">
									<label for="calc20">
											<input type="checkbox" name="tech" class="calc__radio" id="calc20">
									</label>
									<p class="voting__text">
											Мойка
									</p>
							</div>
							<div class="calc__item calc__item4">
									<label for="calc21">
											<input type="checkbox" name="tech" class="calc__radio" id="calc21">
									</label>
									<p class="voting__text">
											Смеситель
									</p>
							</div>
							<div class="calc__item calc__item4">
									<label for="calc22">
											<input type="checkbox" name="tech" class="calc__radio" id="calc22">
									</label>
									<p class="voting__text">
											Варочная панель
									</p>
							</div>
							<div class="calc__item calc__item4">
									<label for="calc23" class="calc--checked">
											<input type="checkbox" checked="checked" name="tech" class="calc__radio" id="calc23">
									</label>
									<p class="voting__text">
											Другое
									</p>
							</div>
							<div class="calc__item calc__item4">
									<label for="calc24">
											<input type="checkbox" name="tech" class="calc__radio" id="calc24">
									</label>
									<p class="voting__text">
											Ничего
									</p>
							</div>
					</div>
				</form>
				<div class="calc__back-square"></div>
			</div>
			<div class="col-lg-5 offset-lg-1">
				<div class="calc__golden--wrapper">
					<p class="calc__golden-text">
						Примерная стоимость
					</p>
					<p class="calc__price">
						<span>0</span> руб.
					</p>
					<img class="calc__coins" src="<?php echo get_template_directory_uri(); ?>/assets/img/coins.png" alt="">
				</div>
				<p class="calc__attraction">
					<?php the_field('calc__attraction'); ?>
				</p>
				<button class="calc__button" onclick="yaCounter28420846.reachGoal('hochu_click'); return true;">
					<?php the_field('calc__btn'); ?>
				</button>
				<p class="calc__sub-button">
					<?php the_field('calc__sub-button'); ?>
				</p>
			</div>
		</div>
	</div>
</section>