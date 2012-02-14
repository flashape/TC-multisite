var Signal = signals.Signal;
	
var SignalContextClass = JS.Class({
	construct : function () {
        this.list = new Array();
    },

	onTicketTypeChange : function (event){
		//debug.log(event)
		debug.log("onTicketTypeChange : "+event.target.value)
		// Values:
		// 		2 - "Order - Event Catering"
		//		5 - "Order - Shipment"
		switch (event.target.value) {
			case "2":
				jQuery('#tc_crm_order_items').hide();
				jQuery('#tc_crm_event_catering_metabox').show();
				jQuery('#event_loadingShipping').hide();
				jQuery('#event_validatingCoupon').hide();
			break;
			case "5":
				jQuery('#tc_crm_order_items').show();
				jQuery('#tc_crm_event_catering_metabox').hide();
			break;

		}
		
	}
    
});