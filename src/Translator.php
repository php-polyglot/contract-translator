<?php

declare(strict_types=1);

namespace Polyglot\Contract\Translator;

interface Translator
{
    /**
     * @param string|null $id
     * @param string|null $domain
     * @param string|null $locale
     * @return void
     */
    public function need(?string $id, string $domain = null, string $locale = null): void;

    /**
     * @param string|null $id
     * @param array $parameters
     * @param string|null $domain
     * @param string|null $locale
     * @return string
     */
    public function trans(?string $id, array $parameters = [], string $domain = null, string $locale = null): string;

    /**
     * @return void
     */
    public function flush(): void;
}
