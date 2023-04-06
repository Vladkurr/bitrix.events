<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Contact");
$APPLICATION->SetTitle("Contact");
?><div class="main">
		<div class="wrap">
			<div class="content_top">
				<div class="contact">
					<div class="section group">
						<div class="col_1_of_3 contact_1_of_3">
							<div class="contact-form">
								<h3>Get In Touch</h3>
								<form>
									<div>
										<span>
											<input type="text" class="textbox" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
										</span>
									</div>
									<div>
										<span>
											<input type="text" class="textbox" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
										</span>
									</div>
									<div>
										<span>
											<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
										</span>
									</div>
									<div>
										<span>
											<input type="submit" class="mybutton" value="Submit">
										</span>
									</div>
								</form>
							</div>
						</div>
						<div class="col_1_of_3 contact_1_of_3">
							<div class="company_address">
								<h3>Address</h3>
									<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => SITE_TEMPLATE_PATH . "/includes/contact__text.php"
									)
									);?>	
									<span>
									
										<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => SITE_TEMPLATE_PATH . "/includes/contact__email.php"
									)
									);?>
										
								
								</span>
									</p>						
															
								<p>Follow on:
									<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => SITE_TEMPLATE_PATH . "/includes/contact__social.php"
									)
									);?>
								</p>
							</div>
						</div>
						<div class="col_1_of_3 contact_1_of_3">
							<div class="contact_info">
								<h3>Find Us Here</h3>
								<div class="map">
									<iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe>
									<br>
									<small>
										<a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265"
										    style="color:#F39EFF;;text-align:left;font-size:0.85em">View Larger Map</a>
									</small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>