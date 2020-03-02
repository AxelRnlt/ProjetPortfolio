<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'doctrine/annotations' => 'v1.8.0@904dca4eb10715b92569fbcd79e201d5c349b6bc',
  'doctrine/cache' => '1.10.0@382e7f4db9a12dc6c19431743a2b096041bcdd62',
  'doctrine/collections' => '1.6.4@6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7',
  'doctrine/common' => '2.12.0@2053eafdf60c2172ee1373d1b9289ba1db7f1fc6',
  'doctrine/dbal' => 'v2.10.1@c2b8e6e82732a64ecde1cddf9e1e06cb8556e3d8',
  'doctrine/doctrine-bundle' => '2.0.7@6926771140ee87a823c3b2c72602de9dda4490d3',
  'doctrine/doctrine-migrations-bundle' => '2.1.2@856437e8de96a70233e1f0cc2352fc8dd15a899d',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'doctrine/lexer' => '1.2.0@5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6',
  'doctrine/migrations' => '2.2.1@a3987131febeb0e9acb3c47ab0df0af004588934',
  'doctrine/orm' => 'v2.7.0@4d763ca4c925f647b248b9fa01b5f47aa3685d62',
  'doctrine/persistence' => '1.3.6@5dd3ac5eebef2d0b074daa4440bb18f93132dee4',
  'doctrine/reflection' => 'v1.1.0@bc420ead87fdfe08c03ecc3549db603a45b06d4c',
  'friendsofsymfony/ckeditor-bundle' => '2.2.0@7e1cfe2a83faba0be02661d44289d35e940bb5ea',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'monolog/monolog' => '1.25.3@fa82921994db851a8becaf3787a9e73c5976b6f1',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/log' => '1.1.2@446d54b4cb6bf489fc9d75f55843658e6f25d801',
  'sensio/framework-extra-bundle' => 'v5.5.3@98f0807137b13d0acfdf3c255a731516e97015de',
  'symfony/apache-pack' => 'v1.0.1@3aa5818d73ad2551281fc58a75afd9ca82622e6c',
  'symfony/asset' => 'v4.4.4@2c67c89d064bfb689ea6bc41217c87100bb94c17',
  'symfony/cache' => 'v4.4.2@6af64bab165e588300378a87bcd2df3c7c31c144',
  'symfony/cache-contracts' => 'v2.0.1@23ed8bfc1a4115feca942cb5f1aacdf3dcdf3c16',
  'symfony/config' => 'v4.4.4@4d3979f54472637169080f802dc82197e21fdcce',
  'symfony/console' => 'v4.4.2@82437719dab1e6bdd28726af14cb345c2ec816d0',
  'symfony/debug' => 'v4.4.4@20236471058bbaa9907382500fc14005c84601f0',
  'symfony/dependency-injection' => 'v4.4.4@ec60a7d12f5e8ab0f99456adce724717d9c1784a',
  'symfony/doctrine-bridge' => 'v4.4.2@3e40beb8dbb06d2967e37938f4c3f20f425137a6',
  'symfony/dotenv' => 'v4.4.2@c387ab37887f997162a8579d335b38f328d27859',
  'symfony/error-handler' => 'v4.4.4@d2721499ffcaf246a743e01cdf6696d3d5dd74c1',
  'symfony/event-dispatcher' => 'v4.4.4@9e3de195e5bc301704dd6915df55892f6dfc208b',
  'symfony/event-dispatcher-contracts' => 'v1.1.7@c43ab685673fb6c8d84220c77897b1d6cdbe1d18',
  'symfony/expression-language' => 'v4.4.4@8b145496d7e2e7103b1a1b8f1fce81c6e084b380',
  'symfony/filesystem' => 'v4.4.4@266c9540b475f26122b61ef8b23dd9198f5d1cfd',
  'symfony/finder' => 'v4.4.2@ce8743441da64c41e2a667b8eb66070444ed911e',
  'symfony/flex' => 'v1.6.0@952f45d1c5077e658cb16a61d11603bee873f968',
  'symfony/form' => 'v4.4.3@442d561fa10841183f94909830d9d27bd9cf7f77',
  'symfony/framework-bundle' => 'v4.4.2@c80526b4c22f6ddc23080225bf276f094d2c398e',
  'symfony/http-foundation' => 'v4.4.4@491a20dfa87e0b3990170593bc2de0bb34d828a5',
  'symfony/http-kernel' => 'v4.4.4@62116a9c8fb15faabb158ad9cb785c353c2572e5',
  'symfony/inflector' => 'v4.4.4@f419ab2853cc00471ffd7fc18e544b5f5a90adb1',
  'symfony/intl' => 'v4.4.2@727fed5372915b5ea5e8177070f5e7e547063f24',
  'symfony/mime' => 'v4.4.4@225034620ecd4b34fd826e9983d85e2b7a359094',
  'symfony/monolog-bridge' => 'v4.4.2@da3718c84f29d4b1ef607e2a13c496186a5975c1',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/options-resolver' => 'v4.4.2@2be23e63f33de16b49294ea6581f462932a77e2f',
  'symfony/orm-pack' => 'v1.0.7@c57f5e05232ca40626eb9fa52a32bc8565e9231c',
  'symfony/polyfill-intl-icu' => 'v1.13.1@b3dffd68afa61ca70f2327f2dd9bbeb6aa53d70b',
  'symfony/polyfill-intl-idn' => 'v1.13.1@6f9c239e61e1b0c9229a28ff89a812dc449c3d46',
  'symfony/polyfill-mbstring' => 'v1.13.1@7b4aab9743c30be783b73de055d24a39cf4b954f',
  'symfony/polyfill-php72' => 'v1.13.1@66fea50f6cb37a35eea048d75a7d99a45b586038',
  'symfony/polyfill-php73' => 'v1.13.1@4b0e2222c55a25b4541305a053013d5647d3a25f',
  'symfony/property-access' => 'v4.4.4@090b4bc92ded1ec512f7e2ed1691210769dffdb3',
  'symfony/routing' => 'v4.4.2@628bcafae1b2043969378dcfbf9c196539a38722',
  'symfony/security-bundle' => 'v4.4.2@9bf16458fee90bd62c240625dd94e335bad91885',
  'symfony/security-core' => 'v4.4.2@52709ee2aafd13d777253d510d96fbf2ccc5a578',
  'symfony/security-csrf' => 'v4.4.2@aeed1a2315019b5a090f5ad34c01f1935ea9b757',
  'symfony/security-guard' => 'v4.4.2@203a81f9fcfc3bbaba7f1103c261a30d2648611b',
  'symfony/security-http' => 'v4.4.2@8ab510f214fd9c37769378b5036da58d444fe142',
  'symfony/service-contracts' => 'v2.0.1@144c5e51266b281231e947b51223ba14acf1a749',
  'symfony/stopwatch' => 'v4.4.2@5745b514fc56ae1907c6b8ed74f94f90f64694e9',
  'symfony/translation-contracts' => 'v2.0.1@8cc682ac458d75557203b2f2f14b0b92e1c744ed',
  'symfony/twig-bridge' => 'v4.4.2@936cf6f5b973377345e8ac43870987ef8e747ce3',
  'symfony/twig-bundle' => 'v4.4.2@a6e7bd9731256a55b2270c1283de8bc3bda06e8f',
  'symfony/twig-pack' => 'v1.0.0@8b278ea4b61fba7c051f172aacae6d87ef4be0e0',
  'symfony/validator' => 'v4.4.3@2f3ec17a371cc56b3a2855b5eae0702f70611e81',
  'symfony/var-dumper' => 'v4.4.4@46b53fd714568af343953c039ff47b67ce8af8d6',
  'symfony/var-exporter' => 'v4.4.2@e566070effe60b8d16b99e958cdbd92aa2e470cb',
  'symfony/webpack-encore-bundle' => 'v1.7.2@787c2fdedde57788013339f05719c82ce07b6058',
  'symfony/yaml' => 'v4.4.2@a08832b974dd5fafe3085a66d41fe4c84bb2628c',
  'twig/extra-bundle' => 'v3.0.1@ce5c97dd566d9acd5d1fbd5eb76b6d264614725a',
  'twig/twig' => 'v3.0.1@28f856a4c57eeb24485916e8a68403f41a133616',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'doctrine/data-fixtures' => '1.4.2@39e9777c9089351a468f780b01cffa3cb0a42907',
  'doctrine/doctrine-fixtures-bundle' => '3.3.0@8f07fcfdac7f3591f3c4bf13a50cbae05f65ed70',
  'nikic/php-parser' => 'v4.3.0@9a9981c347c5c49d6dfe5cf826bb882b824080dc',
  'symfony/maker-bundle' => 'v1.14.3@c864e7f9b8d1e1f5f60acc3beda11299f637aded',
  'symfony/profiler-pack' => 'v1.0.4@99c4370632c2a59bb0444852f92140074ef02209',
  'symfony/web-profiler-bundle' => 'v4.4.3@ed97879da32ad20bbde838ce07ad5be97166f075',
  'paragonie/random_compat' => '2.*@577efa95bdc8022c8d61518fe7794c87cdc60315',
  'symfony/polyfill-ctype' => '*@577efa95bdc8022c8d61518fe7794c87cdc60315',
  'symfony/polyfill-iconv' => '*@577efa95bdc8022c8d61518fe7794c87cdc60315',
  'symfony/polyfill-php71' => '*@577efa95bdc8022c8d61518fe7794c87cdc60315',
  'symfony/polyfill-php70' => '*@577efa95bdc8022c8d61518fe7794c87cdc60315',
  'symfony/polyfill-php56' => '*@577efa95bdc8022c8d61518fe7794c87cdc60315',
  '__root__' => 'dev-master@577efa95bdc8022c8d61518fe7794c87cdc60315',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
