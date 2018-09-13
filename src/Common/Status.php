<?php
/*
 * This code is licensed under the MIT License.
 *
 * Copyright (c) 2018 appwilio <appwilio.com>
 * Copyright (c) 2018 JhaoDa <jhaoda@gmail.com>
 * Copyright (c) 2018 greabock <greabock17@gmail.com>
 * Copyright (c) 2018 Alexey Kopytko <alexey@kopytko.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 */

declare(strict_types=1);

namespace Appwilio\CdekSDK\Common;

use JMS\Serializer\Annotation as JMS;

final class Status
{
    use Fillable;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("Date")
     * @JMS\Type("DateTimeImmutable<'Y-m-d\TH:i:sP'>")
     *
     * @var \DateTimeImmutable
     */
    protected $Date;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("Code")
     * @JMS\Type("integer")
     *
     * @var int
     */
    protected $Code;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("Description")
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $Description;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("CityCode")
     * @JMS\Type("integer")
     *
     * @var int
     */
    protected $CityCode;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("CityName")
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $CityName;

    /**
     * @JMS\XmlList(entry="State", inline=true)
     * @JMS\Type("array<Appwilio\CdekSDK\Common\State>")
     *
     * @var State[]|array
     */
    protected $states = [];

    public function getDate(): \DateTimeImmutable
    {
        return $this->Date;
    }

    public function getCode(): int
    {
        return $this->Code;
    }

    public function getDescription(): string
    {
        return $this->Description;
    }

    public function getCityCode(): int
    {
        return $this->CityCode;
    }

    public function getCityName(): string
    {
        return $this->CityName;
    }

    /**
     * @return State[]|array
     */
    public function getStates(): array
    {
        return $this->states;
    }
}
