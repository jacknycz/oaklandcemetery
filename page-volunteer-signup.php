<?php
/**
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 * Template Name: Volunteer Signup
 */

get_header(); ?>

<?php
	$success = false;
	if(!empty($_POST)) {
		ini_set('display_errors', 0);
		$email = ''; //this is the content of the email
		$required = array('Full Name', 'Address', 'City', 'State', 'Zip', 'Email'); //required fields
		$errors = array(); //errors will be stored here
		
		add_item('Full Name', $_POST['pre_name'] . ' ' . $_POST['full_name'], $email, $required, $errors);
		add_item('Spouse/Partner', $_POST['spouse_partner'], $email, $errors);
		add_item('Address', $_POST['address'], $email, $required, $errors);
		add_item('City', $_POST['city'], $email, $required, $errors);
		add_item('State', $_POST['state'], $email, $required, $errors);
		add_item('Zip', $_POST['zip'], $email, $required, $errors);
		add_item('Home Phone', $_POST['home_phone'], $email, $errors);
		add_item('Work Phone', $_POST['work_phone'], $email, $errors);
		add_item('Cell Phone', $_POST['cell_phone'], $email, $errors);
		add_item('Fax', $_POST['fax'], $email, $errors);
		add_item('Email', $_POST['email'], $email, $required, $errors);
		add_item('Areas of Interest', $_POST['aoi_field'], $email, $errors);
		add_item('Other Areas of Interest', $_POST['aoi_other'], $email, $errors);
		add_item('Availability', $_POST['availability_field'], $email, $errors);
		add_item('Occupation/Place of Business', $_POST['occupation'], $email, $errors);
		add_item('Professional Organizations and Volunteer Experience', $_POST['volunteer_experience'], $email, $errors);
		add_item('Other areas of interest or expertise', $_POST['interest_or_expertise'], $email, $errors);
		add_item('How did you first hear about Oakland', $_POST['hear_about_oakland'], $email, $errors);

		//$contactEmail = 'dave.jones.atd@gmail.com, benairtight@gmail.com';
		$contactEmail = 'MWoodlan@oaklandcemetery.com';
		
		if(empty($errors)) {
			//no errors, lets email the form
			$to = $contactEmail;
			$subject = 'Oakland Cemetery - Volunteer Signup';
			$message = '
			<html>
			<body>
			  '.$email.'
			</body>
			</html>
			';

			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: ' . $_POST['full_name'] . ' <' . $_POST['email'] . '>' . "\r\n";

			if(mail($to, $subject, $message, $headers)) {
				$success = true;
				
			}
		}
	}
	
	function add_item($key, $value = 0, &$email, $required, &$errors) {
		if(!empty($value)) {
			$email .= "<strong>$key:</strong> $value<br />";
		} else {
			foreach($required as $value) {
				if($value == $key) {
					$errors[$key] = $key.' is a required field. <br />';
				}
			}
		}
	}
?>

<script type="text/javascript" src="/wp-content/themes/oaklandcemetery/js/jquery.validate.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	$('#volunteer-form').validate();
});

function checkCheckboxes(group, field) {
	var checks = '';
	$(group + ' input[type="checkbox"]:checked').each(function() {
		checks += '<br />' + $(this).attr('value');
	});
	$(field).val(checks);
	console.log($(field).val());
}
</script>

<style>
.control-label {
	font-weight: bold;
}

label.error {
	color: #FF0000;
	font-size: 11px;
}
</style>

