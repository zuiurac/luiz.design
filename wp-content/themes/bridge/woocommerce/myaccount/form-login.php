<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>


	<div class="u-columns col2-set" id="customer_login">
	
	<div class="u-column1 col-1">

<?php endif; ?>
	
		<h2><?php esc_html_e( 'Log In', 'bridge' ); ?></h2>
		
		<form class="woocommerce-form woocommerce-form-login login" method="post">

			<?php do_action( 'woocommerce_login_form_start' ); ?>
			
			<?php /*** Our code modification inside Woo template - begin ***/ ?>
			
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text placeholder" placeholder="<?php esc_html_e('Username or email', 'bridge'); ?>" name="username" id="username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( wp_unslash($_POST['username']) ); ?>" /><?php // @codingStandardsIgnoreLine ?>
			</p>
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<input class="woocommerce-Input woocommerce-Input--text input-text placeholder" placeholder="<?php esc_html_e('Password', 'bridge'); ?>" type="password" name="password" id="password" />
			</p>
			
			<?php do_action( 'woocommerce_login_form' ); ?>
			
			<p class="form-row">
				<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
				<label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline woo-my-account-rememberme">
					<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e( 'Remember me', 'bridge' ); ?></span>
				</label>
				<input type="submit" class="woocommerce-Button button" name="login" value="<?php esc_attr_e( 'Log In', 'bridge' ); ?>" />
				<a class="lost_password woo-lost_password2" href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Lost your password?', 'bridge' ); ?></a>

			</p>
			
			<?php /*** Our code modification inside Woo template - end ***/ ?>
	
			<?php do_action( 'woocommerce_login_form_end' ); ?>
	
		</form>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

	</div>

	<div class="u-column2 col-2">

		<h2><?php esc_html_e( 'Register', 'bridge' ); ?></h2>

		<form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?>>

			<?php do_action( 'woocommerce_register_form_start' ); ?>
			
			<?php /*** Our code modification inside Woo template - begin ***/ ?>
			
			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

				<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
					<input type="text" class="woocommerce-Input woocommerce-Input--text input-text placeholder" placeholder="<?php esc_html_e('Username', 'bridge'); ?>" name="username" id="reg_username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( wp_unslash($_POST['username']) ); ?>" /><?php // @codingStandardsIgnoreLine ?>
				</p>

			<?php endif; ?>

			<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
				<input type="email" class="woocommerce-Input woocommerce-Input--text input-text placeholder" placeholder="<?php esc_html_e('Email', 'bridge'); ?>" name="email" id="reg_email" value="<?php if ( ! empty( $_POST['email'] ) ) echo esc_attr( wp_unslash($_POST['email']) ); ?>" /><?php // @codingStandardsIgnoreLine ?>
			</p>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

				<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
					<input type="password" class="woocommerce-Input woocommerce-Input--text input-text placeholder" placeholder="<?php esc_html_e('Password', 'bridge'); ?>" name="password" id="reg_password" />
				</p>
			<?php else : ?>

				<p><?php esc_html_e( 'A password will be sent to your email address.', 'bridge' ); ?></p>

			<?php endif; ?>
			
			<?php /*** Our code modification inside Woo template - end ***/ ?>
			
			<?php do_action( 'woocommerce_register_form' ); ?>

			<p class="woocommerce-FormRow form-row">
				<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
				<input type="submit" class="woocommerce-Button button" name="register" value="<?php esc_attr_e( 'Register', 'bridge' ); ?>" />
			</p>

			<?php do_action( 'woocommerce_register_form_end' ); ?>

		</form>

	</div>

</div>
<?php endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>