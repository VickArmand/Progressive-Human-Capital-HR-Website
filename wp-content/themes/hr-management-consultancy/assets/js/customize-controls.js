( function( api ) {

	// Extends our custom "hr-management-consultancy" section.
	api.sectionConstructor['hr-management-consultancy'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );