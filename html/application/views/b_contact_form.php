    <!-- ****** Bottom from ****** -->
	<div class="b-bottom-from">
		<div class="container">
				<h2>Отправить заявку</h2>
				<?php echo form_open('send_email'); ?>				
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<input type="text" class="form-control" placeholder="Имя и фамилия" name="inputName" required>
						</div>
						<div class="col-md-6 col-sm-6">
							<input type="text" class="form-control" placeholder="Контактный телефон" name="inputPhone" required>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<input type="text" class="form-control" placeholder="Название компании" name="inputCompany" required>
						</div>
						<div class="col-md-6 col-sm-6">
							<input type="text" class="form-control" placeholder="Адрес электронной почты" name="inputEmail" required>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<textarea class="form-control" placeholder="Текст сообщения" name="inputMessage" required></textarea>
						</div>
					</div>
					<div class="b-button">
						<button type="submit" class="btn btn-default">Отправить заявку</button>
					</div>
				</form>
			</div>
	</div>
