<?php

class P2P_User_Query {

	function init() {
		add_action( 'pre_user_query', array( __CLASS__, 'pre_user_query' ) );
	}

	function pre_user_query( $query ) {
		global $wpdb;

		$q =& $query->query_vars;

		P2P_Query::expand_shortcut_qv( $q );

		if ( !isset( $q['connected_items'] ) )
			return;

		$r = self::expand_connected_type( $q );

		if ( false === $r ) {
			$query->query_where = " AND 1=0";
			return;
		}

		// alter query

		$qv = P2P_Query::get_qv( $q );

		if ( empty( $qv['items'] ) )
			return;

		$map = array(
			'fields' => 'query_fields',
			'join' => 'query_from',
			'where' => 'query_where',
			'orderby' => 'query_orderby',
		);

		$clauses = array();

		foreach ( $map as $clause => $key )
			$clauses[$clause] = $query->$key;

		$clauses = P2P_Query::alter_clauses( $clauses, $qv, "$wpdb->users.ID" );

		if ( 0 !== strpos( $clauses['orderby'], 'ORDER BY ' ) )
			$clauses['orderby'] = 'ORDER BY ' . $clauses['orderby'];

		foreach ( $map as $clause => $key )
			$query->$key = $clauses[$clause];
	}

	// null means do nothing
	// false means trigger 404
	// true means found valid p2p query vars
	function expand_connected_type( &$q ) {
		if ( !isset( $q['connected_type'] ) )
			return;

		$ctype = p2p_type( _p2p_pluck( $q, 'connected_type' ) );

		if ( !$ctype )
			return false;

		if ( isset( $q['connected_direction'] ) )
			$directed = $ctype->set_direction( _p2p_pluck( $q, 'connected_direction' ) );
		else {
			$directed = P2P_Query::find_direction( $ctype, $q['connected_items'], 'user' );
		}

		if ( !$directed ) {
			trigger_error( "Can't determine direction", E_USER_WARNING );
			return false;
		}

		$q = $directed->get_connected_args( $q );

		return true;
	}
}

P2P_User_Query::init();

