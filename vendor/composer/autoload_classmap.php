<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'BTSDK\\APIClient' => $baseDir . '/src/APIClient.php',
    'BTSDK\\Collections\\BaseCollection' => $baseDir . '/src/Collections/BaseCollection.php',
    'BTSDK\\Connections\\BaseServerConnection' => $baseDir . '/src/Connections/BaseServerConnection.php',
    'BTSDK\\Connections\\FakeServerConnection' => $baseDir . '/src/Connections/FakeServerConnection.php',
    'BTSDK\\Connections\\GuzzleServerConnection' => $baseDir . '/src/Connections/GuzzleServerConnection.php',
    'BTSDK\\Credentials\\BaseCredential' => $baseDir . '/src/Credentials/BaseCredential.php',
    'BTSDK\\Credentials\\TokenCredential' => $baseDir . '/src/Credentials/TokenCredential.php',
    'BTSDK\\Exceptions\\BaseException' => $baseDir . '/src/Exceptions/BaseException.php',
    'BTSDK\\Exceptions\\ClientException' => $baseDir . '/src/Exceptions/ClientException.php',
    'BTSDK\\Exceptions\\CredentialError' => $baseDir . '/src/Exceptions/CredentialError.php',
    'BTSDK\\Exceptions\\InvalidParameterException' => $baseDir . '/src/Exceptions/InvalidParameterException.php',
    'BTSDK\\Exceptions\\NetworkException' => $baseDir . '/src/Exceptions/NetworkException.php',
    'BTSDK\\Exceptions\\NotImplementedException' => $baseDir . '/src/Exceptions/NotImplementedException.php',
    'BTSDK\\Exceptions\\NotSupportException' => $baseDir . '/src/Exceptions/NotSupportException.php',
    'BTSDK\\Exceptions\\ParameterRequiredException' => $baseDir . '/src/Exceptions/ParameterRequiredException.php',
    'BTSDK\\Exceptions\\ResponseDecodeException' => $baseDir . '/src/Exceptions/ResponseDecodeException.php',
    'BTSDK\\Exceptions\\ServerException' => $baseDir . '/src/Exceptions/ServerException.php',
    'BTSDK\\Interfaces\\Credential' => $baseDir . '/src/Interfaces/Credential.php',
    'BTSDK\\Interfaces\\Model' => $baseDir . '/src/Interfaces/Model.php',
    'BTSDK\\Interfaces\\Operation' => $baseDir . '/src/Interfaces/Operation.php',
    'BTSDK\\Interfaces\\OperationResult' => $baseDir . '/src/Interfaces/OperationResult.php',
    'BTSDK\\Interfaces\\ServerConnection' => $baseDir . '/src/Interfaces/ServerConnection.php',
    'BTSDK\\OperationResults\\BaseOperationResult' => $baseDir . '/src/OperationResults/BaseOperationResult.php',
    'BTSDK\\Operations\\AddSiteOperation' => $baseDir . '/src/Operations/AddSiteOperation.php',
    'BTSDK\\Operations\\BaseOperation' => $baseDir . '/src/Operations/BaseOperation.php',
    'BTSDK\\Operations\\GetSystemTotalOperation' => $baseDir . '/src/Operations/GetSystemTotalOperation.php',
    'BTSDK\\Traits\\OperationUtils' => $baseDir . '/src/Traits/OperationUtils.php',
    'BTSDK\\Transmissions\\APIRequest' => $baseDir . '/src/Transmissions/APIRequest.php',
    'BTSDK\\Transmissions\\APIResponse' => $baseDir . '/src/Transmissions/APIResponse.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'GuzzleHttp\\Client' => $vendorDir . '/guzzlehttp/guzzle/src/Client.php',
    'GuzzleHttp\\ClientInterface' => $vendorDir . '/guzzlehttp/guzzle/src/ClientInterface.php',
    'GuzzleHttp\\Cookie\\CookieJar' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
    'GuzzleHttp\\Cookie\\CookieJarInterface' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
    'GuzzleHttp\\Cookie\\FileCookieJar' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
    'GuzzleHttp\\Cookie\\SessionCookieJar' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
    'GuzzleHttp\\Cookie\\SetCookie' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
    'GuzzleHttp\\Exception\\BadResponseException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
    'GuzzleHttp\\Exception\\ClientException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
    'GuzzleHttp\\Exception\\ConnectException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
    'GuzzleHttp\\Exception\\GuzzleException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/GuzzleException.php',
    'GuzzleHttp\\Exception\\InvalidArgumentException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/InvalidArgumentException.php',
    'GuzzleHttp\\Exception\\RequestException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
    'GuzzleHttp\\Exception\\SeekException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/SeekException.php',
    'GuzzleHttp\\Exception\\ServerException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
    'GuzzleHttp\\Exception\\TooManyRedirectsException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
    'GuzzleHttp\\Exception\\TransferException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
    'GuzzleHttp\\HandlerStack' => $vendorDir . '/guzzlehttp/guzzle/src/HandlerStack.php',
    'GuzzleHttp\\Handler\\CurlFactory' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlFactory.php',
    'GuzzleHttp\\Handler\\CurlFactoryInterface' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php',
    'GuzzleHttp\\Handler\\CurlHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlHandler.php',
    'GuzzleHttp\\Handler\\CurlMultiHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php',
    'GuzzleHttp\\Handler\\EasyHandle' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/EasyHandle.php',
    'GuzzleHttp\\Handler\\MockHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/MockHandler.php',
    'GuzzleHttp\\Handler\\Proxy' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/Proxy.php',
    'GuzzleHttp\\Handler\\StreamHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/StreamHandler.php',
    'GuzzleHttp\\MessageFormatter' => $vendorDir . '/guzzlehttp/guzzle/src/MessageFormatter.php',
    'GuzzleHttp\\Middleware' => $vendorDir . '/guzzlehttp/guzzle/src/Middleware.php',
    'GuzzleHttp\\Pool' => $vendorDir . '/guzzlehttp/guzzle/src/Pool.php',
    'GuzzleHttp\\PrepareBodyMiddleware' => $vendorDir . '/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php',
    'GuzzleHttp\\Promise\\AggregateException' => $vendorDir . '/guzzlehttp/promises/src/AggregateException.php',
    'GuzzleHttp\\Promise\\CancellationException' => $vendorDir . '/guzzlehttp/promises/src/CancellationException.php',
    'GuzzleHttp\\Promise\\Coroutine' => $vendorDir . '/guzzlehttp/promises/src/Coroutine.php',
    'GuzzleHttp\\Promise\\Create' => $vendorDir . '/guzzlehttp/promises/src/Create.php',
    'GuzzleHttp\\Promise\\Each' => $vendorDir . '/guzzlehttp/promises/src/Each.php',
    'GuzzleHttp\\Promise\\EachPromise' => $vendorDir . '/guzzlehttp/promises/src/EachPromise.php',
    'GuzzleHttp\\Promise\\FulfilledPromise' => $vendorDir . '/guzzlehttp/promises/src/FulfilledPromise.php',
    'GuzzleHttp\\Promise\\Is' => $vendorDir . '/guzzlehttp/promises/src/Is.php',
    'GuzzleHttp\\Promise\\Promise' => $vendorDir . '/guzzlehttp/promises/src/Promise.php',
    'GuzzleHttp\\Promise\\PromiseInterface' => $vendorDir . '/guzzlehttp/promises/src/PromiseInterface.php',
    'GuzzleHttp\\Promise\\PromisorInterface' => $vendorDir . '/guzzlehttp/promises/src/PromisorInterface.php',
    'GuzzleHttp\\Promise\\RejectedPromise' => $vendorDir . '/guzzlehttp/promises/src/RejectedPromise.php',
    'GuzzleHttp\\Promise\\RejectionException' => $vendorDir . '/guzzlehttp/promises/src/RejectionException.php',
    'GuzzleHttp\\Promise\\TaskQueue' => $vendorDir . '/guzzlehttp/promises/src/TaskQueue.php',
    'GuzzleHttp\\Promise\\TaskQueueInterface' => $vendorDir . '/guzzlehttp/promises/src/TaskQueueInterface.php',
    'GuzzleHttp\\Promise\\Utils' => $vendorDir . '/guzzlehttp/promises/src/Utils.php',
    'GuzzleHttp\\Psr7\\AppendStream' => $vendorDir . '/guzzlehttp/psr7/src/AppendStream.php',
    'GuzzleHttp\\Psr7\\BufferStream' => $vendorDir . '/guzzlehttp/psr7/src/BufferStream.php',
    'GuzzleHttp\\Psr7\\CachingStream' => $vendorDir . '/guzzlehttp/psr7/src/CachingStream.php',
    'GuzzleHttp\\Psr7\\DroppingStream' => $vendorDir . '/guzzlehttp/psr7/src/DroppingStream.php',
    'GuzzleHttp\\Psr7\\FnStream' => $vendorDir . '/guzzlehttp/psr7/src/FnStream.php',
    'GuzzleHttp\\Psr7\\Header' => $vendorDir . '/guzzlehttp/psr7/src/Header.php',
    'GuzzleHttp\\Psr7\\InflateStream' => $vendorDir . '/guzzlehttp/psr7/src/InflateStream.php',
    'GuzzleHttp\\Psr7\\LazyOpenStream' => $vendorDir . '/guzzlehttp/psr7/src/LazyOpenStream.php',
    'GuzzleHttp\\Psr7\\LimitStream' => $vendorDir . '/guzzlehttp/psr7/src/LimitStream.php',
    'GuzzleHttp\\Psr7\\Message' => $vendorDir . '/guzzlehttp/psr7/src/Message.php',
    'GuzzleHttp\\Psr7\\MessageTrait' => $vendorDir . '/guzzlehttp/psr7/src/MessageTrait.php',
    'GuzzleHttp\\Psr7\\MimeType' => $vendorDir . '/guzzlehttp/psr7/src/MimeType.php',
    'GuzzleHttp\\Psr7\\MultipartStream' => $vendorDir . '/guzzlehttp/psr7/src/MultipartStream.php',
    'GuzzleHttp\\Psr7\\NoSeekStream' => $vendorDir . '/guzzlehttp/psr7/src/NoSeekStream.php',
    'GuzzleHttp\\Psr7\\PumpStream' => $vendorDir . '/guzzlehttp/psr7/src/PumpStream.php',
    'GuzzleHttp\\Psr7\\Query' => $vendorDir . '/guzzlehttp/psr7/src/Query.php',
    'GuzzleHttp\\Psr7\\Request' => $vendorDir . '/guzzlehttp/psr7/src/Request.php',
    'GuzzleHttp\\Psr7\\Response' => $vendorDir . '/guzzlehttp/psr7/src/Response.php',
    'GuzzleHttp\\Psr7\\Rfc7230' => $vendorDir . '/guzzlehttp/psr7/src/Rfc7230.php',
    'GuzzleHttp\\Psr7\\ServerRequest' => $vendorDir . '/guzzlehttp/psr7/src/ServerRequest.php',
    'GuzzleHttp\\Psr7\\Stream' => $vendorDir . '/guzzlehttp/psr7/src/Stream.php',
    'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => $vendorDir . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
    'GuzzleHttp\\Psr7\\StreamWrapper' => $vendorDir . '/guzzlehttp/psr7/src/StreamWrapper.php',
    'GuzzleHttp\\Psr7\\UploadedFile' => $vendorDir . '/guzzlehttp/psr7/src/UploadedFile.php',
    'GuzzleHttp\\Psr7\\Uri' => $vendorDir . '/guzzlehttp/psr7/src/Uri.php',
    'GuzzleHttp\\Psr7\\UriNormalizer' => $vendorDir . '/guzzlehttp/psr7/src/UriNormalizer.php',
    'GuzzleHttp\\Psr7\\UriResolver' => $vendorDir . '/guzzlehttp/psr7/src/UriResolver.php',
    'GuzzleHttp\\Psr7\\Utils' => $vendorDir . '/guzzlehttp/psr7/src/Utils.php',
    'GuzzleHttp\\RedirectMiddleware' => $vendorDir . '/guzzlehttp/guzzle/src/RedirectMiddleware.php',
    'GuzzleHttp\\RequestOptions' => $vendorDir . '/guzzlehttp/guzzle/src/RequestOptions.php',
    'GuzzleHttp\\RetryMiddleware' => $vendorDir . '/guzzlehttp/guzzle/src/RetryMiddleware.php',
    'GuzzleHttp\\TransferStats' => $vendorDir . '/guzzlehttp/guzzle/src/TransferStats.php',
    'GuzzleHttp\\UriTemplate' => $vendorDir . '/guzzlehttp/guzzle/src/UriTemplate.php',
    'GuzzleHttp\\Utils' => $vendorDir . '/guzzlehttp/guzzle/src/Utils.php',
    'Normalizer' => $vendorDir . '/symfony/polyfill-intl-normalizer/Resources/stubs/Normalizer.php',
    'Psr\\Http\\Message\\MessageInterface' => $vendorDir . '/psr/http-message/src/MessageInterface.php',
    'Psr\\Http\\Message\\RequestInterface' => $vendorDir . '/psr/http-message/src/RequestInterface.php',
    'Psr\\Http\\Message\\ResponseInterface' => $vendorDir . '/psr/http-message/src/ResponseInterface.php',
    'Psr\\Http\\Message\\ServerRequestInterface' => $vendorDir . '/psr/http-message/src/ServerRequestInterface.php',
    'Psr\\Http\\Message\\StreamInterface' => $vendorDir . '/psr/http-message/src/StreamInterface.php',
    'Psr\\Http\\Message\\UploadedFileInterface' => $vendorDir . '/psr/http-message/src/UploadedFileInterface.php',
    'Psr\\Http\\Message\\UriInterface' => $vendorDir . '/psr/http-message/src/UriInterface.php',
    'Symfony\\Polyfill\\Intl\\Idn\\Idn' => $vendorDir . '/symfony/polyfill-intl-idn/Idn.php',
    'Symfony\\Polyfill\\Intl\\Idn\\Info' => $vendorDir . '/symfony/polyfill-intl-idn/Info.php',
    'Symfony\\Polyfill\\Intl\\Idn\\Resources\\unidata\\DisallowedRanges' => $vendorDir . '/symfony/polyfill-intl-idn/Resources/unidata/DisallowedRanges.php',
    'Symfony\\Polyfill\\Intl\\Idn\\Resources\\unidata\\Regex' => $vendorDir . '/symfony/polyfill-intl-idn/Resources/unidata/Regex.php',
    'Symfony\\Polyfill\\Intl\\Normalizer\\Normalizer' => $vendorDir . '/symfony/polyfill-intl-normalizer/Normalizer.php',
    'Symfony\\Polyfill\\Php72\\Php72' => $vendorDir . '/symfony/polyfill-php72/Php72.php',
);