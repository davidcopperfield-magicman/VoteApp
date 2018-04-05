<?php

	/**
	 *  YOURCOIN PARAMETERS
	 */
	class AssetParams
	{
		const INIT_QTY = 1;
		const ASSET_NAME = "yourcoin";
	}

	/**
	 *  Explorer Parameters
	 */
	class ExplorerParams
	{

		public static $hostName;
		public static $PORT;
		public static $CHAIN_NAME;
		public static $TX_URL_PREFIX;
		public static $BLOCK_URL_PREFIX;
		public static $ADDRESS_URL_PREFIX;

		public static function init(){
	        self::$hostName = $_SERVER['SERVER_ADDR'];
			self::$PORT = "2750";
			self::$CHAIN_NAME = "Yobichain";
			self::$TX_URL_PREFIX = "http://".self::$hostName.":".self::$PORT."/".self::$CHAIN_NAME."/tx/";
			self::$BLOCK_URL_PREFIX = "http://".self::$hostName.":".self::$PORT."/".self::$CHAIN_NAME."/block/";
			self::$ADDRESS_URL_PREFIX = "http://".self::$hostName.":".self::$PORT."/".self::$CHAIN_NAME."/address/";
	    }
	}

	ExplorerParams::init();


	/**
	* Web server parameters
	*/
	class WebServerParams
	{
		public static $hostName;				// IP address or Host Name of the Web Server
		const PRIMECHAIN_ROOT_DIR = "apps";	// Root directory of Apps

		public static function init(){
	        self::$hostName = $_SERVER['SERVER_ADDR'];
	    }
	}
	WebServerParams::init();


	/**
	* MULTICHAIN PARAMETERS
	*/
	class MultichainParams
	{
		const HOST_NAME = "localhost";
		const RPC_PORT = "6820";
		const RPC_USER = "multichainrpc";
		const RPC_PASSWORD = "CYw4pp91TF3Tm8pNhgbu4hFgZiRQNccbCnGhHXRuhfee";
		const MANAGER_ADDRESS = "1Mdqxe9WaiQLKnCorD7Ncu2VxZq9Cefn9qPKR4";

		const USER_STREAMS = array(
				"USERS_CREDENTIALS" => "users_credentials",
				"USERS_DETAILS" => "users_details",
				"USERS_ADDRESSES" => "users_addresses",
				"USERS_SESSION" => "users_session"
			);

		const CONTRACT_STREAMS = array(
				"CONTRACT_DETAILS" => "contract_details",
				"CONTRACT_FILES" => "contract_files",
				"CONTRACT_SIGNATURES" => "contract_signatures",
				"CONTRACTS_SIGNED" => "contracts_signed",
				"CONTRACT_INVITED_SIGNEES" => "contract_invited_signees"
			);

		const VAULT_STREAMS = array(
				"DATA" => "vault"
			);
	}

?>
