<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_66a8cf89eed99',
	'title' => 'Первый экран',
	'fields' => array(
		array(
			'key' => 'field_66a8cf8a0845a',
			'label' => '',
			'name' => 'welcome',
			'aria-label' => '',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'acfe_seamless_style' => 0,
			'acfe_group_modal' => 0,
			'acfe_field_group_condition' => 0,
			'acfe_group_modal_close' => 0,
			'acfe_group_modal_button' => '',
			'acfe_group_modal_size' => 'large',
			'sub_fields' => array(
				array(
					'key' => 'field_66a8e23290b8a',
					'label' => 'Цвет текста',
					'name' => 'color',
					'aria-label' => '',
					'type' => 'button_group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'dark' => 'Темный',
						'light' => 'Светлый',
					),
					'default_value' => '',
					'return_format' => 'value',
					'allow_null' => 0,
					'layout' => 'horizontal',
					'acfe_field_group_condition' => 0,
				),
				array(
					'key' => 'field_66a8cfc90845b',
					'label' => 'Заголовок',
					'name' => 'title',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => 'Добавляет заголовок первого уровня',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'acfe_field_group_condition' => 0,
				),
				array(
					'key' => 'field_66a8d0a00845c',
					'label' => 'Текст',
					'name' => 'text',
					'aria-label' => '',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'acfe_textarea_code' => 0,
					'maxlength' => '',
					'rows' => 4,
					'placeholder' => '',
					'new_lines' => 'br',
					'acfe_field_group_condition' => 0,
				),
				array(
					'key' => 'field_66a8d0dc0845d',
					'label' => 'Преимущества',
					'name' => 'advantages',
					'aria-label' => '',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_repeater_stylised_button' => 0,
					'layout' => 'table',
					'pagination' => 0,
					'min' => 0,
					'max' => 6,
					'collapsed' => '',
					'button_label' => 'Добавить преимущество',
					'acfe_field_group_condition' => 0,
					'rows_per_page' => 20,
					'sub_fields' => array(
						array(
							'key' => 'field_66a8d1480845e',
							'label' => 'Иконка',
							'name' => 'icon',
							'aria-label' => '',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '35',
								'class' => '',
								'id' => '',
							),
							'acfe_field_group_condition' => 0,
							'uploader' => '',
							'acfe_thumbnail' => 0,
							'return_format' => 'id',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '.png, .svg',
							'preview_size' => 'medium',
							'library' => 'all',
							'parent_repeater' => 'field_66a8d0dc0845d',
						),
						array(
							'key' => 'field_66a8d1710845f',
							'label' => 'Текст',
							'name' => 'text',
							'aria-label' => '',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'acfe_field_group_condition' => 0,
							'default_value' => '',
							'maxlength' => 70,
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'parent_repeater' => 'field_66a8d0dc0845d',
						),
					),
				),
				array(
					'key' => 'field_67124d1c2bab7',
					'label' => 'Кнопка',
					'name' => 'button',
					'aria-label' => '',
					'type' => 'button_group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'modal' => 'Модальное окно',
						'marquiz' => 'Квиз',
					),
					'default_value' => '',
					'return_format' => 'value',
					'allow_null' => 0,
					'layout' => 'horizontal',
					'acfe_field_group_condition' => 0,
				),
				array(
					'key' => 'field_66a8d1cdae8c1',
					'label' => 'Фоновое изображение',
					'name' => 'bg',
					'aria-label' => '',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'uploader' => '',
					'acfe_thumbnail' => 0,
					'return_format' => 'url',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
					'preview_size' => 'medium',
					'acfe_field_group_condition' => 0,
					'library' => 'all',
				),
				array(
					'key' => 'field_66a90a3e39d19',
					'label' => 'Фоновое изображение для мобильных устройств',
					'name' => 'mobile-bg',
					'aria-label' => '',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'uploader' => '',
					'acfe_thumbnail' => 0,
					'return_format' => 'id',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
					'preview_size' => 'medium',
					'acfe_field_group_condition' => 0,
					'library' => 'all',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'top_level',
			),
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
	'acfe_autosync' => array(
		0 => 'php',
	),
	'acfe_form' => 0,
	'acfe_display_title' => '',
	'acfe_meta' => '',
	'acfe_note' => '',
	'modified' => 1729252697,
));

endif;