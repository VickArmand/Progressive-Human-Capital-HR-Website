<?php
/**
 * Typography control class.
 *
 * @since  1.0.0
 * @access public
 */

class HR_Management_Consultancy_Control_Typography extends WP_Customize_Control {

	/**
	 * The type of customize control being rendered.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $type = 'hr-management-consultancy-typography';

	/**
	 * Array 
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $l10n = array();

	/**
	 * Set up our control.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @param  string  $id
	 * @param  array   $args
	 * @return void
	 */
	public function __construct( $manager, $id, $args = array() ) {

		// Let the parent class do its thing.
		parent::__construct( $manager, $id, $args );

		// Make sure we have labels.
		$this->l10n = wp_parse_args(
			$this->l10n,
			array(
				'color'       => esc_html__( 'Font Color', 'hr-management-consultancy' ),
				'family'      => esc_html__( 'Font Family', 'hr-management-consultancy' ),
				'size'        => esc_html__( 'Font Size',   'hr-management-consultancy' ),
				'weight'      => esc_html__( 'Font Weight', 'hr-management-consultancy' ),
				'style'       => esc_html__( 'Font Style',  'hr-management-consultancy' ),
				'line_height' => esc_html__( 'Line Height', 'hr-management-consultancy' ),
				'letter_spacing' => esc_html__( 'Letter Spacing', 'hr-management-consultancy' ),
			)
		);
	}

