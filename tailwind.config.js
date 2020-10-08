module.exports = {
	future: {
		removeDeprecatedGapUtilities: true,
		purgeLayersByDefault: true,
	},
	purge: {
		mode: 'all',
		enabled: process.env.NODE_ENV == 'production',
		content: [
			'./app/resources/views/*.php',
			'./app/resources/views/**/*.php',
		],
	},
	theme: {
		extend: {
			rotate: {
				'-1': '-1deg',
				'-2': '-2deg',
				'-3': '-3deg',
				'-4': '-4deg',
			},
			inset: {
				'-1': '-.25rem',
				'-2': '-.5rem',
				'-3': '-.75rem',
				'-4': '-1rem',
			},
		},
	},
	variants: {},
	plugins: [require('tailwindcss'), require('@tailwindcss/ui')],
}
