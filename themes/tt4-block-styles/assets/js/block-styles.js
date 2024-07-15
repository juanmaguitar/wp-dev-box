// The CSS for this block style is located in the `style.css` file.
wp.blocks.registerBlockStyle( 'core/quote', {
	name: 'hand-drawn-blue',
	label: wp.i18n.__( 'HD Blue', 'tt4-block-styles' ),
} );

// Register the Book Author variation.
wp.blocks.registerBlockVariation( 'core/quote', {
	name: 'wp-dev-box/hand-written',
	title: wp.i18n.__( 'Hand Written Quote', 'tt4-block-styles' ),
	description: wp.i18n.__( 'Hand Written Quote.', 'tt4-block-styles' ),
	category: 'widgets',
	keywords: [ 'quote', 'custom' ],
	scope: [ 'inserter' ],
	attributes: {
		className: 'default-hand-drawn-black',
	},
	example: {},
	// Note that we have to check for the specific binding key to determine
	// if the variation is active.
	isActive: ( blockAttributes ) =>
		'is-style-hand-drawn-black' === blockAttributes?.className,
} );
