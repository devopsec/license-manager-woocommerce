<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8cb35c0c5c6a1d1abe8967cb5626ee52
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Svg\\' => 4,
            'Sabberworm\\CSS\\' => 15,
        ),
        'M' => 
        array (
            'Masterminds\\' => 12,
        ),
        'L' => 
        array (
            'LicenseManagerForWooCommerce\\Settings\\' => 38,
            'LicenseManagerForWooCommerce\\Repositories\\Resources\\' => 52,
            'LicenseManagerForWooCommerce\\Repositories\\' => 42,
            'LicenseManagerForWooCommerce\\Models\\Resources\\' => 46,
            'LicenseManagerForWooCommerce\\Models\\' => 36,
            'LicenseManagerForWooCommerce\\Lists\\' => 35,
            'LicenseManagerForWooCommerce\\Interfaces\\' => 40,
            'LicenseManagerForWooCommerce\\Integrations\\WooCommerce\\Emails\\' => 61,
            'LicenseManagerForWooCommerce\\Integrations\\WooCommerce\\' => 54,
            'LicenseManagerForWooCommerce\\Integrations\\' => 42,
            'LicenseManagerForWooCommerce\\Enums\\' => 35,
            'LicenseManagerForWooCommerce\\Controllers\\' => 41,
            'LicenseManagerForWooCommerce\\Api\\v2\\' => 36,
            'LicenseManagerForWooCommerce\\Api\\' => 33,
            'LicenseManagerForWooCommerce\\Abstracts\\' => 39,
            'LicenseManagerForWooCommerce\\' => 29,
        ),
        'F' => 
        array (
            'FontLib\\' => 8,
        ),
        'D' => 
        array (
            'Dompdf\\' => 7,
            'Defuse\\Crypto\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Svg\\' => 
        array (
            0 => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg',
        ),
        'Sabberworm\\CSS\\' => 
        array (
            0 => __DIR__ . '/..' . '/sabberworm/php-css-parser/src',
        ),
        'Masterminds\\' => 
        array (
            0 => __DIR__ . '/..' . '/masterminds/html5/src',
        ),
        'LicenseManagerForWooCommerce\\Settings\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/Settings',
        ),
        'LicenseManagerForWooCommerce\\Repositories\\Resources\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/Repositories/Resources',
        ),
        'LicenseManagerForWooCommerce\\Repositories\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/Repositories',
        ),
        'LicenseManagerForWooCommerce\\Models\\Resources\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/Models/Resources',
        ),
        'LicenseManagerForWooCommerce\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/Models',
        ),
        'LicenseManagerForWooCommerce\\Lists\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/Lists',
        ),
        'LicenseManagerForWooCommerce\\Interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/Interfaces',
        ),
        'LicenseManagerForWooCommerce\\Integrations\\WooCommerce\\Emails\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/Integrations/WooCommerce/Emails',
        ),
        'LicenseManagerForWooCommerce\\Integrations\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/Integrations/WooCommerce',
        ),
        'LicenseManagerForWooCommerce\\Integrations\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/Integrations',
        ),
        'LicenseManagerForWooCommerce\\Enums\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/Enums',
        ),
        'LicenseManagerForWooCommerce\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/Controllers',
        ),
        'LicenseManagerForWooCommerce\\Api\\v2\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/Api/V2',
        ),
        'LicenseManagerForWooCommerce\\Api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/Api',
        ),
        'LicenseManagerForWooCommerce\\Abstracts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/Abstracts',
        ),
        'LicenseManagerForWooCommerce\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'FontLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib',
        ),
        'Dompdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/dompdf/dompdf/src',
        ),
        'Defuse\\Crypto\\' => 
        array (
            0 => __DIR__ . '/..' . '/defuse/php-encryption/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Defuse\\Crypto\\Core' => __DIR__ . '/..' . '/defuse/php-encryption/src/Core.php',
        'Defuse\\Crypto\\Crypto' => __DIR__ . '/..' . '/defuse/php-encryption/src/Crypto.php',
        'Defuse\\Crypto\\DerivedKeys' => __DIR__ . '/..' . '/defuse/php-encryption/src/DerivedKeys.php',
        'Defuse\\Crypto\\Encoding' => __DIR__ . '/..' . '/defuse/php-encryption/src/Encoding.php',
        'Defuse\\Crypto\\Exception\\BadFormatException' => __DIR__ . '/..' . '/defuse/php-encryption/src/Exception/BadFormatException.php',
        'Defuse\\Crypto\\Exception\\CryptoException' => __DIR__ . '/..' . '/defuse/php-encryption/src/Exception/CryptoException.php',
        'Defuse\\Crypto\\Exception\\EnvironmentIsBrokenException' => __DIR__ . '/..' . '/defuse/php-encryption/src/Exception/EnvironmentIsBrokenException.php',
        'Defuse\\Crypto\\Exception\\IOException' => __DIR__ . '/..' . '/defuse/php-encryption/src/Exception/IOException.php',
        'Defuse\\Crypto\\Exception\\WrongKeyOrModifiedCiphertextException' => __DIR__ . '/..' . '/defuse/php-encryption/src/Exception/WrongKeyOrModifiedCiphertextException.php',
        'Defuse\\Crypto\\File' => __DIR__ . '/..' . '/defuse/php-encryption/src/File.php',
        'Defuse\\Crypto\\Key' => __DIR__ . '/..' . '/defuse/php-encryption/src/Key.php',
        'Defuse\\Crypto\\KeyOrPassword' => __DIR__ . '/..' . '/defuse/php-encryption/src/KeyOrPassword.php',
        'Defuse\\Crypto\\KeyProtectedByPassword' => __DIR__ . '/..' . '/defuse/php-encryption/src/KeyProtectedByPassword.php',
        'Defuse\\Crypto\\RuntimeTests' => __DIR__ . '/..' . '/defuse/php-encryption/src/RuntimeTests.php',
        'Dompdf\\Adapter\\CPDF' => __DIR__ . '/..' . '/dompdf/dompdf/src/Adapter/CPDF.php',
        'Dompdf\\Adapter\\GD' => __DIR__ . '/..' . '/dompdf/dompdf/src/Adapter/GD.php',
        'Dompdf\\Adapter\\PDFLib' => __DIR__ . '/..' . '/dompdf/dompdf/src/Adapter/PDFLib.php',
        'Dompdf\\Canvas' => __DIR__ . '/..' . '/dompdf/dompdf/src/Canvas.php',
        'Dompdf\\CanvasFactory' => __DIR__ . '/..' . '/dompdf/dompdf/src/CanvasFactory.php',
        'Dompdf\\Cellmap' => __DIR__ . '/..' . '/dompdf/dompdf/src/Cellmap.php',
        'Dompdf\\Cpdf' => __DIR__ . '/..' . '/dompdf/dompdf/lib/Cpdf.php',
        'Dompdf\\Css\\AttributeTranslator' => __DIR__ . '/..' . '/dompdf/dompdf/src/Css/AttributeTranslator.php',
        'Dompdf\\Css\\Color' => __DIR__ . '/..' . '/dompdf/dompdf/src/Css/Color.php',
        'Dompdf\\Css\\Style' => __DIR__ . '/..' . '/dompdf/dompdf/src/Css/Style.php',
        'Dompdf\\Css\\Stylesheet' => __DIR__ . '/..' . '/dompdf/dompdf/src/Css/Stylesheet.php',
        'Dompdf\\Dompdf' => __DIR__ . '/..' . '/dompdf/dompdf/src/Dompdf.php',
        'Dompdf\\Exception' => __DIR__ . '/..' . '/dompdf/dompdf/src/Exception.php',
        'Dompdf\\Exception\\ImageException' => __DIR__ . '/..' . '/dompdf/dompdf/src/Exception/ImageException.php',
        'Dompdf\\FontMetrics' => __DIR__ . '/..' . '/dompdf/dompdf/src/FontMetrics.php',
        'Dompdf\\Frame' => __DIR__ . '/..' . '/dompdf/dompdf/src/Frame.php',
        'Dompdf\\FrameDecorator\\AbstractFrameDecorator' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/AbstractFrameDecorator.php',
        'Dompdf\\FrameDecorator\\Block' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/Block.php',
        'Dompdf\\FrameDecorator\\Image' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/Image.php',
        'Dompdf\\FrameDecorator\\Inline' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/Inline.php',
        'Dompdf\\FrameDecorator\\ListBullet' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/ListBullet.php',
        'Dompdf\\FrameDecorator\\ListBulletImage' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/ListBulletImage.php',
        'Dompdf\\FrameDecorator\\NullFrameDecorator' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/NullFrameDecorator.php',
        'Dompdf\\FrameDecorator\\Page' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/Page.php',
        'Dompdf\\FrameDecorator\\Table' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/Table.php',
        'Dompdf\\FrameDecorator\\TableCell' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/TableCell.php',
        'Dompdf\\FrameDecorator\\TableRow' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/TableRow.php',
        'Dompdf\\FrameDecorator\\TableRowGroup' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/TableRowGroup.php',
        'Dompdf\\FrameDecorator\\Text' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/Text.php',
        'Dompdf\\FrameReflower\\AbstractFrameReflower' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/AbstractFrameReflower.php',
        'Dompdf\\FrameReflower\\Block' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/Block.php',
        'Dompdf\\FrameReflower\\Image' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/Image.php',
        'Dompdf\\FrameReflower\\Inline' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/Inline.php',
        'Dompdf\\FrameReflower\\ListBullet' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/ListBullet.php',
        'Dompdf\\FrameReflower\\NullFrameReflower' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/NullFrameReflower.php',
        'Dompdf\\FrameReflower\\Page' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/Page.php',
        'Dompdf\\FrameReflower\\Table' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/Table.php',
        'Dompdf\\FrameReflower\\TableCell' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/TableCell.php',
        'Dompdf\\FrameReflower\\TableRow' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/TableRow.php',
        'Dompdf\\FrameReflower\\TableRowGroup' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/TableRowGroup.php',
        'Dompdf\\FrameReflower\\Text' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/Text.php',
        'Dompdf\\Frame\\Factory' => __DIR__ . '/..' . '/dompdf/dompdf/src/Frame/Factory.php',
        'Dompdf\\Frame\\FrameListIterator' => __DIR__ . '/..' . '/dompdf/dompdf/src/Frame/FrameListIterator.php',
        'Dompdf\\Frame\\FrameTree' => __DIR__ . '/..' . '/dompdf/dompdf/src/Frame/FrameTree.php',
        'Dompdf\\Frame\\FrameTreeIterator' => __DIR__ . '/..' . '/dompdf/dompdf/src/Frame/FrameTreeIterator.php',
        'Dompdf\\Helpers' => __DIR__ . '/..' . '/dompdf/dompdf/src/Helpers.php',
        'Dompdf\\Image\\Cache' => __DIR__ . '/..' . '/dompdf/dompdf/src/Image/Cache.php',
        'Dompdf\\JavascriptEmbedder' => __DIR__ . '/..' . '/dompdf/dompdf/src/JavascriptEmbedder.php',
        'Dompdf\\LineBox' => __DIR__ . '/..' . '/dompdf/dompdf/src/LineBox.php',
        'Dompdf\\Options' => __DIR__ . '/..' . '/dompdf/dompdf/src/Options.php',
        'Dompdf\\PhpEvaluator' => __DIR__ . '/..' . '/dompdf/dompdf/src/PhpEvaluator.php',
        'Dompdf\\Positioner\\Absolute' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/Absolute.php',
        'Dompdf\\Positioner\\AbstractPositioner' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/AbstractPositioner.php',
        'Dompdf\\Positioner\\Block' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/Block.php',
        'Dompdf\\Positioner\\Fixed' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/Fixed.php',
        'Dompdf\\Positioner\\Inline' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/Inline.php',
        'Dompdf\\Positioner\\ListBullet' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/ListBullet.php',
        'Dompdf\\Positioner\\NullPositioner' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/NullPositioner.php',
        'Dompdf\\Positioner\\TableCell' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/TableCell.php',
        'Dompdf\\Positioner\\TableRow' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/TableRow.php',
        'Dompdf\\Renderer' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer.php',
        'Dompdf\\Renderer\\AbstractRenderer' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer/AbstractRenderer.php',
        'Dompdf\\Renderer\\Block' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer/Block.php',
        'Dompdf\\Renderer\\Image' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer/Image.php',
        'Dompdf\\Renderer\\Inline' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer/Inline.php',
        'Dompdf\\Renderer\\ListBullet' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer/ListBullet.php',
        'Dompdf\\Renderer\\TableCell' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer/TableCell.php',
        'Dompdf\\Renderer\\TableRowGroup' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer/TableRowGroup.php',
        'Dompdf\\Renderer\\Text' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer/Text.php',
        'FontLib\\AdobeFontMetrics' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/AdobeFontMetrics.php',
        'FontLib\\Autoloader' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Autoloader.php',
        'FontLib\\BinaryStream' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/BinaryStream.php',
        'FontLib\\EOT\\File' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/EOT/File.php',
        'FontLib\\EOT\\Header' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/EOT/Header.php',
        'FontLib\\EncodingMap' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/EncodingMap.php',
        'FontLib\\Exception\\FontNotFoundException' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Exception/FontNotFoundException.php',
        'FontLib\\Font' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Font.php',
        'FontLib\\Glyph\\Outline' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Glyph/Outline.php',
        'FontLib\\Glyph\\OutlineComponent' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Glyph/OutlineComponent.php',
        'FontLib\\Glyph\\OutlineComposite' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Glyph/OutlineComposite.php',
        'FontLib\\Glyph\\OutlineSimple' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Glyph/OutlineSimple.php',
        'FontLib\\Header' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Header.php',
        'FontLib\\OpenType\\File' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/OpenType/File.php',
        'FontLib\\OpenType\\TableDirectoryEntry' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/OpenType/TableDirectoryEntry.php',
        'FontLib\\Table\\DirectoryEntry' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/DirectoryEntry.php',
        'FontLib\\Table\\Table' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Table.php',
        'FontLib\\Table\\Type\\cmap' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/cmap.php',
        'FontLib\\Table\\Type\\glyf' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/glyf.php',
        'FontLib\\Table\\Type\\head' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/head.php',
        'FontLib\\Table\\Type\\hhea' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/hhea.php',
        'FontLib\\Table\\Type\\hmtx' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/hmtx.php',
        'FontLib\\Table\\Type\\kern' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/kern.php',
        'FontLib\\Table\\Type\\loca' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/loca.php',
        'FontLib\\Table\\Type\\maxp' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/maxp.php',
        'FontLib\\Table\\Type\\name' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/name.php',
        'FontLib\\Table\\Type\\nameRecord' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/nameRecord.php',
        'FontLib\\Table\\Type\\os2' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/os2.php',
        'FontLib\\Table\\Type\\post' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/post.php',
        'FontLib\\TrueType\\Collection' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/TrueType/Collection.php',
        'FontLib\\TrueType\\File' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/TrueType/File.php',
        'FontLib\\TrueType\\Header' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/TrueType/Header.php',
        'FontLib\\TrueType\\TableDirectoryEntry' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/TrueType/TableDirectoryEntry.php',
        'FontLib\\WOFF\\File' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/WOFF/File.php',
        'FontLib\\WOFF\\Header' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/WOFF/Header.php',
        'FontLib\\WOFF\\TableDirectoryEntry' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/WOFF/TableDirectoryEntry.php',
        'LicenseManagerForWooCommerce\\Abstracts\\IntegrationController' => __DIR__ . '/../..' . '/includes/Abstracts/IntegrationController.php',
        'LicenseManagerForWooCommerce\\Abstracts\\ResourceModel' => __DIR__ . '/../..' . '/includes/Abstracts/ResourceModel.php',
        'LicenseManagerForWooCommerce\\Abstracts\\ResourceRepository' => __DIR__ . '/../..' . '/includes/Abstracts/ResourceRepository.php',
        'LicenseManagerForWooCommerce\\Abstracts\\RestController' => __DIR__ . '/../..' . '/includes/Abstracts/RestController.php',
        'LicenseManagerForWooCommerce\\Abstracts\\Singleton' => __DIR__ . '/../..' . '/includes/Abstracts/Singleton.php',
        'LicenseManagerForWooCommerce\\AdminMenus' => __DIR__ . '/../..' . '/includes/AdminMenus.php',
        'LicenseManagerForWooCommerce\\AdminNotice' => __DIR__ . '/../..' . '/includes/AdminNotice.php',
        'LicenseManagerForWooCommerce\\Api\\Authentication' => __DIR__ . '/../..' . '/includes/Api/Authentication.php',
        'LicenseManagerForWooCommerce\\Api\\Setup' => __DIR__ . '/../..' . '/includes/Api/Setup.php',
        'LicenseManagerForWooCommerce\\Api\\V2\\Generators' => __DIR__ . '/../..' . '/includes/Api/V2/Generators.php',
        'LicenseManagerForWooCommerce\\Api\\V2\\Licenses' => __DIR__ . '/../..' . '/includes/Api/V2/Licenses.php',
        'LicenseManagerForWooCommerce\\Controllers\\ApiKey' => __DIR__ . '/../..' . '/includes/Controllers/ApiKey.php',
        'LicenseManagerForWooCommerce\\Controllers\\Dropdowns' => __DIR__ . '/../..' . '/includes/Controllers/Dropdowns.php',
        'LicenseManagerForWooCommerce\\Controllers\\Generator' => __DIR__ . '/../..' . '/includes/Controllers/Generator.php',
        'LicenseManagerForWooCommerce\\Controllers\\License' => __DIR__ . '/../..' . '/includes/Controllers/License.php',
        'LicenseManagerForWooCommerce\\Crypto' => __DIR__ . '/../..' . '/includes/Crypto.php',
        'LicenseManagerForWooCommerce\\Enums\\ActivationSource' => __DIR__ . '/../..' . '/includes/Enums/ActivationSource.php',
        'LicenseManagerForWooCommerce\\Enums\\ColumnType' => __DIR__ . '/../..' . '/includes/Enums/ColumnType.php',
        'LicenseManagerForWooCommerce\\Enums\\LicenseSource' => __DIR__ . '/../..' . '/includes/Enums/LicenseSource.php',
        'LicenseManagerForWooCommerce\\Enums\\LicenseStatus' => __DIR__ . '/../..' . '/includes/Enums/LicenseStatus.php',
        'LicenseManagerForWooCommerce\\Export' => __DIR__ . '/../..' . '/includes/Export.php',
        'LicenseManagerForWooCommerce\\Generator' => __DIR__ . '/../..' . '/includes/Generator.php',
        'LicenseManagerForWooCommerce\\Import' => __DIR__ . '/../..' . '/includes/Import.php',
        'LicenseManagerForWooCommerce\\Integrations\\WooCommerce\\Controller' => __DIR__ . '/../..' . '/includes/Integrations/WooCommerce/Controller.php',
        'LicenseManagerForWooCommerce\\Integrations\\WooCommerce\\Email' => __DIR__ . '/../..' . '/includes/Integrations/WooCommerce/Email.php',
        'LicenseManagerForWooCommerce\\Integrations\\WooCommerce\\Emails\\CustomerDeliverLicenseKeys' => __DIR__ . '/../..' . '/includes/Integrations/WooCommerce/Emails/CustomerDeliverLicenseKeys.php',
        'LicenseManagerForWooCommerce\\Integrations\\WooCommerce\\Emails\\CustomerPreorderComplete' => __DIR__ . '/../..' . '/includes/Integrations/WooCommerce/Emails/CustomerPreorderComplete.php',
        'LicenseManagerForWooCommerce\\Integrations\\WooCommerce\\Emails\\Templates' => __DIR__ . '/../..' . '/includes/Integrations/WooCommerce/Emails/Templates.php',
        'LicenseManagerForWooCommerce\\Integrations\\WooCommerce\\MyAccount' => __DIR__ . '/../..' . '/includes/Integrations/WooCommerce/MyAccount.php',
        'LicenseManagerForWooCommerce\\Integrations\\WooCommerce\\Order' => __DIR__ . '/../..' . '/includes/Integrations/WooCommerce/Order.php',
        'LicenseManagerForWooCommerce\\Integrations\\WooCommerce\\ProductData' => __DIR__ . '/../..' . '/includes/Integrations/WooCommerce/ProductData.php',
        'LicenseManagerForWooCommerce\\Integrations\\WooCommerce\\Stock' => __DIR__ . '/../..' . '/includes/Integrations/WooCommerce/Stock.php',
        'LicenseManagerForWooCommerce\\Interfaces\\IntegrationController' => __DIR__ . '/../..' . '/includes/Interfaces/IntegrationController.php',
        'LicenseManagerForWooCommerce\\Interfaces\\Model' => __DIR__ . '/../..' . '/includes/Interfaces/Model.php',
        'LicenseManagerForWooCommerce\\Interfaces\\ResourceRepository' => __DIR__ . '/../..' . '/includes/Interfaces/ResourceRepository.php',
        'LicenseManagerForWooCommerce\\Lists\\APIKeyList' => __DIR__ . '/../..' . '/includes/Lists/APIKeyList.php',
        'LicenseManagerForWooCommerce\\Lists\\ActivationsList' => __DIR__ . '/../..' . '/includes/Lists/ActivationsList.php',
        'LicenseManagerForWooCommerce\\Lists\\GeneratorsList' => __DIR__ . '/../..' . '/includes/Lists/GeneratorsList.php',
        'LicenseManagerForWooCommerce\\Lists\\LicensesList' => __DIR__ . '/../..' . '/includes/Lists/LicensesList.php',
        'LicenseManagerForWooCommerce\\Logger' => __DIR__ . '/../..' . '/includes/Logger.php',
        'LicenseManagerForWooCommerce\\Main' => __DIR__ . '/../..' . '/includes/Main.php',
        'LicenseManagerForWooCommerce\\Migration' => __DIR__ . '/../..' . '/includes/Migration.php',
        'LicenseManagerForWooCommerce\\Models\\Resources\\ApiKey' => __DIR__ . '/../..' . '/includes/Models/Resources/ApiKey.php',
        'LicenseManagerForWooCommerce\\Models\\Resources\\Generator' => __DIR__ . '/../..' . '/includes/Models/Resources/Generator.php',
        'LicenseManagerForWooCommerce\\Models\\Resources\\License' => __DIR__ . '/../..' . '/includes/Models/Resources/License.php',
        'LicenseManagerForWooCommerce\\Models\\Resources\\LicenseActivation' => __DIR__ . '/../..' . '/includes/Models/Resources/LicenseActivation.php',
        'LicenseManagerForWooCommerce\\Models\\Resources\\LicenseMeta' => __DIR__ . '/../..' . '/includes/Models/Resources/LicenseMeta.php',
        'LicenseManagerForWooCommerce\\Repositories\\PostMeta' => __DIR__ . '/../..' . '/includes/Repositories/PostMeta.php',
        'LicenseManagerForWooCommerce\\Repositories\\Resources\\ApiKey' => __DIR__ . '/../..' . '/includes/Repositories/Resources/ApiKey.php',
        'LicenseManagerForWooCommerce\\Repositories\\Resources\\Generator' => __DIR__ . '/../..' . '/includes/Repositories/Resources/Generator.php',
        'LicenseManagerForWooCommerce\\Repositories\\Resources\\License' => __DIR__ . '/../..' . '/includes/Repositories/Resources/License.php',
        'LicenseManagerForWooCommerce\\Repositories\\Resources\\LicenseActivations' => __DIR__ . '/../..' . '/includes/Repositories/Resources/LicenseActivations.php',
        'LicenseManagerForWooCommerce\\Repositories\\Resources\\LicenseMeta' => __DIR__ . '/../..' . '/includes/Repositories/Resources/LicenseMeta.php',
        'LicenseManagerForWooCommerce\\Repositories\\Users' => __DIR__ . '/../..' . '/includes/Repositories/Users.php',
        'LicenseManagerForWooCommerce\\Settings' => __DIR__ . '/../..' . '/includes/Settings.php',
        'LicenseManagerForWooCommerce\\Settings\\General' => __DIR__ . '/../..' . '/includes/Settings/General.php',
        'LicenseManagerForWooCommerce\\Settings\\Tools' => __DIR__ . '/../..' . '/includes/Settings/Tools.php',
        'LicenseManagerForWooCommerce\\Settings\\WooSettings' => __DIR__ . '/../..' . '/includes/Settings/WooSettings.php',
        'LicenseManagerForWooCommerce\\Setup' => __DIR__ . '/../..' . '/includes/Setup.php',
        'Masterminds\\HTML5' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5.php',
        'Masterminds\\HTML5\\Elements' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Elements.php',
        'Masterminds\\HTML5\\Entities' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Entities.php',
        'Masterminds\\HTML5\\Exception' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Exception.php',
        'Masterminds\\HTML5\\InstructionProcessor' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/InstructionProcessor.php',
        'Masterminds\\HTML5\\Parser\\CharacterReference' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/CharacterReference.php',
        'Masterminds\\HTML5\\Parser\\DOMTreeBuilder' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/DOMTreeBuilder.php',
        'Masterminds\\HTML5\\Parser\\EventHandler' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/EventHandler.php',
        'Masterminds\\HTML5\\Parser\\FileInputStream' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/FileInputStream.php',
        'Masterminds\\HTML5\\Parser\\InputStream' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/InputStream.php',
        'Masterminds\\HTML5\\Parser\\ParseError' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/ParseError.php',
        'Masterminds\\HTML5\\Parser\\Scanner' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/Scanner.php',
        'Masterminds\\HTML5\\Parser\\StringInputStream' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/StringInputStream.php',
        'Masterminds\\HTML5\\Parser\\Tokenizer' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/Tokenizer.php',
        'Masterminds\\HTML5\\Parser\\TreeBuildingRules' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/TreeBuildingRules.php',
        'Masterminds\\HTML5\\Parser\\UTF8Utils' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/UTF8Utils.php',
        'Masterminds\\HTML5\\Serializer\\HTML5Entities' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Serializer/HTML5Entities.php',
        'Masterminds\\HTML5\\Serializer\\OutputRules' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Serializer/OutputRules.php',
        'Masterminds\\HTML5\\Serializer\\RulesInterface' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Serializer/RulesInterface.php',
        'Masterminds\\HTML5\\Serializer\\Traverser' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Serializer/Traverser.php',
        'Sabberworm\\CSS\\CSSList\\AtRuleBlockList' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/CSSList/AtRuleBlockList.php',
        'Sabberworm\\CSS\\CSSList\\CSSBlockList' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/CSSList/CSSBlockList.php',
        'Sabberworm\\CSS\\CSSList\\CSSList' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/CSSList/CSSList.php',
        'Sabberworm\\CSS\\CSSList\\Document' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/CSSList/Document.php',
        'Sabberworm\\CSS\\CSSList\\KeyFrame' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/CSSList/KeyFrame.php',
        'Sabberworm\\CSS\\Comment\\Comment' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Comment/Comment.php',
        'Sabberworm\\CSS\\Comment\\Commentable' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Comment/Commentable.php',
        'Sabberworm\\CSS\\OutputFormat' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/OutputFormat.php',
        'Sabberworm\\CSS\\OutputFormatter' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/OutputFormatter.php',
        'Sabberworm\\CSS\\Parser' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Parser.php',
        'Sabberworm\\CSS\\Parsing\\OutputException' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Parsing/OutputException.php',
        'Sabberworm\\CSS\\Parsing\\ParserState' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Parsing/ParserState.php',
        'Sabberworm\\CSS\\Parsing\\SourceException' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Parsing/SourceException.php',
        'Sabberworm\\CSS\\Parsing\\UnexpectedEOFException' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Parsing/UnexpectedEOFException.php',
        'Sabberworm\\CSS\\Parsing\\UnexpectedTokenException' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Parsing/UnexpectedTokenException.php',
        'Sabberworm\\CSS\\Property\\AtRule' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Property/AtRule.php',
        'Sabberworm\\CSS\\Property\\CSSNamespace' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Property/CSSNamespace.php',
        'Sabberworm\\CSS\\Property\\Charset' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Property/Charset.php',
        'Sabberworm\\CSS\\Property\\Import' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Property/Import.php',
        'Sabberworm\\CSS\\Property\\KeyframeSelector' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Property/KeyframeSelector.php',
        'Sabberworm\\CSS\\Property\\Selector' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Property/Selector.php',
        'Sabberworm\\CSS\\Renderable' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Renderable.php',
        'Sabberworm\\CSS\\RuleSet\\AtRuleSet' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/RuleSet/AtRuleSet.php',
        'Sabberworm\\CSS\\RuleSet\\DeclarationBlock' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/RuleSet/DeclarationBlock.php',
        'Sabberworm\\CSS\\RuleSet\\RuleSet' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/RuleSet/RuleSet.php',
        'Sabberworm\\CSS\\Rule\\Rule' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Rule/Rule.php',
        'Sabberworm\\CSS\\Settings' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Settings.php',
        'Sabberworm\\CSS\\Value\\CSSFunction' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Value/CSSFunction.php',
        'Sabberworm\\CSS\\Value\\CSSString' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Value/CSSString.php',
        'Sabberworm\\CSS\\Value\\CalcFunction' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Value/CalcFunction.php',
        'Sabberworm\\CSS\\Value\\CalcRuleValueList' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Value/CalcRuleValueList.php',
        'Sabberworm\\CSS\\Value\\Color' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Value/Color.php',
        'Sabberworm\\CSS\\Value\\LineName' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Value/LineName.php',
        'Sabberworm\\CSS\\Value\\PrimitiveValue' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Value/PrimitiveValue.php',
        'Sabberworm\\CSS\\Value\\RuleValueList' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Value/RuleValueList.php',
        'Sabberworm\\CSS\\Value\\Size' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Value/Size.php',
        'Sabberworm\\CSS\\Value\\URL' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Value/URL.php',
        'Sabberworm\\CSS\\Value\\Value' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Value/Value.php',
        'Sabberworm\\CSS\\Value\\ValueList' => __DIR__ . '/..' . '/sabberworm/php-css-parser/src/Value/ValueList.php',
        'Svg\\CssLength' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/CssLength.php',
        'Svg\\DefaultStyle' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/DefaultStyle.php',
        'Svg\\Document' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Document.php',
        'Svg\\Gradient\\Stop' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Gradient/Stop.php',
        'Svg\\Style' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Style.php',
        'Svg\\Surface\\CPdf' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Surface/CPdf.php',
        'Svg\\Surface\\SurfaceCpdf' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Surface/SurfaceCpdf.php',
        'Svg\\Surface\\SurfaceInterface' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Surface/SurfaceInterface.php',
        'Svg\\Surface\\SurfacePDFLib' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Surface/SurfacePDFLib.php',
        'Svg\\Tag\\AbstractTag' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/AbstractTag.php',
        'Svg\\Tag\\Anchor' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Anchor.php',
        'Svg\\Tag\\Circle' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Circle.php',
        'Svg\\Tag\\ClipPath' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/ClipPath.php',
        'Svg\\Tag\\Ellipse' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Ellipse.php',
        'Svg\\Tag\\Group' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Group.php',
        'Svg\\Tag\\Image' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Image.php',
        'Svg\\Tag\\Line' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Line.php',
        'Svg\\Tag\\LinearGradient' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/LinearGradient.php',
        'Svg\\Tag\\Path' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Path.php',
        'Svg\\Tag\\Polygon' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Polygon.php',
        'Svg\\Tag\\Polyline' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Polyline.php',
        'Svg\\Tag\\RadialGradient' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/RadialGradient.php',
        'Svg\\Tag\\Rect' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Rect.php',
        'Svg\\Tag\\Shape' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Shape.php',
        'Svg\\Tag\\Stop' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Stop.php',
        'Svg\\Tag\\StyleTag' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/StyleTag.php',
        'Svg\\Tag\\Text' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Text.php',
        'Svg\\Tag\\UseTag' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/UseTag.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8cb35c0c5c6a1d1abe8967cb5626ee52::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8cb35c0c5c6a1d1abe8967cb5626ee52::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8cb35c0c5c6a1d1abe8967cb5626ee52::$classMap;

        }, null, ClassLoader::class);
    }
}
