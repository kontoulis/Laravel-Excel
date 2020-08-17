<?php

include_once 'classes/CsvTestImport.php';
include_once 'classes/TestImport.php';

class CsvExcelFileTest extends TestCase {


    public function init()
    {
        $importer = app('CsvTestImport');
        $this->assertInstanceOf(\Maatwebsite\Excel\Files\ExcelFile::class, $importer);
    }


    public function testGetResultsDirectlyWithCustomDelimiterSetAsProperty()
    {
        $importer = app(TestImport::class);

        $results = $importer->get();

        $this->assertInstanceOf(\Maatwebsite\Excel\Collections\RowCollection::class, $results);
        $this->assertCount(5, $results);
    }

}
