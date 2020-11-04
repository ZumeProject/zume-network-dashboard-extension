<?php
/**
 * Plugin Name: Zúme - Network Dashboard Extension
 * Plugin URI: https://github.com/ZumeProject/zume-network-dashboard-extension
 * Description: This plugin adds to the network dashboard, Zúme specific actions to be tracked.
 * Version:  0.1.0
 * Author URI: https://github.com/ZumeProject
 * GitHub Plugin URI: https://github.com/ZumeProject/zume-network-dashboard-extension
 * Requires at least: 4.7.0
 * (Requires 4.7+ because of the integration of the REST API at 4.7 and the security requirements of this milestone version.)
 * Tested up to: 5.5
 *
 * @package Disciple_Tools
 * @link    https://github.com/DiscipleTools
 * @license GPL-2.0 or later
 *          https://www.gnu.org/licenses/gpl-2.0.html
 */

if ( ! defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly

/**
 * REGISTER ACTIONS (AND CATEGORIES)
 */
add_action( 'dt_network_dashboard_register_actions', 'dt_network_dashboard_register_action_zume_keys', 30, 1 );
function dt_network_dashboard_register_action_zume_keys( $actions ){

    $actions['studying_1'] = [
        'key' => 'studying_1',
        'label' => 'Studying 1',
        'message_pattern' => []
    ];
    $actions['studying_2'] = [
        'key' => 'studying_2',
        'label' => 'Studying 2',
        'message_pattern' => []
    ];
    $actions['studying_3'] = [
        'key' => 'studying_3',
        'label' => 'Studying 3',
        'message_pattern' => []
    ];
    $actions['studying_4'] = [
        'key' => 'studying_4',
        'label' => 'Studying 4',
        'message_pattern' => []
    ];
    $actions['studying_5'] = [
        'key' => 'studying_5',
        'label' => 'Studying 5',
        'message_pattern' => []
    ];
    $actions['studying_6'] = [
        'key' => 'studying_6',
        'label' => 'Studying 6',
        'message_pattern' => []
    ];
    $actions['studying_7'] = [
        'key' => 'studying_7',
        'label' => 'Studying 7',
        'message_pattern' => []
    ];
    $actions['studying_8'] = [
        'key' => 'studying_8',
        'label' => 'Studying 8',
        'message_pattern' => []
    ];
    $actions['studying_9'] = [
        'key' => 'studying_9',
        'label' => 'Studying 9',
        'message_pattern' => []
    ];
    $actions['studying_10'] = [
        'key' => 'studying_10',
        'label' => 'Studying 10',
        'message_pattern' => []
    ];
    $actions['studying_11'] = [
        'key' => 'studying_11',
        'label' => 'Studying 11',
        'message_pattern' => []
    ];
    $actions['studying_12'] = [
        'key' => 'studying_12',
        'label' => 'Studying 12',
        'message_pattern' => []
    ];
    $actions['studying_13'] = [
        'key' => 'studying_13',
        'label' => 'Studying 13',
        'message_pattern' => []
    ];
    $actions['studying_14'] = [
        'key' => 'studying_14',
        'label' => 'Studying 14',
        'message_pattern' => []
    ];
    $actions['studying_15'] = [
        'key' => 'studying_15',
        'label' => 'Studying 15',
        'message_pattern' => []
    ];
    $actions['studying_16'] = [
        'key' => 'studying_16',
        'label' => 'Studying 16',
        'message_pattern' => []
    ];
    $actions['studying_17'] = [
        'key' => 'studying_17',
        'label' => 'Studying 17',
        'message_pattern' => []
    ];
    $actions['studying_18'] = [
        'key' => 'studying_18',
        'label' => 'Studying 18',
        'message_pattern' => []
    ];
    $actions['studying_19'] = [
        'key' => 'studying_19',
        'label' => 'Studying 19',
        'message_pattern' => []
    ];
    $actions['studying_20'] = [
        'key' => 'studying_20',
        'label' => 'Studying 20',
        'message_pattern' => []
    ];
    $actions['studying_21'] = [
        'key' => 'studying_21',
        'label' => 'Studying 21',
        'message_pattern' => []
    ];
    $actions['studying_22'] = [
        'key' => 'studying_22',
        'label' => 'Studying 22',
        'message_pattern' => []
    ];
    $actions['studying_23'] = [
        'key' => 'studying_23',
        'label' => 'Studying 23',
        'message_pattern' => []
    ];
    $actions['studying_24'] = [
        'key' => 'studying_24',
        'label' => 'Studying 24',
        'message_pattern' => []
    ];
    $actions['studying_25'] = [
        'key' => 'studying_25',
        'label' => 'Studying 25',
        'message_pattern' => []
    ];
    $actions['studying_26'] = [
        'key' => 'studying_26',
        'label' => 'Studying 26',
        'message_pattern' => []
    ];
    $actions['studying_27'] = [
        'key' => 'studying_27',
        'label' => 'Studying 27',
        'message_pattern' => []
    ];
    $actions['studying_28'] = [
        'key' => 'studying_28',
        'label' => 'Studying 28',
        'message_pattern' => []
    ];
    $actions['studying_29'] = [
        'key' => 'studying_29',
        'label' => 'Studying 29',
        'message_pattern' => []
    ];
    $actions['studying_30'] = [
        'key' => 'studying_30',
        'label' => 'Studying 30',
        'message_pattern' => []
    ];
    $actions['studying_31'] = [
        'key' => 'studying_31',
        'label' => 'Studying 31',
        'message_pattern' => []
    ];
    $actions['studying_32'] = [
        'key' => 'studying_32',
        'label' => 'Studying 32',
        'message_pattern' => []
    ];



    $actions['leading_1'] = [
        'key' => 'leading_1',
        'label' => 'Leading 1',
        'message_pattern' => []
    ];
    $actions['leading_2'] = [
        'key' => 'leading_2',
        'label' => 'Leading 2',
        'message_pattern' => []
    ];
    $actions['leading_3'] = [
        'key' => 'leading_3',
        'label' => 'Leading 3',
        'message_pattern' => []
    ];
    $actions['leading_4'] = [
        'key' => 'leading_4',
        'label' => 'Leading 4',
        'message_pattern' => []
    ];
    $actions['leading_5'] = [
        'key' => 'leading_5',
        'label' => 'Leading 5',
        'message_pattern' => []
    ];
    $actions['leading_6'] = [
        'key' => 'leading_6',
        'label' => 'Leading 6',
        'message_pattern' => []
    ];
    $actions['leading_7'] = [
        'key' => 'leading_7',
        'label' => 'Leading 7',
        'message_pattern' => []
    ];
    $actions['leading_8'] = [
        'key' => 'leading_8',
        'label' => 'Leading 8',
        'message_pattern' => []
    ];
    $actions['leading_9'] = [
        'key' => 'leading_9',
        'label' => 'Leading 9',
        'message_pattern' => []
    ];
    $actions['leading_10'] = [
        'key' => 'leading_10',
        'label' => 'Leading 10',
        'message_pattern' => []
    ];

    $actions['zume_training'] = [
        'key' => 'zume_training',
        'label' => 'Registered for Training',
        'message_pattern' => []
    ];
    $actions['zume_vision'] = [
        'key' => 'zume_vision',
        'label' => 'Joined Vision',
        'message_pattern' => []
    ];
    $actions['updated_3_month'] = [
        'key' => 'updated_3_month',
        'label' => 'Updated 3 Month Plan',
        'message_pattern' => []
    ];

    return $actions;
}

/**
 * READ LOG
 */
add_filter( 'dt_network_dashboard_build_message', 'zume_log_actions', 10, 1 );
function zume_log_actions( $activity_log ){

    foreach ( $activity_log as $index => $log ){

        /* new_baptism */
        if ( 'studying' === substr( $log['action'], 0, 8 ) ) {
            $initials = zume_action_create_initials( $log['lng'], $log['lat'], $log['payload'] );
            $activity_log[$index]['message'] = $initials . ' is studying "' . $log['payload']['title'] . '"';
        }

        if ( 'leading' === substr( $log['action'], 0, 7 ) ) {
            $initials = zume_action_create_initials( $log['lng'], $log['lat'], $log['payload'] );
            $activity_log[$index]['message'] = $initials . ' is leading a group through session '. str_replace( '_', '', substr( $log['action'], -2, 2 ) ).'!';
        }

        if ( 'zume_training' === $log['action'] && 'joining' === $log['category'] ) {
            $initials = zume_action_create_initials( $log['lng'], $log['lat'], $log['payload'] );
            $activity_log[$index]['message'] = $initials . ' is registering for Zúme Training! ';
        }

        if ( 'zume_vision' === $log['action'] && 'joining' === $log['category'] ) {
            $initials = zume_action_create_initials( $log['lng'], $log['lat'], $log['payload'] );
            $activity_log[$index]['message'] = $initials . ' is registering for Zúme Community! ';
        }

        if ( 'updated_3_month' === $log['action'] ) {
            $initials = zume_action_create_initials( $log['lng'], $log['lat'], $log['payload'] );
            $activity_log[$index]['message'] = $initials . ' is updating there Zúme Training 3 month plan! ';
        }
    }

    return $activity_log;
}

function zume_action_create_initials( $longitude, $latitude, $payload ) : string {
    $letters = [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'N', 'S',
        'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V', 'W', 'E', 'A', 'R', 'I',
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'D', 'E',
        'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V', 'W', 'E', 'A', 'R', 'I',
        'E', 'A', 'R', 'I', 'T', 'N', 'S', 'L', 'E', 'A', 'R', 'I', 'N', 'S',
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'C', 'D',
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'A', 'B',
        'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V', 'W', 'E', 'A', 'R', 'I',
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'A', 'B',
        'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'E', 'A', 'R',
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'N', 'S',
        'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V', 'W', 'E', 'A', 'R', 'I',
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'D', 'E',
        'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V', 'W', 'E', 'A', 'R', 'I',
        'E', 'A', 'R', 'I', 'T', 'N', 'S', 'L', 'E', 'A', 'R', 'I', 'N', 'S',
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'C', 'D',
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'A', 'B',
        'E', 'A', 'R', 'I', 'T', 'N', 'S', 'L', 'E', 'A', 'R', 'I', 'N', 'S',
        'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V', 'W', 'E', 'A', 'R', 'I',
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'N', 'S',
    ];
    $fnum = abs( round( $longitude ) );
    $lnum = abs( round( $latitude ) );
    $list = str_split( hash( 'sha256', maybe_serialize( $payload ) ) );
    foreach( $list as $character ){
        if ( is_numeric( $character ) ) {
            $fnum = $fnum + $character;
            $lnum = $lnum + $character;
            break;
        }
    }
    return strtoupper( $letters[$fnum] . $letters[$lnum] );
}