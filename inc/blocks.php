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
 * @param bool|string[] $allowed_block_types Array of block type slugs, or boolean to enable/disable all. Default true (all registered block types supported).
 * @param WP_Block_Editor_Context $editor_context The current block editor context.
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
		'core/audio',
		'core/avatar',
		'core/block',
		'core/button',
		'core/buttons',
		'core/calendar',
		'core/categories',
		'core/code',
		'core/column',
		'core/columns',
		'core/comment-author-name',
		'core/comment-content',
		'core/comment-date',
		'core/comment-edit-link',
		'core/comment-reply-link',
		'core/comment-template',
		'core/comments',
		'core/comments-pagination',
		'core/comments-pagination-next',
		'core/comments-pagination-numbers',
		'core/comments-pagination-previous',
		'core/comments-title',
		'core/cover',
		'core/embed',
		'core/file',
		'core/freeform',
		'core/gallery',
		'core/group',
		'core/heading',
		'core/home-link',
		'core/html',
		'core/image',
		'core/latest-comments',
		'core/latest-posts',
		'core/legacy-widget',
		'core/list',
		'core/list-item',
		'core/loginout',
		'core/media-text',
		'core/missing',
		'core/more',
		'core/navigation',
		'core/navigation-link',
		'core/navigation-submenu',
		'core/nextpage',
		'core/page-list',
		'core/paragraph',
		'core/pattern',
		'core/post-author',
		'core/post-author-biography',
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
		'core/preformatted',
		'core/pullquote',
		'core/query',
		'core/query-no-results',
		'core/query-pagination',
		'core/query-pagination-next',
		'core/query-pagination-numbers',
		'core/query-pagination-previous',
		'core/query-title',
		'core/quote',
		'core/read-more',
		'core/rss',
		'core/search',
		'core/separator',
		'core/shortcode',
		'core/site-logo',
		'core/site-tagline',
		'core/site-title',
		'core/social-link',
		'core/social-links',
		'core/spacer',
		'core/table',
		'core/tag-cloud',
		'core/template-part',
		'core/term-description',
		'core/text-columns',
		'core/verse',
		'core/video',
		'core/widget-group',
	];
}
