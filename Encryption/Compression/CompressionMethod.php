<?php

declare(strict_types=1);

namespace Jose\Component\Encryption\Compression;

/**
 * @deprecated This class is deprecated and will be removed in v4.0. Compression is not recommended for JWE.
 */
interface CompressionMethod
{
    /**
     * Returns the name of the method.
     */
    public function name(): string;

    /**
     * Compress the data. Throws an exception in case of failure.
     *
     * @param string $data The data to compress
     */
    public function compress(string $data): string;

    /**
     * Uncompress the data. Throws an exception in case of failure.
     *
     * @param string $data The data to uncompress
     */
    public function uncompress(string $data): string;
}
