// Get current theme
var theme = localStorage.getItem( 'theme' );
// Set defaults if theme is not defined.
if ( ! theme ) {
  localStorage.setItem( 'theme', 'dark' );
  theme = 'dark';
}
// Add theme to the body.
document.body.classList.add( theme );

// Handle onClick events
document.getElementById( 'theme-toggle' ).addEventListener( 'click', () => {
  // Cleanup classes from body.
  document.body.classList.remove( 'light' );
  document.body.classList.remove( 'dark' );
  // Change the theme.
  theme = ( theme === 'dark' ) ? 'light' : 'dark';
  // Save the theme.
  localStorage.setItem( 'theme', theme );
  // Apply the theme.
  document.body.classList.add( theme );
});