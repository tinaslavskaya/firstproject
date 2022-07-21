<div class="container">
	<div class="section-heading center-heading ">
		<h2 class="section-title">
			<span class="word">
				<span class="char">leave</span>
				<span class="char">your</span>
				<span class="char">message</span>
			</span>
		</h2>
		<p class="contact-us-subtitle section-subtitle">
			lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto repellendus cumque, tenetur similique, veniam.
		</p>
		<div class="line line-solid-main-color"></div>
	</div>
	<div class="row">
		<div class="col-12 col-lg-9 mx-auto">
			<div class="main-form-wraper">
				<form action="php/database/form/form.php" method="POST" class="main-form">
					<div class="row row-contact">
						<div class="col-12 col-lg-6">
							<div class="input-wraper">
								<label for="user-name">
									Name
									<span class="red1" id="red">*</span>
									<input type="text" class="text-input" id="user-name"  name="user_name" minlength="3" >
								</label> 
								<span class="b-border"></span>
								<i></i>
								<span class="error-msg"></span> 
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="input-wraper">
								<label for="user-email">
									Email
									<span class="red2" id="red">*</span>
									<input type="email" class="text-input" id="user-email" name="user_email" required>
								</label>
								<span class="b-border"></span>
								<i></i>
								<span class="error-msg"></span>
							</div>
						</div>
						<div class="col-12">
							<div class="input-wraper">
								<label for="msg_subject">
									Subject
									<span class="red3" id="red">*</span>
									<input type="text" class="text-input" id="msg-subject" name="subject_msg" required>
								</label>
								<span class="b-border"></span>
								<i></i>
								<span class="error-msg"></span>
							</div>
						</div>
						<div class="col-12">
							<div class="input-wraper">
								<label for="msg-text">
									your message
									<span class="red4" id="red">*</span>
									<textarea name="user_msg" id="msg-text" class="text-input" minlength="8" maxlength="200" row="4" col="4" required></textarea>
								</label>
								<span class="b-border"></span>
								<i></i>
								<span class="error-msg"></span>
							</div>	
						</div>
						<div class="col-lg-6 col-md-4 submit-wraper">
							<button type="submit" class="ms-btn-primary button-contact" id="submit-btn" name="UserSubmit">
								send your message
							</button>
						</div>
						<div class="col-6">
							<p class="done-msg"></p>
						</div>
					</div>
				</form>	
			</div>
		</div>
	</div>
</div>	