<?php

/**
 * 
 */
class Modula_CPT_Fields_Helper {
	
	public static function get_tabs() {

		$general_description = '<p>' . esc_html__( 'Choose between creative or custom grid (build your own). Pick your favorite lightbox script and be done quickly.', 'modula-best-grid-gallery' ) . '</p>';
		// $general_description .= self::generate_more_help_links();

		$caption_description = '<p>' . esc_html__( 'The settings below adjust how the image title/description will appear on the front-end.', 'modula-best-grid-gallery' ) . '</p>';
		// $caption_description .= self::generate_more_help_links();

		$social_description = '<p>' . esc_html__( 'Here you can add social sharing buttons to your the images in your gallery.', 'modula-best-grid-gallery' ) . '</p>';
		// $social_description .= self::generate_more_help_links();

		$loadingeffects_description = '<p>' . esc_html__( 'The settings below adjust the effect applied to the images after the page is fully loaded.', 'modula-best-grid-gallery' ) . '</p>';
		// $loadingeffects_description .= self::generate_more_help_links();

		$hover_description = '<p>' . esc_html__( 'Select how your images will behave on hover. Hover styles for your images.', 'modula-best-grid-gallery' ) . '</p>';
		// $hover_description .= self::generate_more_help_links();

		$style_description = '<p>' . esc_html__( 'Here you can style the look of your images.', 'modula-best-grid-gallery' ) . '</p>';
		// $style_description .= self::generate_more_help_links();

		$customizations_description = '<p>' . esc_html__( 'Use this section to add custom CSS to your gallery for advanced modifications.', 'modula-best-grid-gallery' ) . '</p>';
		// $customizations_description .= self::generate_more_help_links();

		return apply_filters( 'modula_gallery_tabs', array(
			'general' => array(
				'label'       => esc_html__( 'General', 'modula-best-grid-gallery' ),
				'title'       => esc_html__( 'General Settings', 'modula-best-grid-gallery' ),
				'description' => $general_description,
				"icon"        => "dashicons dashicons-admin-generic",
				'priority'    => 10,
			),
			'captions' => array(
				'label'       => esc_html__( 'Captions', 'modula-best-grid-gallery' ),
				'title'       => esc_html__( 'Caption Settings', 'modula-best-grid-gallery' ),
				'description' => $caption_description,
				"icon"        => "dashicons dashicons-text",
				'priority'    => 20,
			),
			'social' => array(
				'label'       => esc_html__( 'Social', 'modula-best-grid-gallery' ),
				'title'       => esc_html__( 'Social Settings', 'modula-best-grid-gallery' ),
				'description' => $social_description,
				"icon"        => "dashicons dashicons-admin-links",
				'priority'    => 30,
			),
			'image-loaded-effects' => array(
				'label'       => esc_html__( 'Loading effects', 'modula-best-grid-gallery' ),
				'title'       => esc_html__( 'Loading Effects Settings', 'modula-best-grid-gallery' ),
				'description' => $loadingeffects_description,
				"icon"        => "dashicons dashicons-image-rotate",
				'priority'    => 40,
			),
			'hover-effect' => array(
				'label'       => esc_html__( 'Hover effect', 'modula-best-grid-gallery' ),
				'title'       => esc_html__( 'Hover Effect Settings', 'modula-best-grid-gallery' ),
				'description' => $hover_description,
				"icon"        => "dashicons dashicons-layout",
				'priority'    => 50,
			),
			'video' => array(
				'label'       => esc_html__( 'Video', 'modula-best-grid-gallery' ),
				'title'       => esc_html__( 'Video Settings', 'modula-best-grid-gallery' ),
				"icon"        => "dashicons dashicons-video-alt3",
				'priority'    => 60,
			),
			'style' => array(
				'label'       => esc_html__( 'Style', 'modula-best-grid-gallery' ),
				'title'       => esc_html__( 'Style Settings', 'modula-best-grid-gallery' ),
				'description' => $style_description,
				"icon"        => "dashicons dashicons-admin-appearance",
				'priority'    => 70,
			),
			'customizations' => array(
				'label'       => esc_html__( 'Customizations', 'modula-best-grid-gallery' ),
				'title'       => esc_html__( 'Customization Settings', 'modula-best-grid-gallery' ),
				'description' => $customizations_description,
				"icon"        => "dashicons dashicons-admin-tools",
				'priority'    => 80,
			),
		) );

	}

