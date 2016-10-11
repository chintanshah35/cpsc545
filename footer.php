<div id="footer-wrapper" class="wrapper">
					<div class="title">Get in Touch</div>
					<div id="footer" class="container">
					<div class="row 150%">
							<div class="6u 12u(mobile)">

								<!-- Contact Form -->
									
								<section>
									
<!-- Contact Form -->
									
									<section>
									
									<?php
										/*$action=$_REQUEST['action'];
										if ($action=="") */
										if(isset($_REQUEST['action']) == "")											/* display the contact form */
											{
									?>
									
										<form  action="" method="POST" enctype="multipart/form-data">
                                          <input type="hidden" name="action" value="submit">
											<div class="row 50%">
												<div class="6u 12u(mobile)">
													<input type="text" name="name" id="contact-name" placeholder="Name" />
												</div>
												<div class="6u 12u(mobile)">
													<input type="text" name="email" id="contact-email" placeholder="Email" />
												</div>
											</div>
											<div class="row 50%">
												<div class="12u">
													<textarea name="message" id="contact-message" placeholder="Message" rows="4"></textarea>
												</div>
											</div>
											<div class="row">
												<div class="12u">
													<ul class="actions">
														<li><input type="submit" class="style1" value="Send" /></li>
														<li><input type="reset" class="style2" value="Reset" /></li>
													</ul>
												</div>
											</div>
										</form>
									<?php
											} 
									else                /* send the submitted data */
									{
										$name=$_REQUEST['name'];
										$email=$_REQUEST['email'];
										$message=$_REQUEST['message'];
										if (($name=="")||($email=="")||($message==""))
										{
										echo "All fields are required, please fill <a href=\"\">the form</a> again.";
										}
										else{        
										$from="From: chintanshahc21@gmail.com $name<$email>\r\nReturn-path: $email";
										$subject="Message sent using your contact form";
										mail("chintanshahc21@gmail.com", $subject, $message, $from);
										echo "Email sent!";
										}
									}  
									?>
																	
									</section>

							</div>
							<div class="6u 12u(mobile)">

								<!-- Contact -->
									<section class="feature-list small">
										<div class="row">
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-home">Mailing Address</h3>
													<p>
														Healthy Bite<br />
														800 State College Blvd,<br />
														Fullerton, CA 92831
													</p>
												</section>
											</div>
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-comment">Social</h3>
													<p>
														<a href="#">@healthy-bite</a><br />
														<a href="#">linkedin.com/healthy-bite</a><br />
														<a href="#">facebook.com/healthy-bite</a>
													</p>
												</section>
											</div>
										</div>
										<div class="row">
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-envelope">Email</h3>
													<p>
														<a href="#">chintanshahc21@gmail.com</a>
													</p>
												</section>
											</div>
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-phone">Phone</h3>
													<p>
														(657) 278-2787
													</p>
												</section>
											</div>
										</div>
									</section>

							</div>
						</div>
					</div>
				</div>