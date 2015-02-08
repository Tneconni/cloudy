<?php

class C_Core_Class{


    public static function get( $comicObj ){

        global $wpdb;

//        $defaults = array(
//            'page'              => 1,          // The current page
//            'per_page'          => 25,         // Activity items per page
//            'max'               => false,      // Max number of items to return
//            'sort'              => 'DESC',     // ASC or DESC
//            'exclude'           => false,      // Array of ids to exclude
//            'in'                => false,      // Array of ids to limit query by (IN)
//            'meta_query'        => false,      // Filter by activitymeta
//            'date_query'        => false,      // Filter by date
//            'filter'            => false,      // See self::get_filter_sql()
//            'search_terms'      => false,      // Terms to search by
//            'display_comments'  => false,      // Whether to include activity comments
//            'show_hidden'       => false,      // Show items marked hide_sitewide
//            'spam'              => 'ham_only', // Spam status
//            'update_meta_cache' => true,
//            'count_total'       => false,
//        );
//        $r = wp_parse_args( $args, $defaults );
//
//        extract( $r );



//        $select_sql = "SELECT DISTINCT a.*, u.user_email, u.user_nicename, u.user_login, u.display_name";
//        $from_sql   = " FROM {$comicObj->table_name} a LEFT JOIN {$wpdb->users} u ON a.user_id = u.ID";
//        $join_sql   = '';
//        $where_sql  = '';
//        $where_conditions = '';
//        $sort = '';
//        $where_conditions = apply_filters( 'bp_activity_get_where_conditions', $where_conditions, $r, $select_sql, $from_sql, $join_sql );
//
//        // Join the where conditions together
//        $where_sql = 'WHERE ' . join( ' AND ', $where_conditions );
//
//        if ( ! empty( $page ) && ! empty( $per_page ) ) {
//            $pag_sql    = $wpdb->prepare( "LIMIT %d, %d", absint( ( $page - 1 ) * $per_page ), $per_page );
//            $activities = $wpdb->get_results(
//                "{$select_sql} {$from_sql} {$join_sql} {$where_sql} ORDER BY a.date_recorded {$sort} {$pag_sql}"
//            );
//        } else {
//            $activities = $wpdb->get_results(
//                apply_filters( 'bp_activity_get_user_join_filter',
//                    "{$select_sql} {$from_sql} {$join_sql} {$where_sql} ORDER BY a.date_recorded {$sort}",
//                    $select_sql, $from_sql, $where_sql, $sort ) );
//        }

        $sql = "SELECT * FROM cmc_news ORDER BY news_id DESC LIMIT 0,20";
        $list = $wpdb->get_results( $sql );
//        print_r( $list );
        return $list;
    }

}