	/**
	 * Enqueue scripts/styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue() {
		wp_enqueue_script( 'hr-management-consultancy-ctypo-customize-controls' );
		wp_enqueue_style(  'hr-management-consultancy-ctypo-customize-controls' );
	}

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function to_json() {
		parent::to_json();

		// Loop through each of the settings and set up the data for it.
		foreach ( $this->settings as $setting_key => $setting_id ) {

			$this->json[ $setting_key ] = array(
				'link'  => $this->get_link( $setting_key ),
				'value' => $this->value( $setting_key ),
				'label' => isset( $this->l10n[ $setting_key ] ) ? $this->l10n[ $setting_key ] : ''
			);

			if ( 'family' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_families();

			elseif ( 'weight' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_weight_choices();

			elseif ( 'style' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_style_choices();
		}
	}

	/**
	 * Underscore JS template to handle the control's output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function content_template() { ?>

		<# if ( data.label ) { #>
			<span class="customize-control-title">{{ data.label }}</span>
		<# } #>

		<# if ( data.description ) { #>
			<span class="description customize-control-description">{{{ data.description }}}</span>
		<# } #>

		<ul>

		<# if ( data.family && data.family.choices ) { #>

			<li class="typography-font-family">

				<# if ( data.family.label ) { #>
					<span class="customize-control-title">{{ data.family.label }}</span>
				<# } #>

				<select {{{ data.family.link }}}>

					<# _.each( data.family.choices, function( label, choice ) { #>
						<option value="{{ choice }}" <# if ( choice === data.family.value ) { #> selected="selected" <# } #>>{{ label }}</option>
					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.weight && data.weight.choices ) { #>

			<li class="typography-font-weight">

				<# if ( data.weight.label ) { #>
					<span class="customize-control-title">{{ data.weight.label }}</span>
				<# } #>

				<select {{{ data.weight.link }}}>

					<# _.each( data.weight.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.weight.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.style && data.style.choices ) { #>

			<li class="typography-font-style">

				<# if ( data.style.label ) { #>
					<span class="customize-control-title">{{ data.style.label }}</span>
				<# } #>

				<select {{{ data.style.link }}}>

					<# _.each( data.style.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.style.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.size ) { #>

			<li class="typography-font-size">

				<# if ( data.size.label ) { #>
					<span class="customize-control-title">{{ data.size.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.size.link }}} value="{{ data.size.value }}" />

			</li>
		<# } #>

		<# if ( data.line_height ) { #>

			<li class="typography-line-height">

				<# if ( data.line_height.label ) { #>
					<span class="customize-control-title">{{ data.line_height.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.line_height.link }}} value="{{ data.line_height.value }}" />

			</li>
		<# } #>

		<# if ( data.letter_spacing ) { #>

			<li class="typography-letter-spacing">

				<# if ( data.letter_spacing.label ) { #>
					<span class="customize-control-title">{{ data.letter_spacing.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.letter_spacing.link }}} value="{{ data.letter_spacing.value }}" />

			</li>
		<# } #>

		</ul>
	<?php }

	/**
	 * Returns the available fonts.  Fonts should have available weights, styles, and subsets.
	 *
	 * @todo Integrate with Google fonts.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_fonts() { return array(); }

	/**
	 * Returns the available font families.
	 *
	 * @todo Pull families from `get_fonts()`.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	function get_font_families() {

		return array(
			'' => __( 'No Fonts', 'hr-management-consultancy' ),
        'Abril Fatface' => __( 'Abril Fatface', 'hr-management-consultancy' ),
        'Acme' => __( 'Acme', 'hr-management-consultancy' ),
        'Anton' => __( 'Anton', 'hr-management-consultancy' ),
        'Architects Daughter' => __( 'Architects Daughter', 'hr-management-consultancy' ),
        'Arimo' => __( 'Arimo', 'hr-management-consultancy' ),
        'Arsenal' => __( 'Arsenal', 'hr-management-consultancy' ),
        'Arvo' => __( 'Arvo', 'hr-management-consultancy' ),
        'Alegreya' => __( 'Alegreya', 'hr-management-consultancy' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'hr-management-consultancy' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'hr-management-consultancy' ),
        'Bangers' => __( 'Bangers', 'hr-management-consultancy' ),
        'Boogaloo' => __( 'Boogaloo', 'hr-management-consultancy' ),
        'Bad Script' => __( 'Bad Script', 'hr-management-consultancy' ),
        'Bitter' => __( 'Bitter', 'hr-management-consultancy' ),
        'Bree Serif' => __( 'Bree Serif', 'hr-management-consultancy' ),
        'BenchNine' => __( 'BenchNine', 'hr-management-consultancy' ),
        'Cabin' => __( 'Cabin', 'hr-management-consultancy' ),
        'Cardo' => __( 'Cardo', 'hr-management-consultancy' ),
        'Courgette' => __( 'Courgette', 'hr-management-consultancy' ),
        'Cherry Swash' => __( 'Cherry Swash', 'hr-management-consultancy' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'hr-management-consultancy' ),
        'Crimson Text' => __( 'Crimson Text', 'hr-management-consultancy' ),
        'Cuprum' => __( 'Cuprum', 'hr-management-consultancy' ),
        'Cookie' => __( 'Cookie', 'hr-management-consultancy' ),
        'Chewy' => __( 'Chewy', 'hr-management-consultancy' )
		);
	}

	/**
	 * Returns the available font weights.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_weight_choices() {

		return array(
			'' => esc_html__( 'No Fonts weight', 'hr-management-consultancy' ),
			'100' => esc_html__( 'Thin',       'hr-management-consultancy' ),
			'300' => esc_html__( 'Light',      'hr-management-consultancy' ),
			'400' => esc_html__( 'Normal',     'hr-management-consultancy' ),
			'500' => esc_html__( 'Medium',     'hr-management-consultancy' ),
			'700' => esc_html__( 'Bold',       'hr-management-consultancy' ),
			'900' => esc_html__( 'Ultra Bold', 'hr-management-consultancy' ),
		);
	}

	/**
	 * Returns the available font styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_style_choices() {

		return array(
			'' => esc_html__( 'No Fonts Style', 'hr-management-consultancy' ),
			'normal'  => esc_html__( 'Normal', 'hr-management-consultancy' ),
			'italic'  => esc_html__( 'Italic', 'hr-management-consultancy' ),
			'oblique' => esc_html__( 'Oblique', 'hr-management-consultancy' )
		);
	}
}
