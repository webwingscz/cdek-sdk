<?php
/**
 * This code is licensed under the MIT License.
 *
 * Copyright (c) 2018 Appwilio (http://appwilio.com), greabock (https://github.com/greabock), JhaoDa (https://github.com/jhaoda)
 * Copyright (c) 2018 Alexey Kopytko <alexey@kopytko.com> and contributors
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
 */

declare(strict_types=1);

namespace CdekSDK\Common;

use JMS\Serializer\Annotation as JMS;

/**
 * График работы на неделю.
 *
 * Пример данных:
 *
 * <WorkTimeY day="1" periods="10:00/19:00"/>
 */
final class WorkTime
{
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("int")
     *
     * @var int
     */
    private $day;

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("string")
     *
     * @var string
     */
    private $periods;

    /**
     * Порядковый номер дня начиная с единицы. Понедельник = 1, воскресенье = 7.
     *
     * @return int
     */
    public function getDay(): int
    {
        return $this->day;
    }

    /**
     * Период работы в этот день.
     *
     * @return string
     */
    public function getPeriods(): string
    {
        return $this->periods;
    }
}
