<?php
namespace Filipac;

class Ip {
  static public function get() {
        return self::_checks_ip();
  }

  private static function _checks_ip() {
        if($_SERVER) {
            if( isset($_SERVER["HTTP_X_FORWARDED_FOR"]) ) {
                return $_SERVER["HTTP_X_FORWARDED_FOR"];
            } else if( isset($_SERVER["HTTP_CLIENT_IP"]) ) {
                return $_SERVER["HTTP_CLIENT_IP"];
            } else if( isset($_SERVER["REMOTE_ADDR"]) ) {
                return $_SERVER["REMOTE_ADDR"];
            } else {
                return 'Error';
            }
        } else {
            if( getenv( 'HTTP_X_FORWARDED_FOR' ) ) {
                return getenv( 'HTTP_X_FORWARDED_FOR' );
            } else if( getenv( 'HTTP_CLIENT_IP' ) ) {
                return getenv( 'HTTP_CLIENT_IP' );
            } else if( getenv( 'REMOTE_ADDR' ) ) {
                return getenv( 'REMOTE_ADDR' );
            } else {
                return 'Error';
            }
        }
    }
}
