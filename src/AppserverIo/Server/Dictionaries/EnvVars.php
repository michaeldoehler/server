<?php

/**
 * \AppserverIo\Server\Dictionaries\EnvVars
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Bernhard Wick <bw@appserver.io>
 * @author    Johann Zelger <jz@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/server
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Server\Dictionaries;

/**
 * Class EnvVars
 *
 * @author    Bernhard Wick <bw@appserver.io>
 * @author    Johann Zelger <jz@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/server
 * @link      http://www.appserver.io
 */
class EnvVars
{
    /**
     * Returns all entries of that dictionary
     *
     * @return array
     */
    public static function all()
    {
        $refl = new \ReflectionClass(__CLASS__);
        return $refl->getConstants();
    }

    /**
     * Defines constant for HTTPS usage
     *
     * @var string
     */
    const HTTPS = 'HTTPS';

    /**
     * Defines constants for SSL cipher
     *
     * @var string
     */
    const SSL_CIPHER = 'SSL_CIPHER';
    const SSL_CIPHER_EXPORT = 'SSL_CIPHER_EXPORT';
    const SSL_CIPHER_USEKEYSIZE = 'SSL_CIPHER_USEKEYSIZE';
    const SSL_CIPHER_ALGKEYSIZE = 'SSL_CIPHER_ALGKEYSIZE';

    /**
     * Defines several other constants
     *
     * @var string
     */
    const SSL_COMPRESS_METHOD = 'SSL_COMPRESS_METHOD';
    const SSL_TLS_SNI = 'SSL_TLS_SNI';
    const SSL_PROTOCOL = 'SSL_PROTOCOL';
    const SSL_SESSION_ID = 'SSL_SESSION_ID';

    /**
     * Defines interface versions (mod_ssl and OpenSSL)
     *
     * @var string
     */
    const SSL_VERSION_INTERFACE = 'SSL_VERSION_INTERFACE';
    const SSL_VERSION_LIBRARY = 'SSL_VERSION_LIBRARY';

    /**
     * Defines client side constants
     *
     * Some constants have been uppercased to fit PSR-2!
     *
     * @var string
     */
    const SSL_CLIENT_M_VERSION = 'SSL_CLIENT_M_VERSION';
    const SSL_CLIENT_M_SERIAL = 'SSL_CLIENT_M_SERIAL';
    const SSL_CLIENT_S_DN = 'SSL_CLIENT_S_DN';
    const SSL_CLIENT_S_DN_X509 = 'SSL_CLIENT_S_DN_x509';
    const SSL_CLIENT_I_DN = 'SSL_CLIENT_I_DN';
    const SSL_CLIENT_I_DN_X509 = 'SSL_CLIENT_I_DN_x509';
    const SSL_CLIENT_V_START = 'SSL_CLIENT_V_START';
    const SSL_CLIENT_V_END = 'SSL_CLIENT_V_END';
    const SSL_CLIENT_V_REMAIN = 'SSL_CLIENT_V_REMAIN';
    const SSL_CLIENT_A_SIG = 'SSL_CLIENT_A_SIG';
    const SSL_CLIENT_A_KEY = 'SSL_CLIENT_A_KEY';
    const SSL_CLIENT_CERT = 'SSL_CLIENT_CERT';
    const SSL_CLIENT_CERT_CHAIN_N = 'SSL_CLIENT_CERT_CHAIN_n';
    const SSL_CLIENT_VERIFY = 'SSL_CLIENT_VERIFY';

    /**
     * Defines server side constants
     *
     * Some constants have been uppercased to fit PSR-2!
     *
     * @var string
     */
    const SSL_SERVER_M_VERSION = 'SSL_SERVER_M_VERSION';
    const SSL_SERVER_M_SERIAL = 'SSL_SERVER_M_SERIAL';
    const SSL_SERVER_S_DN = 'SSL_SERVER_S_DN';
    const SSL_SERVER_S_DN_X509 = 'SSL_SERVER_S_DN_x509';
    const SSL_SERVER_I_DN = 'SSL_SERVER_I_DN';
    const SSL_SERVER_I_DN_X509 = 'SSL_SERVER_I_DN_x509';
    const SSL_SERVER_V_START = 'SSL_SERVER_V_START';
    const SSL_SERVER_V_END = 'SSL_SERVER_V_END';
    const SSL_SERVER_A_SIG = 'SSL_SERVER_A_SIG';
    const SSL_SERVER_A_KEY = 'SSL_SERVER_A_KEY';
    const SSL_SERVER_CERT = 'SSL_SERVER_CERT';

    /**
     * Defines logger constants
     *
     * @var string
     */
    const LOGGER_SYSTEM = 'LOGGER_SYSTEM';
    const LOGGER_ACCESS = 'LOGGER_ACCESS';
}