	public static function generate_more_help_links() {

		$output = '<p>' . esc_html__( 'Still stuck ?', 'modula-best-grid-gallery' ) . ' <a class="modula-tab-link" href="#" target="_blank"><span class="dashicons dashicons-sos"></span>' . esc_html__( 'Explore our documentation', 'modula-best-grid-gallery' ) . '</a> or <a href="https://wp-modula.com/contact-us/" class="modula-tab-link" target="_blank><span class="dashicons dashicons-email-alt"></span>' . esc_html__( 'Contact our support team.', 'modula-best-grid-gallery' ) . '</a></p>';

		return $output;

	}

	public static function get_fields( $tab ) {

		$fields = apply_filters( 'modula_gallery_fields', array(
			'general' => array(
				'type'           => array(
					"name"        => esc_html__( 'Gallery Type', 'modula-best-grid-gallery' ),
					"type"        => "select",
					"description" => esc_html__( 'Choose the type of gallery you want to use.', 'modula-best-grid-gallery' ),
					'default'     => 'creative-gallery',
					"values"      => array(
						'creative-gallery' => esc_html__( 'Creative Gallery', 'modula-best-grid-gallery' ),
						'custom-grid'      => esc_html__( 'Custom Grid', 'modula-best-grid-gallery' ),
					),
					'priority' => 10,
				),
				"gutter"   => array(
					"name"        => esc_html__( 'Gutter', 'modula-best-grid-gallery' ),
					"type"        => "ui-slider",
					"description" => esc_html__( 'Use this slider to adjust the spacing of images in your gallery.', 'modula-best-grid-gallery' ),
					"min"         => 0,
					"max"         => 100,
					"step"        => 5,
					"default"     => 10,
					'priority'    => 30,
				),
				"width"          => array(
					"name"        => esc_html__( 'Width', 'modula-best-grid-gallery' ),
					"type"        => "text",
					"description" => esc_html__( 'Width of the gallery. Can be in % or pixels.', 'modula-best-grid-gallery' ),
					'default'     => '100%',
					'priority' => 30,
				),
				"height"         => array(
					"name"        => esc_html__( 'Height', 'modula-best-grid-gallery' ),
					"type"        => "text",
					"description" => esc_html__( 'Set the height of the gallery in pixels.', 'modula-best-grid-gallery' ),
					'default'     => '800px',
					'priority' => 40,
				),
				"img_size"       => array(
					"name"        => esc_html__( 'Image size', 'modula-best-grid-gallery' ),
					"type"        => "text",
					'default'     => 500,
					"description" => esc_html__( 'Set the minimum width or height of the images in pixels.', 'modula-best-grid-gallery' ),
					'priority'    => 50,
				),
				"margin"         => array(
					"name"        => esc_html__( 'Margin', 'modula-best-grid-gallery' ),
					"type"        => "text",
					'default'     => 10,
					"description" => esc_html__( 'Set the margin between images in pixels.', 'modula-best-grid-gallery' ),
					'priority' => 60,
				),
				"randomFactor"   => array(
					"name"        => esc_html__( 'Random factor', 'modula-best-grid-gallery' ),
					"type"        => "ui-slider",
					"description" => esc_html__( 'Toggle this to 0 to tune down the randomising factor on Modula\'s grid algorithm.', 'modula-best-grid-gallery' ),
					"min"         => 0,
					"max"         => 100,
					"step"        => 1,
					"default"     => 50,
					'priority' => 70,
				),
				"lightbox"       => array(
					"name"        => esc_html__( 'Lightbox &amp; Links', 'modula-best-grid-gallery' ),
					"type"        => "select",
					"description" => esc_html__( 'Choose your preferred lightbox style. Some styles, such as LightGallery, allow for image downloads.', 'modula-best-grid-gallery' ),
					'default'     => 'lightbox2',
					"values"      => array(
						esc_html__( 'Link', 'modula-best-grid-gallery' ) => array( 
							"no-link"         => esc_html__( 'No link', 'modula-best-grid-gallery' ),
							"direct"          => esc_html__( 'Direct link to image', 'modula-best-grid-gallery' ),
							"attachment-page" => esc_html__( 'Attachment page', 'modula-best-grid-gallery' )
						),
						esc_html__( 'Lightboxes', 'modula-best-grid-gallery' ) => array(
							'lightbox2' => esc_html__( 'Lightbox2', 'modula-best-grid-gallery' ),
						),
					),
					"disabled" => array(
						'title'  => esc_html__( 'Lightboxes with PRO license', 'modula-best-grid-gallery' ),
						'values' => array(
							"magnific"     => esc_html__( 'Magnific popup', 'modula-best-grid-gallery' ),
							"prettyphoto"  => esc_html__( 'PrettyPhoto', 'modula-best-grid-gallery' ),
							"fancybox"     => esc_html__( 'FancyBox', 'modula-best-grid-gallery' ),
							"swipebox"     => esc_html__( 'SwipeBox', 'modula-best-grid-gallery' ),
							"lightgallery" => esc_html__( 'LightGallery', 'modula-best-grid-gallery' ),
						),
					),
					'priority' => 110,
				),
				"shuffle"         => array(
					"name"        => esc_html__( 'Shuffle images', 'modula-best-grid-gallery' ),
					"type"        => "toggle",
					"default"     => 0,
					"description" => esc_html__( 'Toggle this to ON to have the gallery shuffle on each page load', 'modula-best-grid-gallery' ),
					'priority'    => 120,
				),
			),
			'captions' => array(
				"captionColor"     => array(
					"name"        => esc_html__( 'Caption color', 'modula-best-grid-gallery' ),
					"type"        => "color",
					"description" => esc_html__( 'Set the color of captions.', 'modula-best-grid-gallery' ),
					"default"     => "#ffffff",
					'priority'    => 10,
				),
				"wp_field_title"   => array(
					"name"        => esc_html__( 'Default title', 'modula-best-grid-gallery' ),
					"type"        => "select",
					"description" => __( 'If you leave the title blank Modula will get the title from WordPress image by default.', 'modula-best-grid-gallery' ),
					"values"      => array(
						'none'        => esc_html__( 'No default', 'modula-best-grid-gallery' ),
						'title'       => esc_html__( 'WP Image title', 'modula-best-grid-gallery' ),
						'description' => esc_html__( 'WP Image description', 'modula-best-grid-gallery' ),
					),
					'priority' => 20,
				),
				"wp_field_caption" => array(
					"name"        => esc_html__( 'Default caption', 'modula-best-grid-gallery' ),
					"type"        => "select",
					"description" => __( 'If you leave the caption blank Modula will get the title from WordPress image by default.', 'modula-best-grid-gallery' ),
					"values"      => array(
						"none"        => esc_html__( 'No default', 'modula-best-grid-gallery' ),
						"title"       => esc_html__( 'WP Image title', 'modula-best-grid-gallery' ),
						"caption"     => esc_html__( 'WP Image caption', 'modula-best-grid-gallery' ),
						"description" => esc_html__( 'WP Image description', 'modula-best-grid-gallery' ),
					),
					'priority' => 30,
				),
				"hide_title"        => array(
					"name"        => esc_html__( 'Hide Title', 'modula-best-grid-gallery' ),
					"type"        => "toggle",
					"default"     => 0,
					"description" => esc_html__( 'Hide image titles from the gallery', 'modula-best-grid-gallery' ),
					'priority'    => 40,
				),
				"hide_description"        => array(
					"name"        => esc_html__( 'Hide Description', 'modula-best-grid-gallery' ),
					"type"        => "toggle",
					"default"     => 0,
					"description" => esc_html__( 'Hide image descriptions from the gallery', 'modula-best-grid-gallery' ),
					'priority'    => 50,
				),
				"captionFontSize"  => array(
					"name"        => esc_html__( 'Caption Font Size', 'modula-best-grid-gallery' ),
					"type"        => "ui-slider",
					"min"         => 0,
					"max"         => 100,
					"default"     => 14,
					"description" => esc_html__( 'The caption font size in pixels (set to 0 to use the theme defaults)', 'modula-best-grid-gallery' ),
					'priority'    => 60,
				),
				"titleFontSize"    => array(
					"name"        => esc_html__( 'Title Font Size', 'modula-best-grid-gallery' ),
					"type"        => "ui-slider",
					"min"         => 0,
					"max"         => 100,
					"default"     => 0,
					"description" => esc_html__( 'The title font size in pixel. (set to 0 to use the theme defaults)', 'modula-best-grid-gallery' ),
					'priority'    => 70,
				),
			),
			'social' => array(
				"enableTwitter"   => array(
					"name"        => esc_html__( 'Add Twitter icon', 'modula-best-grid-gallery' ),
					"type"        => "toggle",
					"default"     => 1,
					"description" => "",
					'priority'    => 10,
				),
				"enableFacebook"  => array(
					"name"        => esc_html__( 'Add Facebook icon', 'modula-best-grid-gallery' ),
					"type"        => "toggle",
					"default"     => 1,
					"description" => "",
					'priority'    => 20,
				),
				"enableGplus"     => array(
					"name"        => esc_html__( 'Add Google Plus icon', 'modula-best-grid-gallery' ),
					"type"        => "toggle",
					"default"     => 1,
					"description" => "",
					'priority'    => 30,
				),
				"enablePinterest" => array(
					"name"        => esc_html__( 'Add Pinterest icon', 'modula-best-grid-gallery' ),
					"type"        => "toggle",
					"default"     => 1,
					'priority'    => 40,
				),
				"socialIconColor" => array(
					"name"        => esc_html__( 'Color of social sharing icons', 'modula-best-grid-gallery' ),
					"type"        => "color",
					"description" => "",
					"default"     => "#ffffff",
					'priority'    => 50,
				),
			),
			'image-loaded-effects' => array(
				"loadedScale"  => array(
					"name"        => esc_html__( 'Scale', 'modula-best-grid-gallery' ),
					"description" => esc_html__( 'Choose a value below 100% for a zoom-in effect. Choose a value over 100% for a zoom-out effect', 'modula-best-grid-gallery' ),
					"type"        => "ui-slider",
					"min"         => 0,
					"max"         => 200,
					"default"     => 100,
					'priority' => 10,
				),
			),
			'hover-effect' => array(
				"effect" => array(
					"name"        => esc_html__( 'Hover effect', 'modula-best-grid-gallery' ),
					"type"        => "hover-effect",
					'default'     => 'pufrobo',
					'priority'    => 10,
				),
			),
			'style' => array(
				"borderSize"   => array(
					"name"        => esc_html__( 'Border Size', 'modula-best-grid-gallery' ),
					"type"        => "ui-slider",
					"description" => esc_html__( 'Set the border size of images in your gallrey.', 'modula-best-grid-gallery' ),
					"min"         => 0,
					"max"         => 10,
					"default"     => 0,
					'priority'    => 10,
				),
				"borderRadius" => array(
					"name"        => esc_html__( 'Border Radius', 'modula-best-grid-gallery' ),
					"type"        => "ui-slider",
					"description" => esc_html__( 'Set the radius of the image borders in this gallery.', 'modula-best-grid-gallery' ),
					"min"         => 0,
					"max"         => 100,
					"default"     => 0,
					'priority'    => 20,
				),
				"borderColor"  => array(
					"name"        => esc_html__( 'Border Color', 'modula-best-grid-gallery' ),
					"type"        => "color",
					"description" => esc_html__( 'Set the color of your image borders in this gallery.', 'modula-best-grid-gallery' ),
					"default"     => "#ffffff",
					'priority'    => 30,
				),
				"shadowSize"   => array(
					"name"        => esc_html__( 'Shadow Size', 'modula-best-grid-gallery' ),
					"type"        => "ui-slider",
					"description" => esc_html__( 'Set the size of image shadows in this gallery.', 'modula-best-grid-gallery' ),
					"min"         => 0,
					"max"         => 20,
					"default"     => 0,
					'priority'    => 40,
				),
				"shadowColor"  => array(
					"name"        => esc_html__( 'Shadow Color', 'modula-best-grid-gallery' ),
					"type"        => "color",
					"description" => esc_html__( 'Set the color of image shadows in this gallery', 'modula-best-grid-gallery' ),
					"default"     => "#ffffff",
					'priority'    => 50,
				),
			),
			'customizations' => array(
				"style"  => array(
					"name"        => esc_html__( 'Custom css', 'modula-best-grid-gallery' ),
					"type"        => "custom_code",
					"syntax"      => 'css',
					"description" => '<strong>' . esc_html__( 'Just write the code without using the &lt;style&gt;&lt;/style&gt; tags', 'modula-best-grid-gallery' ) . '</strong>',
					'priority' => 20,
				),
			),
		) );

		if ( 'all' == $tab ) {
			return $fields;
		}

		if ( isset( $fields[ $tab ] ) ) {
			return $fields[ $tab ];
		} else {
			return array();
		}

	}

