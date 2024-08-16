<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_66bf0e6be714c',
	'title' => 'Block:video',
	'fields' => array(
		array(
			'key' => 'field_66bf0e7c61fff',
			'label' => 'Видео',
			'name' => 'video',
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
			'layout' => 'table',
			'acfe_seamless_style' => 0,
			'acfe_group_modal' => 0,
			'acfe_field_group_condition' => 0,
			'sub_fields' => array(
				array(
					'key' => 'field_66bf0e8762000',
					'label' => 'Превью',
					'name' => 'preview',
					'aria-label' => '',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '20',
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
				array(
					'key' => 'field_66bf0e9762001',
					'label' => 'Тип',
					'name' => 'type',
					'aria-label' => '',
					'type' => 'button_group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '15',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'link' => 'Ссылка',
						'file' => 'Файл',
					),
					'default_value' => '',
					'return_format' => 'value',
					'allow_null' => 0,
					'layout' => 'horizontal',
					'acfe_field_group_condition' => 0,
				),
				array(
					'key' => 'field_66bf0eb462002',
					'label' => 'Ссылка',
					'name' => 'link',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_66bf0e9762001',
								'operator' => '==',
								'value' => 'link',
							),
						),
					),
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
					'key' => 'field_66bf0ed662003',
					'label' => 'Файл',
					'name' => 'file',
					'aria-label' => '',
					'type' => 'file',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_66bf0e9762001',
								'operator' => '==',
								'value' => 'file',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'uploader' => '',
					'return_format' => 'url',
					'upload_folder' => '',
					'multiple' => 0,
					'max' => '',
					'min_size' => '',
					'max_size' => '',
					'mime_types' => '',
					'acfe_field_group_condition' => 0,
					'library' => 'all',
					'preview_style' => 'default',
					'placeholder' => 'Select',
					'button_label' => 'Добавить файл',
					'stylised_button' => 0,
					'file_count' => 0,
					'min' => '',
				),
			),
			'acfe_group_modal_close' => 0,
			'acfe_group_modal_button' => '',
			'acfe_group_modal_size' => 'large',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => false,
	'description' => '',
	'show_in_rest' => 0,
	'acfe_autosync' => array(
		0 => 'php',
	),
	'acfe_form' => 0,
	'acfe_display_title' => '',
	'acfe_meta' => '',
	'acfe_note' => '',
	'modified' => 1723797869,
));

endif;