<?php while ( have_posts() ) : the_post(); ?>

	<div id="header_image">
		<?php if ( has_post_thumbnail() ): ?>
			<?php the_post_thumbnail(array(960, 227)); ?>
		<?php else: ?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/header_image_1.jpg" />
		<?php endif; ?>
	</div>

	<div id="primary">

		<?php get_template_part( 'content', 'page' ); ?>

		<?php if ($success): ?>
			<div class="alert alert-success">
				<p>Thank You! Your message has been sent, and we will respond soon.</p>
			</div>
		<?php endif; ?>
		<?php if (!$success && !empty($_POST)): ?>
			<div class="alert alert-error">
				<p>
					Oops! Your message could not be sent! Please try again or email 
					<a href="mailto:<?php echo $contactEmail; ?>"><?php echo $contactEmail; ?></a> 
					for assistance.
				</p>
			</div>
		<?php endif; ?>

		<form id="volunteer-form" class="form-horizontal" method="POST" action="#" onsubmit="checkCheckboxes('#areas-of-interest', '#aoi_field'); checkCheckboxes('#availability', '#availability_field')">
			<div class="control-group">
				<div class="controls">
					<label class="radio inline">
						<input type="radio" name="pre_name" value="Mr." checked="checked" /> Mr.
					</label>
					<label class="radio inline">
						<input type="radio" name="pre_name" value="Mrs." /> Mrs.
					</label>
					<label class="radio inline">
						<input type="radio" name="pre_name" value="Ms." /> Ms.
					</label>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="full_name">Full Name*</label>
				<div class="controls">
					<input type="text" id="full_name" name="full_name" class="required" />
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="spouse_parter">Spouse/Partner</label>
				<div class="controls">
					<input type="text" id="spouse_partner" name="spouse_partner" />
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="address">Address*</label>
				<div class="controls">
					<input type="text" id="address" name="address" class="required" />
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="city">City*</label>
				<div class="controls">
					<input type="text" id="city" name="city" class="required" />
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="state">State*</label>
				<div class="controls">
					<select id="state" name="state" class="required">
						<option value="AL">Alabama</option> 
						<option value="AK">Alaska</option> 
						<option value="AZ">Arizona</option> 
						<option value="AR">Arkansas</option> 
						<option value="CA">California</option> 
						<option value="CO">Colorado</option> 
						<option value="CT">Connecticut</option> 
						<option value="DE">Delaware</option> 
						<option value="DC">District Of Columbia</option> 
						<option value="FL">Florida</option> 
						<option value="GA" selected="selected">Georgia</option> 
						<option value="HI">Hawaii</option> 
						<option value="ID">Idaho</option> 
						<option value="IL">Illinois</option> 
						<option value="IN">Indiana</option> 
						<option value="IA">Iowa</option> 
						<option value="KS">Kansas</option> 
						<option value="KY">Kentucky</option> 
						<option value="LA">Louisiana</option> 
						<option value="ME">Maine</option> 
						<option value="MD">Maryland</option> 
						<option value="MA">Massachusetts</option> 
						<option value="MI">Michigan</option> 
						<option value="MN">Minnesota</option> 
						<option value="MS">Mississippi</option> 
						<option value="MO">Missouri</option> 
						<option value="MT">Montana</option> 
						<option value="NE">Nebraska</option> 
						<option value="NV">Nevada</option> 
						<option value="NH">New Hampshire</option> 
						<option value="NJ">New Jersey</option> 
						<option value="NM">New Mexico</option> 
						<option value="NY">New York</option> 
						<option value="NC">North Carolina</option> 
						<option value="ND">North Dakota</option> 
						<option value="OH">Ohio</option> 
						<option value="OK">Oklahoma</option> 
						<option value="OR">Oregon</option> 
						<option value="PA">Pennsylvania</option> 
						<option value="RI">Rhode Island</option> 
						<option value="SC">South Carolina</option> 
						<option value="SD">South Dakota</option> 
						<option value="TN">Tennessee</option> 
						<option value="TX">Texas</option> 
						<option value="UT">Utah</option> 
						<option value="VT">Vermont</option> 
						<option value="VA">Virginia</option> 
						<option value="WA">Washington</option> 
						<option value="WV">West Virginia</option> 
						<option value="WI">Wisconsin</option> 
						<option value="WY">Wyoming</option>
					</select>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="zip">Zip*</label>
				<div class="controls">
					<input type="text" id="zip" name="zip" class="required" />
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="home_phone">Home Phone</label>
				<div class="controls">
					<input type="text" id="home_phone" name="home_phone" />
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="work_phone">Work Phone</label>
				<div class="controls">
					<input type="text" id="work_phone" name="work_phone" />
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="cell_phone">Cell Phone</label>
				<div class="controls">
					<input type="text" id="cell_phone" name="cell_phone" />
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="fax">Fax</label>
				<div class="controls">
					<input type="text" id="fax" name="fax" />
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="email">E-mail*</label>
				<div class="controls">
					<input type="text" id="email" name="email" class="required email" />
				</div>
			</div>

			<div id="areas-of-interest" class="control-group">
				<label class="control-label">Areas of Interest</label>
				<div class="controls">
					<input type="hidden" id="aoi_field" name="aoi_field" />
					<label class="checkbox">
						<input type="checkbox" name="aoi_1" value="Tour Guide, weekday" /> Tour Guide, weekday
					</label>
					<label class="checkbox">
						<input type="checkbox" name="aoi_2" value="Tour Guide, weekend" /> Tour Guide, weekends
					</label>
					<label class="checkbox">
						<input type="checkbox" name="aoi_3" value="VC/Museum Shop, weekdays" /> VC/Museum Shop, weekdays
					</label>
					<label class="checkbox">
						<input type="checkbox" name="aoi_4" value="VC/Museum Shop, weekends" /> VC/Museum Shop, weekends
					</label>
					<label class="checkbox">
						<input type="checkbox" name="aoi_5" value="Special Gardening Projects" /> Special Gardening Projects
					</label>
					<label class="checkbox">
						<input type="checkbox" name="aoi_6" value="Private Events" /> Private Events
					</label>
					<label class="checkbox">
						<input type="checkbox" name="aoi_7" value="Special Events" /> Special Events
					</label>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="aoi_other">Other</label>
				<div class="controls">
					<input type="text" id="aoi_other" name="aoi_other" />
				</div>
			</div>

			<div id="availability">
				<div class="control-group" style="margin: 0;">
					<label class="control-label" for="aoi_other">Availability</label>
					<div class="controls">
						<input type="hidden" id="availability_field" name="availability_field" />
						<div class="row-fluid" style="padding-top: 5px;">
							<div class="span1">
								Mon
							</div>
							<div class="span1">
								Tue
							</div>
							<div class="span1">
								Wed
							</div>
							<div class="span1">
								Thu
							</div>
							<div class="span1">
								Fri
							</div>
							<div class="span1">
								Sat
							</div>
							<div class="span1">
								Sun
							</div>
						</div>
					</div>
				</div>

				<div class="control-group" style="margin: 0;">
					<label class="control-label" for="aoi_other">Morning</label>
					<div class="controls">
						<div class="row-fluid">
							<div class="span1">
								<label for="" class="checkbox inline"><input type="checkbox" name="morning_1" value="Morning - Monday"></label>
							</div>
							<div class="span1">
								<label for="" class="checkbox inline"><input type="checkbox" name="morning_2" value="Morning - Tuesday"></label>
							</div>
							<div class="span1">
								<label for="" class="checkbox inline"><input type="checkbox" name="morning_3" value="Morning - Wednesday"></label>
							</div>
							<div class="span1">
								<label for="" class="checkbox inline"><input type="checkbox" name="morning_4" value="Morning - Thursday"></label>
							</div>
							<div class="span1">
								<label for="" class="checkbox inline"><input type="checkbox" name="morning_5" value="Morning - Friday"></label>
							</div>
							<div class="span1">
								<label for="" class="checkbox inline"><input type="checkbox" name="morning_6" value="Morning - Saturday"></label>
							</div>
							<div class="span1">
								<label for="" class="checkbox inline"><input type="checkbox" name="morning_7" value="Sunday Morning"></label>
							</div>
						</div>
					</div>
				</div>

				<div class="control-group" style="margin: 0;">
					<label class="control-label" for="aoi_other">Afternoon</label>
					<div class="controls">
						<div class="row-fluid">
							<div class="span1">
								<label for="" class="checkbox inline"><input type="checkbox" name="afternoon_1" value="Afternoon - Monday"></label>
							</div>
							<div class="span1">
								<label for="" class="checkbox inline"><input type="checkbox" name="afternoon_2" value="Afternoon - Tuesday"></label>
							</div>
							<div class="span1">
								<label for="" class="checkbox inline"><input type="checkbox" name="afternoon_3" value="Afternoon - Wednesday"></label>
							</div>
							<div class="span1">
								<label for="" class="checkbox inline"><input type="checkbox" name="afternoon_4" value="Afternoon - Thursday"></label>
							</div>
							<div class="span1">
								<label for="" class="checkbox inline"><input type="checkbox" name="afternoon_5" value="Afternoon - Friday"></label>
							</div>
							<div class="span1">
								<label for="" class="checkbox inline"><input type="checkbox" name="afternoon_6" value="Afternoon - Saturday"></label>
							</div>
							<div class="span1">
								<label for="" class="checkbox inline"><input type="checkbox" name="afternoon_7" value="Afternoon - Sunday"></label>
							</div>
						</div>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="aoi_other">Evening</label>
					<div class="controls">
						<div class="row-fluid">
							<div class="span1">
								<label for="" class="checkbox inline"><input type="checkbox" name="evening_1" value="Evening - Monday"></label>
							</div>
							<div class="span1">
								<label for="" class="checkbox inline"><input type="checkbox" name="evening_2" value="Evening - Tuesday"></label>
							</div>
							<div class="span1">
								<label for="" class="checkbox inline"><input type="checkbox" name="evening_3" value="Evening - Wednesday"></label>
							</div>
							<div class="span1">
								<label for="" class="checkbox inline"><input type="checkbox" name="evening_4" value="Evening - Thursday"></label>
							</div>
							<div class="span1">
								<label for="" class="checkbox inline"><input type="checkbox" name="evening_5" value="Evening - Friday"></label>
							</div>
							<div class="span1">
								<label for="" class="checkbox inline"><input type="checkbox" name="evening_6" value="Evening - Saturday"></label>
							</div>
							<div class="span1">
								<label for="" class="checkbox inline"><input type="checkbox" name="evening_7" value="Evening - Sunday"></label>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="occupation">Occupation/Place of Business</label>
				<div class="controls">
					<input type="text" id="occupation" name="occupation" />
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="volunteer_experience">Professional Organizations and Volunteer Experience</label>
				<div class="controls">
					<textarea id="volunteer_experience" name="volunteer_experience"></textarea>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="interest_or_expertise">Other areas of interest or expertise</label>
				<div class="controls">
					<textarea id="interest_or_expertise" name="interest_or_expertise"></textarea>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="hear_about_oakland">How did you first hear about Oakland</label>
				<div class="controls">
					<textarea id="hear_about_oakland" name="hear_about_oakland"></textarea>
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn">Sign Up</button>
				</div>
			</div>
		</form>

		<?php include('includes/content-footer.php'); ?>
	</div>

<?php endwhile; // end of the loop. ?>

<div id="secondary">
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>