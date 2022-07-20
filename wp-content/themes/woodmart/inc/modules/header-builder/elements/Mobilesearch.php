<?php if ( ! defined( 'WOODMART_THEME_DIR' ) ) {
	exit( 'No direct script access allowed' );}

/**
 * ------------------------------------------------------------------------------------------------
 *  Search icon for mobile devices
 * ------------------------------------------------------------------------------------------------
 */

if ( ! class_exists( 'WOODMART_HB_Mobilesearch' ) ) {
	class WOODMART_HB_Mobilesearch extends WOODMART_HB_Element {

		public function __construct() {
			parent::__construct();
			$this->template_name = 'mobile-search';
		}

		public function map() {
			$this->args = array(
				'type'            => 'mobilesearch',
				'title'           => esc_html__( 'Search', 'woodmart' ),
				'text'            => esc_html__( 'Search form', 'woodmart' ),
				'icon'            => WOODMART_ASSETS_IMAGES . '/header-builder/icons/hb-ico-search.svg',
				'editable'        => true,
				'container'       => false,
				'edit_on_create'  => true,
				'drag_target_for' => array(),
				'drag_source'     => 'content_element',
				'removable'       => true,
				'addable'         => true,
				'mobile'          => true,
				'params'          => array(
					'display'                => array(
						'id'          => 'display',
						'title'       => esc_html__( 'Display', 'woodmart' ),
						'type'        => 'selector',
						'tab'         => esc_html__( 'General', 'woodmart' ),
						'value'       => 'icon',
						'options'     => array(
							'icon'          => array(
								'value' => 'icon',
								'label' => esc_html__( 'Icon', 'woodmart' ),
							),
							'form'          => array(
								'value' => 'form',
								'label' => esc_html__( 'Form', 'woodmart' ),
							),
							'full-screen'   => array(
								'value' => 'full-screen',
								'label' => esc_html__( 'Full screen', 'woodmart' ),
							),
							'full-screen-2' => array(
								'value' => 'full-screen-2',
								'label' => esc_html__( 'Full screen 2', 'woodmart' ),
							),
						),
						'description' => esc_html__( 'Display search icon/form in the header in different views.', 'woodmart' ),
					),
					'post_type'              => array(
						'id'       => 'post_type',
						'title'    => esc_html__( 'Search post type', 'woodmart' ),
						'type'     => 'selector',
						'tab'      => esc_html__( 'General', 'woodmart' ),
						'value'    => 'product',
						'options'  => array(
							'product'   => array(
								'value' => 'product',
								'label' => esc_html__( 'Product', 'woodmart' ),
							),
							'post'      => array(
								'value' => 'post',
								'label' => esc_html__( 'Post', 'woodmart' ),
							),
							'portfolio' => array(
								'value' => 'portfolio',
								'label' => esc_html__( 'Portfolio', 'woodmart' ),
							),
							'page'      => array(
								'value' => 'page',
								'label' => esc_html__( 'Page', 'woodmart' ),
							),
							'any'       => array(
								'value' => 'any',
								'label' => esc_html__( 'All post types', 'woodmart' ),
							),
						),
						'requires' => array(
							'display' => array(
								'comparison' => 'not_equals',
								'value'      => 'icon',
							),
						),
					),
					'icon_design'            => array(
						'id'       => 'icon_design',
						'title'    => esc_html__( 'Icon design', 'woodmart' ),
						'type'     => 'selector',
						'tab'      => esc_html__( 'General', 'woodmart' ),
						'value'    => '1',
						'options'  => array(
							'1' => array(
								'value' => '1',
								'label' => esc_html__( 'First', 'woodmart' ),
								'image' => WOODMART_ASSETS_IMAGES . '/header-builder/search-icons/first.jpg',
							),
							'6' => array(
								'value' => '6',
								'label' => esc_html__( 'Second', 'woodmart' ),
								'image' => WOODMART_ASSETS_IMAGES . '/header-builder/search-icons/second.jpg',
							),
						),
						'requires' => array(
							'display' => array(
								'comparison' => 'not_equal',
								'value'      => array( 'full-screen-2', 'form' ),
							),
						),
					),
					'icon_type'              => array(
						'id'      => 'icon_type',
						'title'   => esc_html__( 'Icon type', 'woodmart' ),
						'type'    => 'selector',
						'tab'     => esc_html__( 'General', 'woodmart' ),
						'value'   => 'default',
						'options' => array(
							'default' => array(
								'value' => 'default',
								'label' => esc_html__( 'Default', 'woodmart' ),
								'image' => WOODMART_ASSETS_IMAGES . '/header-builder/default-icons/search-default.jpg',
							),
							'custom'  => array(
								'value' => 'custom',
								'label' => esc_html__( 'Custom', 'woodmart' ),
								'image' => WOODMART_ASSETS_IMAGES . '/header-builder/settings.jpg',
							),
						),
					),
					'custom_icon'            => array(
						'id'          => 'custom_icon',
						'title'       => esc_html__( 'Custom icon', 'woodmart' ),
						'type'        => 'image',
						'tab'         => esc_html__( 'General', 'woodmart' ),
						'value'       => '',
						'description' => '',
						'requires'    => array(
							'icon_type' => array(
								'comparison' => 'equal',
								'value'      => 'custom',
							),
						),
					),
					'search_style'           => array(
						'id'       => 'search_style',
						'title'    => esc_html__( 'Search style', 'woodmart' ),
						'type'     => 'selector',
						'tab'      => esc_html__( 'Form style', 'woodmart' ),
						'value'    => 'default',
						'options'  => array(
							'default' => array(
								'value' => 'default',
								'label' => esc_html__( 'Default', 'woodmart' ),
								'image' => WOODMART_ASSETS_IMAGES . '/header-builder/search/default.jpg',
							),
							'with-bg' => array(
								'value' => 'with-bg',
								'label' => esc_html__( 'With background', 'woodmart' ),
								'image' => WOODMART_ASSETS_IMAGES . '/header-builder/search/with-bg.jpg',
							),
						),
						'requires' => array(
							'display' => array(
								'comparison' => 'not_equal',
								'value'      => array( 'full-screen', 'icon' ),
							),
						),
					),
					'form_color'             => array(
						'id'          => 'form_color',
						'title'       => esc_html__( 'Form text color', 'woodmart' ),
						'type'        => 'color',
						'tab'         => esc_html__( 'Form style', 'woodmart' ),
						'value'       => '',
						'selectors'   => array(
							'{{WRAPPER}}.wd-search-form.wd-header-search-form-mobile .searchform' => array(
								'--wd-form-color: {{VALUE}};',
							),
						),
						'requires'    => array(
							'display' => array(
								'comparison' => 'not_equal',
								'value'      => array( 'full-screen', 'icon' ),
							),
						),
						'extra_class' => 'xts-col-6',
					),
					'form_placeholder_color' => array(
						'id'          => 'form_placeholder_color',
						'title'       => esc_html__( 'Form placeholder color', 'woodmart' ),
						'type'        => 'color',
						'tab'         => esc_html__( 'Form style', 'woodmart' ),
						'value'       => '',
						'selectors'   => array(
							'{{WRAPPER}}.wd-search-form.wd-header-search-form-mobile .searchform' => array(
								'--wd-form-placeholder-color: {{VALUE}};',
							),
						),
						'requires'    => array(
							'display' => array(
								'comparison' => 'not_equal',
								'value'      => array( 'full-screen', 'icon' ),
							),
						),
						'extra_class' => 'xts-col-6',
					),
					'form_brd_color'         => array(
						'id'          => 'form_brd_color',
						'title'       => esc_html__( 'Form border color', 'woodmart' ),
						'type'        => 'color',
						'tab'         => esc_html__( 'Form style', 'woodmart' ),
						'value'       => '',
						'selectors'   => array(
							'{{WRAPPER}}.wd-search-form.wd-header-search-form-mobile .searchform' => array(
								'--wd-form-brd-color: {{VALUE}};',
							),
						),
						'requires'    => array(
							'display' => array(
								'comparison' => 'not_equal',
								'value'      => array( 'full-screen', 'icon' ),
							),
						),
						'extra_class' => 'xts-col-6',
					),
					'form_brd_color_focus'   => array(
						'id'          => 'form_brd_color_focus',
						'title'       => esc_html__( 'Form border color focus', 'woodmart' ),
						'type'        => 'color',
						'tab'         => esc_html__( 'Form style', 'woodmart' ),
						'value'       => '',
						'selectors'   => array(
							'{{WRAPPER}}.wd-search-form.wd-header-search-form-mobile .searchform' => array(
								'--wd-form-brd-color-focus: {{VALUE}};',
							),
						),
						'requires'    => array(
							'display' => array(
								'comparison' => 'not_equal',
								'value'      => array( 'full-screen', 'icon' ),
							),
						),
						'extra_class' => 'xts-col-6',
					),
					'form_bg'                => array(
						'id'          => 'form_bg',
						'title'       => esc_html__( 'Form background color', 'woodmart' ),
						'type'        => 'color',
						'tab'         => esc_html__( 'Form style', 'woodmart' ),
						'value'       => '',
						'selectors'   => array(
							'{{WRAPPER}}.wd-search-form.wd-header-search-form-mobile .searchform' => array(
								'--wd-form-bg: {{VALUE}};',
							),
						),
						'requires'    => array(
							'display' => array(
								'comparison' => 'not_equal',
								'value'      => array( 'full-screen', 'icon' ),
							),
						),
						'extra_class' => 'xts-col-6',
					),
				),
			);
		}

	}

}
