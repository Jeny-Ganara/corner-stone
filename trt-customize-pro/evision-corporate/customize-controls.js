( function( api ) {

	// Extends our custom "evision-corporate" section.
	api.sectionConstructor['evision-corporate'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
