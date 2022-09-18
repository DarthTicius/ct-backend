const colors = require('tailwindcss/colors');
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
	mode: 'jit',
	content: [
		'./resources/**/*.blade.php',
		"./resources/**/*.js",
	],
	theme: {
		extend: {
			screens: {
				'1.5xl': '1440px',
				// => @media (min-width: 1440px) { ... }
			},
			maxWidth: {
				'1.5xl': '1440px',
			}
		},
	},
	plugins: [
		require('@tailwindcss/forms'),
		require('@tailwindcss/typography'),
		require('@tailwindcss/aspect-ratio'),
	],
}
