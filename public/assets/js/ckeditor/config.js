/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	 config.language = 'ar';
	 config.height = 500;
	 config.autoEmbed_widget = 'customEmbed';

	 config.allowedContent = true;
	 config.toolbar = [
		 {name: 'tools', items: ['Source', 'Maximize']},
		 {name: 'clipboard', items: ['Undo', 'Redo', 'Paste', 'PasteText', 'PasteFromWord']},
		 {name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize', 'TextColor', 'BGColor']},
		 {name: 'basicstyles', items: ['Bold', 'Italic', 'Strike', '-', 'RemoveFormat']},
		 {
			 name: 'paragraph',
			 items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
		 },
		 {name: 'links', items: ['Link', 'Unlink']},
		 {name: 'insert', items: ['Image', 'Table', 'Youtube']},
	 ];


};
