
<!-- Регистрациия -->
<div class="popup-holder">
	<div class="lightbox" id="popup-reg">
		<div class="lightbox-content">
			<div class="content">
				<div class="healing">
					<a href="#" class="close">Закрыть</a>
					<form action="/registration" id="reg-form" class="popup-form custom">
						<fieldset>
							<span class="title">начни свой путь в мир безграничного общения</span>
                                                        <div class="wrap">
                                                            <span id="otvet"></span>
                                                        </div>
							<div class="wrap">
								<span class="text" id="text_for_zzz">
                                                                    <input id="mail" type="text" name="mail" sip-value="Ваш E-Mail..." value="Ваш E-Mail..." />
                                                                    <span id="ajax-loader"><img src="/sipcms/images/ajax.gif" alt="loading.." /></span>
                                                                    <span id="ajax-response-access"><img src="/sipcms/images/access.png" alt="Access" /></span>
                                                                    <span id="ajax-response-error"><img src="/sipcms/images/error.png" alt="Error" /></span>
                                                                </span>
							</div>
							
							<div style="position: relative; top: 155px;" class="buttons">
								<div class="alignleft">
									<a id="login_block" href="/login" class="button link-popup">Я уже зарегестрирован</a>
								</div>
								<div class="alignright">
									<input class="submit pngf" id="reg_submit" name="submit" type="submit" value="Далее" />
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- После регестрации  -->
<div class="popup-holder">
	<div class="lightbox" id="popup-forreg">
		<div class="lightbox-content">
			<div class="content">
				<div class="healing">
					<a href="#" class="close">Закрыть</a>
					<form action="#" class="popup-form custom">
						<fieldset>
							<span class="title">Спасибо</span>
							<div class="info-box">
								<p>Вы успешно зарегестрировались на сайте STARSFON.RU.</p>
								<p>Вы указали E-Mail: <a id="res_mail" href=""></a> на этот E-Mail придет письмо с указанием вашего логина и пароля.</p>
								<p>Если Вы ошиблись в написании E-Mail, вернитесь назад и пройдите регистрацию заново .</p>
							</div>
							<div class="buttons">
								<div class="alignleft">
									<a id="reg-popup" href="/registration" class="button link-popup">Назад</a>
								</div>
								<div class="alignright">
									<input class="submit pngf" type="submit" value="Готово" />
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Вход -->
<div class="popup-holder">
	<div class="lightbox" id="popup-login">
		<div class="lightbox-content">
			<div class="content">
				<div class="healing">
					<a href="#" class="close">Закрыть</a>
                                            <?php
                                            echo Form::open('login',array('id'=>'form-login','class' => 'popup-form custom'));
                                            ?>
						<fieldset>
							<span class="title">Выши данные</span>
							<div class="wrap">
								<label for="login"></label>
								<span class="text text-2">
									<input name="login" type="text" id="login" sip-value="Ваш логин" value="Ваш логин" />
								</span>
							</div>
							<div class="wrap">
								<label for="pass"></label>
								<span class="text pass">
									<input name="password" type="text" id="pass" sip-value="Ваш пароль" value="Ваш пароль" />
								</span>
							</div>
							<div class="wrap">
								<input class="checkbox" type="checkbox" checked="checked" id="remember" />
								<label for="remember">Запомнить пароль</label>
							</div>
							<div class="buttons">
								<div class="alignleft">
									<a href="#popup2" id="reg-popup" class="button link-popup">Регистрация</a>
								</div>
								<div class="alignright">
									<input name="submit" class="submit pngf" type="submit" value="Вход" />
								</div>
							</div>
						</fieldset>
					<?php
                                        echo Form::close();
                                        ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="popup-holder">
	<div class="lightbox lightbox-2" id="popup-4">
		<div class="lightbox-content">
			<div class="content">
				<div class="healing">
					<a href="#" class="close">Закрыть</a>
					<form action="#" class="popup-form custom">
						<fieldset>
							<span class="title">Ваш баланс</span>
							<div class="wrap">
								<span class="data"><span>Номер абонента</span> <em>154254335558</em></span>
								<span class="data"><span>Баланс:</span> <em>1547,50 руб.</em></span>
							</div>
							<span class="title">Пополнить баланс</span>
							<div class="summ-holder">
								<ul class="summ">
									<li><a href="#"><img src="/sipcms/images/bank-system.gif" alt="image description" width="140" height="37" /></a></li>
									<li><a href="#"><img src="/sipcms/images/bank-system-2.gif" alt="image description" width="132" height="37" /></a></li>
									<li><a href="#"><img src="/sipcms/images/bank-system-3.gif" alt="image description" width="116" height="49" /></a></li>
								</ul>
							</div>
							<div class="select-holder select-holder-2">
								<label for="way-of-pay">Другие способы оплаты:</label>
								<select id="way-of-pay">
									<option value="ASSIST: Система электронных платежей">ASSIST: Система электронных платежей</option>
									<option value="ASSIST: Система электронных платежей">ASSIST: Система электронных платежей</option>
									<option value="ASSIST: Система электронных платежей">ASSIST: Система электронных платежей</option>
									<option value="ASSIST: Система электронных платежей">ASSIST: Система электронных платежей</option>
								</select>
							</div>
							<div class="buttons">
								<div class="alignleft">
									<a href="#popup2" class="button">Назад</a>
								</div>
								<div class="alignright">
									<input href="#popup-5" class="submit link-popup pngf" type="submit" value="Далее" />
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="popup-holder">
	<div class="lightbox lightbox-2" id="popup-5">
		<div class="lightbox-content">
			<div class="content">
				<div class="healing">
					<a href="#" class="close">Закрыть</a>
					<form action="#" class="popup-form custom">
						<fieldset>
							<span class="title">Пополнение баланса</span>
							<div class="wrap">
								<span>Выберете сумму для пополнения:</span>
							</div>
							<div class="summ-holder">
								<ul class="summ">
									<li><a href="#"><strong>3</strong> у.е.</a></li>
									<li><a href="#"><strong>5</strong> у.е.</a></li>
									<li><a href="#"><strong>10</strong> у.е.</a></li>
									<li><a href="#"><strong>15</strong> у.е.</a></li>
									<li><a href="#"><strong>20</strong> у.е.</a></li>
									<li class="another"><a href="#">другая сумма</a></li>
								</ul>
							</div>
							<div class="buttons">
								<div class="alignleft">
									<a href="#popup-4" class="link-popup button">Назад</a>
								</div>
								<div class="alignright">
									<input class="submit link-popup pngf" type="submit" value="Далее" />
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="popup-holder">
	<div class="lightbox-3 lightbox" id="popup-6">
		<div class="lightbox-content">
			<div class="content">
				<div class="healing">
					<a href="#" class="close">Закрыть</a>
					<form action="#" class="popup-form custom">
						<fieldset>
							<span class="title">Настройка аккаунта</span>
							<span class="data"><span>Ваш e-mail:</span><em>saflkfakdsjsdj@mail.ru</em></span>
							<span class="data"><span>SIP номер:</span><em>214656435</em></span>
							<div class="select-holder select-holder-2 select-holder-3">
								<label for="way-of-pay1">Баланс:</label>
								<span class="text text-3"><input type="text" value="1547.50"/></span>
								<select id="way-of-pay1">
									<option value="руб.">руб.</option>
									<option value="руб.">руб.</option>
									<option value="руб.">руб.</option>
								</select>
							</div>
							<div id="tabset" class="tab-holder">
								<ul class="nav">				
									<li class="nav-1"><a href="#personal-data" class="current"><span>Персональные данные</span></a></li>
									<li class="nav-2"><a href="#change-pass"><span>Смена пароля</span></a></li>
									<li class="nav-3"><a href="#last-entered"><span>Последние авторизации</span></a></li>
								</ul>
								<div class="list-wrap">
									<div id="personal-data" class="personal-info">
										<div class="wrap">
											<label for="FIO-2">Ф. И. О.:</label>
											<span class="text text-3">
												<input type="text" id="FIO-2" />
											</span>
										</div>
										<div class="select-holder select-holder-2">
											<label for="lang">Язык:</label>
											<select id="lang">
												<option value="Москва">RU</option>
												<option value="Москва">ENG</option>
												<option value="Москва">UA</option>
											</select>
										</div>
										<div class="select-holder select-holder-2">
											<label for="sex">Пол:</label>
											<select id="sex">
												<option value="Москва">Мужской</option>
												<option value="Москва">Еще не определился</option>
												<option value="Москва">Женский</option>
											</select>
										</div>
										<div class="wrap">
											<label for="Birthday">Дата рождения:</label>
											<span class="text text-3">
												<input type="text" id="Birthday" />
											</span>
										</div>
										<div class="wrap">
											<label for="phone-2">Телефон:</label>
											<span class="text text-3">
												<input type="text" id="phone-2" />
											</span>
										</div>
										<div class="wrap">
											<label for="e-mail-2">E-mail:</label>
											<span class="text text-3">
												<input type="text" id="e-mail-2" />
											</span>
										</div>
										<div class="select-holder select-holder-2">
											<label for="timezone">Часовой пояс:</label>
											<select id="timezone">
												<option value="Москва">timezone</option>
												<option value="Москва">timezone</option>
												<option value="Москва">timezone</option>
											</select>
										</div>
										<div class="select-holder select-holder-2">
											<label for="country">Страна:</label>
											<select id="country">
												<option value="Москва">Москва</option>
												<option value="Москва">Москва</option>
												<option value="Москва">Москва</option>
											</select>
										</div>
										<div class="wrap">
											<label for="city">Город:</label>
											<span class="text text-3">
												<input type="text" id="city" />
											</span>
										</div>
										<div class="wrap">
											<label for="organization">Организация:</label>
											<span class="text text-3">
												<input type="text" id="organization" />
											</span>
										</div>
										<div class="buttons">
											<div class="alignright">
												<input class="submit link-popup pngf" type="submit" value="Сохранить" />
											</div>
										</div>
									</div>
									<div id="change-pass" class="personal-info hide">
										<span class="heading">Смена пароля в системе</span>
										<div class="pass-holder">
											<div class="wrap">
												<label for="cur-pass">Текущий пароль:</label>
												<span class="text text-4">
													<input type="password" id="cur-pass" />
												</span>
											</div>
											<div class="wrap">
												<label for="new-pass">Новый пароль:</label>
												<span class="text text-4">
													<input type="password" id="new-pass" />
												</span>
											</div>
											<div class="wrap">
												<label for="new-pass-rep">Повтор нового пароля:</label>
												<span class="text text-4">
													<input type="password" id="new-pass-rep" />
												</span>
											</div>
											<div class="captcha">
												<img src="/sipcms/images/captcha.gif" alt="image description" width="122" height="44" />
												<span class="text text-4"><input type="text" value="Введите символы с картинки..." /></span>
											</div>
											<div class="buttons">
												<div class="alignleft">
													<a href="#" class="button">Отменить</a>
												</div>
												<div class="alignright">
													<input href="#" class="submit link-popup pngf" type="submit" value="Сохранить" />
												</div>
											</div>
										</div>
									</div>
									<div id="last-entered" class="personal-info hide">
										<table class="auth">
											<tr>
												<th class="first">Дата</th>
												<th>Время</th>
												<th class="third">IP адрес</th>
												<th class="last"><span>Браузер</span></th>
											</tr>
											<tr>
												<td class="first">12.09.2011</td>
												<td>01:30</td>
												<td>153.32.0.15</td>
												<td>Internet Explorer8</td>
											</tr>
											<tr>
												<td class="first">12.09.2011</td>
												<td>01:30</td>
												<td>153.32.0.15</td>
												<td>Internet Explorer8</td>
											</tr>
											<tr>
												<td class="first">12.09.2011</td>
												<td>01:30</td>
												<td>153.32.0.15</td>
												<td>Internet Explorer8</td>
											</tr>
											<tr>
												<td class="first">12.09.2011</td>
												<td>01:30</td>
												<td>153.32.0.15</td>
												<td>Internet Explorer8</td>
											</tr>
											<tr>
												<td class="first">12.09.2011</td>
												<td>01:30</td>
												<td>153.32.0.15</td>
												<td>Internet Explorer8</td>
											</tr>
											<tr>
												<td class="first">12.09.2011</td>
												<td>01:30</td>
												<td>153.32.0.15</td>
												<td>Internet Explorer8</td>
											</tr>
											<tr>
												<td class="first">12.09.2011</td>
												<td>01:30</td>
												<td>153.32.0.15</td>
												<td>Internet Explorer8</td>
											</tr>
											<tr>
												<td class="first">12.09.2011</td>
												<td>01:30</td>
												<td>153.32.0.15</td>
												<td>Internet Explorer8</td>
											</tr>
											<tr>
												<td class="first">12.09.2011</td>
												<td>01:30</td>
												<td>153.32.0.15</td>
												<td>Internet Explorer8</td>
											</tr>
											<tr>
												<td class="first">12.09.2011</td>
												<td>01:30</td>
												<td>153.32.0.15</td>
												<td>Internet Explorer8</td>
											</tr>
											<tr>
												<td class="first">12.09.2011</td>
												<td>01:30</td>
												<td>153.32.0.15</td>
												<td>Internet Explorer8</td>
											</tr>
											<tr>
												<td class="first">12.09.2011</td>
												<td>01:30</td>
												<td>153.32.0.15</td>
												<td>Internet Explorer8</td>
											</tr>
											<tr>
												<td class="first">12.09.2011</td>
												<td>01:30</td>
												<td>153.32.0.15</td>
												<td>Internet Explorer8</td>
											</tr>
										</table>
										<div class="buttons">
											<div class="alignright">
												<input href="#" class="submit link-popup pngf" type="submit" value="Закрыть" />
											</div>
										</div>
									</div>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
		<div class="lightbox-b">&nbsp;</div>
	</div>
</div>