	public static function get_defaults() {
		return apply_filters( 'modula_lite_default_settings', array(
			'type'             => 'creative-gallery',
			'width'            => '100%',
			'height'           => '800',
			'img_size'         => 300,
			'margin'           => '10',
			'randomFactor'     => '50',
			'lightbox'         => 'lightbox2',
			'shuffle'          => 0,
			'captionColor'     => '#ffffff',
			'wp_field_caption' => 'none',
		    'wp_field_title'   => 'none',
		    'hide_title'       => 0,
		    'hide_description' => 0,
		    'captionFontSize'  => '14',
		    'titleFontSize'    => '16',
		    'enableFacebook'   => 1,
		    'enableGplus'      => 1,
		    'enablePinterest'  => 1,
		    'enableTwitter'    => 1,
		    'filterClick'      => 0,
		    'socialIconColor'  => '#ffffff',
		    'loadedScale'      => '100',
		    'effect'           => 'pufrobo',
		    'borderColor'      => '#ffffff',
		    'borderRadius'     => '0',
		    'borderSize'       => '0',
		    'shadowColor'      => '#ffffff',
		    'shadowSize'       => 0,
		    'script'           => '',
		    'style'            => '',
		    'columns'          => 6,
		    'gutter'           => 10,
		    'helpergrid'       => 0,
		) );
	}

}