<?php
/*
 * This file is part of the OpxCore.
 *
 * Copyright (c) Lozovoy Vyacheslav <opxcore@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OpxCore\Config\Interfaces;

interface ConfigInterface
{
    /**
     * Load configuration.
     *
     * @param string|null $profile
     * @param string|null $overrides
     * @param bool $force
     *
     * @return  bool
     */
    public function load(?string $profile = null, ?string $overrides = null, bool $force = false): bool;

    /**
     * Determine if the given configuration value exists.
     *
     * @param string $key
     *
     * @return  bool
     */
    public function has(string $key): bool;

    /**
     * Set a given configuration value.
     *
     * @param array|string|null $key
     * @param mixed|null $value
     *
     * @return  void
     */
    public function set($key, $value = null): void;

    /**
     * Get the specified configuration value.
     *
     * @param string $key
     * @param mixed $default
     *
     * @return  mixed
     */
    public function get(string $key, $default = null);

    /**
     * Get all of the configuration items for the application.
     *
     * @return  array
     */
    public function all(): array;

    /**
     * Push a value onto an array configuration value.
     *
     * @param string $key
     * @param mixed $value
     *
     * @return  void
     */
    public function push(string $key, $value): void;
}