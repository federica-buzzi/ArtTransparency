<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use League\Csv\Reader;
use App\Entity\UserJob;

class ImporterCSVFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $csv = Reader::createFromPath('%kernel.root_dir%/../src/DataFixtures/csv/art-transparency-data.csv');
        $csv->setHeaderOffset(0);
        $header = $csv->getHeader(); //returns the CSV header record
        $records = $csv->getRecords();
        foreach ($records as $record) {
            $record['role'] = (string)$record['role'];
            $record['startingSalary'] = (float)$record['startingSalary'];
            $record['contractStartingSalary'] = (string)$record['contractStartingSalary'];
            $record['yearStartingSalary'] = (int)$record['yearStartingSalary'];
            $record['endingSalary'] = (float)$record['endingSalary'];
            $record['contractEndingSalary'] = (string)$record['contractEndingSalary'];
            $record['yearEndingSalary'] = (int)$record['yearEndingSalary'];
            $record['typeContract'] = (string)$record['typeContract'];
            $record['yearsExperience'] = (int)$record['yearsExperience'];
            $record['gender'] = (string)$record['gender'];
            $record['ethnicity'] = (string)$record['ethnicity'];
            $record['degreesRequired'] = (string)$record['degreesRequired'];

            $obj = new UserJob($record);
            $manager->persist($obj);
        }

        $manager->flush();
    }
}
