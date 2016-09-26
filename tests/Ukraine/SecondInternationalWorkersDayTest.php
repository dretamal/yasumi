<?php

namespace Yasumi\tests\Ukraine;

use Yasumi\Holiday;
use Yasumi\tests\YasumiTestCaseInterface;

/**
 * Class SecondInternationalWorkersDayTest
 * @package Yasumi\tests\Ukraine
 */
class SecondInternationalWorkersDayTest extends UkraineBaseTestCase implements YasumiTestCaseInterface
{
    /**
     * The name of the holiday
     */
    const HOLIDAY = 'secondInternationalWorkersDay';

    /**
     * Tests International Workers' Day.
     *
     * @dataProvider SecondInternationalWorkersDayDataProvider
     *
     * @param int $year the year for which International Workers' Day needs to be tested
     * @param \DateTime $expected the expected date
     */
    public function testSecondInternationalWorkersDay($year, $expected)
    {
        $this->assertHoliday(self::REGION, self::HOLIDAY, $year, $expected);
    }

    /**
     * Tests translated name of the holiday defined in this test.
     */
    public function testTranslation()
    {
        $this->assertTranslatedHolidayName(
            self::REGION,
            self::HOLIDAY,
            $this->generateRandomYear(),
            [self::LOCALE => 'День міжнародної солідарності трудящих']
        );
    }

    /**
     * Returns a list of random test dates used for assertion of International Workers' Day.
     *
     * @return array list of test dates for International Workers' Day
     */
    public function SecondInternationalWorkersDayDataProvider()
    {
        return $this->generateRandomDates(5, 2, self::TIMEZONE);
    }

    /**
     * Tests type of the holiday defined in this test.
     */
    public function testHolidayType()
    {
        $this->assertHolidayType(self::REGION, self::HOLIDAY, $this->generateRandomYear(), Holiday::TYPE_NATIONAL);
    }
}