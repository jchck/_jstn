/*
	Put any custom JavaScript and/or init 3rd party plugins in this file

	This file will always be the last to be concatenated
*/

function init() {
  Tabletop.init( { key: 'https://docs.google.com/spreadsheets/d/0AmYzu_s7QHsmdDNZUzRlYldnWTZCLXdrMXlYQzVxSFE/pubhtml',
                   callback: function(data, tabletop) { 
                       console.log(data);
                   },
                   simpleSheet: true } );
}
window.addEventListener('DOMContentLoaded', init);