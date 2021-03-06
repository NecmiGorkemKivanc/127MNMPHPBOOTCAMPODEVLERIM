<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.4@b174585d1fe49ceed21928a945138948cb394600',
  'doctrine/annotations' => '1.13.2@5b668aef16090008790395c02c893b1ba13f7e08',
  'doctrine/cache' => '2.1.1@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/common' => '3.1.2@a036d90c303f3163b5be8b8fde9b6755b2be4a3a',
  'doctrine/dbal' => '3.1.3@96b0053775a544b4a6ab47654dac0621be8b4cf8',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.4.3@62a188ce2192e6b3b7a2019c26c5001778818b83',
  'doctrine/doctrine-migrations-bundle' => '3.2.0@7ad66566ecce0925786707654df15203782f583a',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.3.0@1967775546df997eb97057911d80184c91c92b9a',
  'doctrine/orm' => '2.10.1@f346379c7bf39a9f46771cfd9043e0eb2dd98793',
  'doctrine/persistence' => '2.2.2@4ce4712e6dc84a156176a0fbbb11954a25c93103',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'laminas/laminas-code' => '4.4.3@bb324850d09dd437b6acb142c13e64fdc725b0e1',
  'psr/cache' => '2.0.0@213f9dbc5b9bfbc4f8db86d2838dc968752ce13b',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/log' => '2.0.0@ef29f6d262798707a9edd554e2b82517ef3a9376',
  'sensio/framework-extra-bundle' => 'v6.2.0@3f5b6490878f8a70ba702e9692007cf979b42f0e',
  'symfony/asset' => 'v4.4.27@1910a978dbe03503d9ee72408e2fef7c4041d97d',
  'symfony/cache' => 'v4.4.31@4d9074f2777dfde2b78c5c60affa66c5e7518117',
  'symfony/cache-contracts' => 'v2.4.0@c0446463729b89dd4fa62e9aeecc80287323615d',
  'symfony/config' => 'v4.4.30@d9ea72de055cd822e5228ff898e2aad2f52f76b0',
  'symfony/console' => 'v4.4.30@a3f7189a0665ee33b50e9e228c46f50f5acbed22',
  'symfony/debug' => 'v4.4.31@43ede438d4cb52cd589ae5dc070e9323866ba8e0',
  'symfony/dependency-injection' => 'v4.4.31@75dd7094870feaa5be9ed2b6b1efcfc2b7d3b9b4',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/doctrine-bridge' => 'v4.4.31@5129c19ad55f28e52b84954f7e35d842f0134d59',
  'symfony/dotenv' => 'v4.4.29@2b078eff6268875f4639cf16e48e321982c671bb',
  'symfony/error-handler' => 'v4.4.30@51f98f7aa99f00f3b1da6bafe934e67ae6ba6dc5',
  'symfony/event-dispatcher' => 'v4.4.30@2fe81680070043c4c80e7cedceb797e34f377bac',
  'symfony/event-dispatcher-contracts' => 'v1.1.9@84e23fdcd2517bf37aecbd16967e83f0caee25a7',
  'symfony/filesystem' => 'v4.4.27@517fb795794faf29086a77d99eb8f35e457837a7',
  'symfony/finder' => 'v4.4.30@70362f1e112280d75b30087c7598b837c1b468b6',
  'symfony/flex' => 'v1.16.3@f05406b33681409b83285f4d2ff4efbca7c55b03',
  'symfony/form' => 'v4.4.31@e5aca09fd609cffa1c3470acca2c6f49ae53a5b9',
  'symfony/framework-bundle' => 'v4.4.31@cc936cd733d94e4752a26cfc25a4825724571765',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => 'v4.4.30@09b3202651ab23ac8dcf455284a48a3500e56731',
  'symfony/http-kernel' => 'v4.4.32@f7bda3ea8f05ae90627400e58af5179b25ce0f38',
  'symfony/inflector' => 'v4.4.27@2eb2095edc03a4f0780a417c2cf5b6f6ac5a7284',
  'symfony/intl' => 'v4.4.31@37c8fb0a3d4ccb7df5b9acf432bcf3fe6fbc7675',
  'symfony/mime' => 'v4.4.31@c4fd68f54f608c639ddebecfc61746a86134bf4a',
  'symfony/options-resolver' => 'v4.4.30@fa0b12a3a47ed25749d47d6b4f61412fd5ca1554',
  'symfony/polyfill-intl-icu' => 'v1.23.0@4a80a521d6176870b6445cfb469c130f9cae1dda',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.1@9174a3d80210dca8daa7f31fec659150bbeabfc6',
  'symfony/polyfill-php72' => 'v1.23.0@9a142215a36a3888e30d0a9eeea9766764e96976',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.1@1100343ed1a92e3a38f9ae122fc0eb21602547be',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/property-access' => 'v4.4.30@727edd3a5fd2feca1562e0f2520ed6888805c0fa',
  'symfony/proxy-manager-bridge' => 'v4.4.27@7731460a4e192b2377cae0592df4323fc5cd14ea',
  'symfony/routing' => 'v4.4.30@9ddf033927ad9f30ba2bfd167a7b342cafa13e8e',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/stopwatch' => 'v4.4.27@c85d997af06a58ba83e2d2538e335b894c24523d',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'symfony/twig-bridge' => 'v4.4.27@533c37d310d59ab84df8ca6815a581f92e7ffcf6',
  'symfony/twig-bundle' => 'v4.4.30@ebbfcb6977c0fc7fa6def39e48fde66a38125f80',
  'symfony/var-dumper' => 'v4.4.31@1f12cc0c2e880a5f39575c19af81438464717839',
  'symfony/var-exporter' => 'v4.4.31@ae5e31445bef9e27d0999ba2354dc04049508ede',
  'symfony/yaml' => 'v4.4.29@3abcc4db06d4e776825eaa3ed8ad924d5bc7432a',
  'twig/twig' => 'v3.3.3@a27fa056df8a6384316288ca8b0fa3a35fdeb569',
  'nikic/php-parser' => 'v4.13.0@50953a2691a922aa1769461637869a0a2faa3f53',
  'symfony/maker-bundle' => 'v1.34.1@c9ae401f3fa2b42881120d33ad79416630d1f2be',
  'paragonie/random_compat' => '2.*@',
  'symfony/polyfill-ctype' => '*@',
  'symfony/polyfill-iconv' => '*@',
  'symfony/polyfill-php71' => '*@',
  'symfony/polyfill-php70' => '*@',
  'symfony/polyfill-php56' => '*@',
  '__root__' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
