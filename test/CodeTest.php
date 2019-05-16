<?php
/**
 * Created by PhpStorm.
 * User: Aditya
 * Date: 5/16/2019
 * Time: 11:11 AM
 */


declare(strict_types=1);
use PHPUnit\Framework\TestCase;
final class CodeTest extends TestCase
{
    public function testCSVFileExists()
    {
        $this->assertFileExists('data/shoes.csv');
    }

    public function testrecordFactorFile()
    {
        echo file_exists('recordFactor');
    }

    public function testcsvloadFile()
    {
        echo file_exists('csvLoad');
    }

    public function testSrcDirectory()
    {
        $this->assertDirectoryExists('src');
    }

    public function testFactoryDirectory()
    {
        $this->assertDirectoryExists('Factory');
    }

    public function testfileDirectory()
    {
        $this->assertDirectoryExists('file');
    }

    public function testdbDirectory()
    {
        $this->assertDirectoryExists('db');
    }

    public function testhtmlDirectory()
    {
        $this->assertDirectoryExists('html');
    }

    public function testmodelsDicretory()
    {
        $this->assertDirectoryExists('models');
    }

    public function testtableFile()
    {
        echo file_exists('table');
    }

    public function testindexFile()
    {
        echo file_exists('index');
    }

    public function testCreateTableFile()
    {
        echo file_exists('CreateTable');
    }

    public function testSQLiteConnectionFile()
    {
        echo file_exists('SQLiteConnection');
    }
    
    public function testUploadTableFile()
    {
        echo file_exists('UploadTable');
    }

    public function testCodeFile()
    {
        echo file_exists('Code');
    }

    public function testImportTableFile()
    {
        echo file_exists('ImportTable');
    }

    public function testBootstrapFile()
    {
        echo file_exists('Bootstrap');
    }
}