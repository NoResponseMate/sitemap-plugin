<?php

declare(strict_types=1);

namespace SitemapPlugin\Model;

interface SitemapImageUrlInterface
{
    public function getLocation(): string;

    public function setLocation(string $localization): void;

    public function getTitle(): ?string;

    public function setTitle(string $title): void;

    public function getCaption(): ?string;

    public function setCaption(string $caption): void;

    public function getGeoLocation(): ?string;

    public function setGeoLocation(string $geoLocation): void;

    public function getLicense(): ?string;

    public function setLicense(string $license): void;
}
