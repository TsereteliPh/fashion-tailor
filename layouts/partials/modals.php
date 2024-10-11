<?php
	$privacy_url = get_privacy_policy_url();

	if ( is_archive() ) {
		$page_title = get_the_archive_title();
	} else {
		$page_title = get_the_title();
	}
?>

<div class="modal modal--success" id="success">
	<div class="modal__info">
		<div class="title modal__title">Спасибо!</div>

		<div class="modal__text">Мы получили вашу заявку и успешно её обработали! Наши специалисты свяжутся с вами в ближайшее время.</div>
	</div>
</div>

<div class="modal modal--callback" id="callback">
	<div class="modal__info">
		<div class="title modal__title">Заказать звонок</div>

		<div class="modal__text">Заполните форму и наши специалисты свяжутся с вами в ближайшее время.</div>
	</div>

	<form method="POST" class="modal__form" name="Звонок">
		<input type="text" class="input modal__input" name="client_name" placeholder="ФИО" required>

		<input type="tel" class="input modal__input" name="client_tel" placeholder="+7 (999) 999-99-99" required>

		<div class="modal__policy">
			Нажимая кнопку, вы соглашаетесь с
			<a href="<?php echo $privacy_url; ?>">политикой персональных данных</a>
		</div>

		<button class="btn modal__submit" type="submit">Отправить</button>

		<input type="text" class="hidden" name="page_request" value="<?php echo $page_title; ?>">

		<?php wp_nonce_field( 'Звонок', 'modal-callback-nonce' ); ?>
	</form>
</div>

<div class="modal modal--question" id="question">
	<div class="modal__info">
		<div class="title modal__title">Задать вопрос</div>

		<div class="modal__text">Задайте вопрос и наши специалисты ответят на него в ближайшее время.</div>
	</div>

	<form method="POST" class="modal__form" name="Вопрос">
		<input type="text" class="input modal__input" name="client_name" placeholder="ФИО" required>

		<input type="email" class="input modal__input" name="client_email" placeholder="Email" required>

		<textarea class="input modal__textarea" name="client_message" placeholder="Вопрос" required></textarea>

		<div class="modal__policy">
			Нажимая кнопку, вы соглашаетесь с
			<a href="<?php echo $privacy_url; ?>">политикой персональных данных</a>
		</div>

		<button class="btn modal__submit" type="submit">Задать вопрос</button>

		<input type="text" class="hidden" name="page_request" value="<?php echo $page_title; ?>">

		<?php wp_nonce_field( 'Вопрос', 'modal-question-nonce' ); ?>
	</form>
</div>

<div class="modal modal--image" id="image">
	<div class="modal__info">
		<div class="title modal__title">Загрузить фото</div>

		<div class="modal__text">Загрузите фото и наши специалисты перезвонят вам в ближайшее время.</div>
	</div>

	<form method="POST" class="modal__form" name="Фото">
		<input type="text" class="input modal__input" name="client_name" placeholder="ФИО" required>

		<input type="email" class="input modal__input" name="client_email" placeholder="Email" required>

		<div class="file-box modal__file">
			<input class="file-box__input" type="file" id="file-input" name="client_file" accept=".png, .jpg, .jpeg" size="1000000">

			<label class="btn btn--unfill file-box__label" for="file-input">Загрузить фото</label>
		</div>

		<div class="modal__policy">
			Нажимая кнопку, вы соглашаетесь с
			<a href="<?php echo $privacy_url; ?>">политикой персональных данных</a>
		</div>

		<button class="btn modal__submit" type="submit">Задать вопрос</button>

		<input type="text" class="hidden" name="page_request" value="<?php echo $page_title; ?>">

		<?php wp_nonce_field( 'Фото', 'modal-image-nonce' ); ?>
	</form>
</div>
