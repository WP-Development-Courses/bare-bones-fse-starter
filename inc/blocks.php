<?php
/**
 * Control the blocks available through the inserter.
 */

/**
 * Allow-list the block types available in the inserter.
 *
 * This means only the blocks that you allow will be shown. Defaults to all WordPress 6.0 blocks.
 * Different editors can be targeted using the $editor_context argument.
 *
 * See https://make.wordpress.org/core/2021/06/16/block-editor-api-changes-to-support-multiple-admin-screens-in-wp-5-8/
 *
 * @param bool|string[] Array of block type slugs, or boolean to enable/disable all. Default true (all registered block types supported).
 * @param WP_Block_Editor_Context The current block editor context.
 *
 * @return string[] List of allowed block type slugs.
 */
function bbfs_allow_list_available_blocks( $allowed_block_types, $editor_context ) {
	return bbfs_get_registered_core_blocks();
}
add_filter( 'allowed_block_types_all', 'bbfs_allow_list_available_blocks', 10, 2 );

/**
 * Get a list of the slugs of all Core blocks in WordPress 6.0.
 *
 * You can use this array as a basis for your own allow-lists.
 *
 * @return string[] List of Core block slugs.
 */
function bbfs_get_registered_core_blocks() {
	return [
		'core/archives',
		'core/avatar',
		'core/calendar',
		'core/categories',
		'core/comment-author-name',
		'core/comment-content',
		'core/comment-date',
		'core/comment-edit-link',
		'core/comment-reply-link',
		'core/comment-template',
		'core/comments-pagination-next',
		'core/comments-pagination-numbers',
		'core/comments-pagination-previous',
		'core/comments-pagination',
		'core/comments-title',
		'core/cover',
		'core/file',
		'core/gallery',
		'core/home-link',
		'core/image',
		'core/latest-comments',
		'core/latest-posts',
		'core/legacy-widget',
		'core/loginout',
		'core/navigation-link',
		'core/navigation-submenu',
		'core/navigation',
		'core/page-list',
		'core/pattern',
		'core/post-author-biography',
		'core/post-author',
		'core/post-comments',
		'core/post-comments-form',
		'core/post-content',
		'core/post-date',
		'core/post-excerpt',
		'core/post-featured-image',
		'core/post-navigation-link',
		'core/post-template',
		'core/post-terms',
		'core/post-title',
		'core/query-no-results',
		'core/query-pagination-next',
		'core/query-pagination-numbers',
		'core/query-pagination-previous',
		'core/query-pagination',
		'core/query-title',
		'core/query',
		'core/read-more',
		'core/rss',
		'core/search',
		'core/shortcode',
		'core/site-logo',
		'core/site-tagline',
		'core/site-title',
		'core/social-link',
		'core/tag-cloud',
		'core/template-part',
		'core/term-description',
		'core/widget-group',
		'core/audio',
		'core/button',
		'core/buttons',
		'core/code',
		'core/column',
		'core/columns',
		'core/comments-query-loop',
		'core/embed',
		'core/freeform',
		'core/group',
		'core/heading',
		'core/html',
		'core/list',
		'core/media-text',
		'core/missing',
		'core/more',
		'core/nextpage',
		'core/paragraph',
		'core/preformatted',
		'core/pullquote',
		'core/quote',
		'core/separator',
		'core/social-links',
		'core/spacer',
		'core/table',
		'core/text-columns',
		'core/verse',
		'core/video',
	];
}
