<?php

/**
 * Created by PhpStorm.
 * User: dbullard
 * Date: 7/19/16
 * Time: 11:25 AM
 */
class Default_DatacenterControllerTest extends BaseTestCase
{
    /**
     * Prepares the environment before running a test.
     */
    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    /**
     * Cleans up the environment after running a test.
     */
    public function tearDown()
    {
        parent::tearDown(); // TODO: Change the autogenerated stub
    }

    public function testIndexAction()
    {
        $this->dispatch(('/charlotte/datacenter'));
        try {

            $this->assertController('datacenter');
            $this->assertAction('index');
            $this->assertModule('default');
            $this->assertResponseCode(200);

        } catch (PHPUnit_Framework_AssertionFailedError $ae) {

            $this->dumpDispatchException($this->getRequest());

            // Rethrow tehe PHPUnit error
            throw $ae;
        }
    }

//    public function testCompaniesAction()
//    {
//        $this->dispatch('/charlotte/datacenter/companies');
//        try {
//
//            $this->assertController('datacenter');
//            $this->assertAction('companies');
//            $this->assertModule('default');
//            $this->assertResponseCode(200);
//
//        } catch (PHPUnit_Framework_AssertionFailedError $ae) {
//
//            $this->dumpDispatchException($this->getRequest());
//
//            // Rethrow tehe PHPUnit error
//            throw $ae;
//        }
//    }
//
//    public function testChannelAction()
//    {
//        $this->dispatch('/atlanta/datacenter/companies/banking-and-financial-services/b');
//        try {
//
//            $this->assertController('datacenter');
//            $this->assertAction('channel');
//            $this->assertModule('default');
//            $this->assertResponseCode(200);
//
//        } catch (PHPUnit_Framework_AssertionFailedError $ae) {
//
//            $this->dumpDispatchException($this->getRequest());
//
//            // Rethrow tehe PHPUnit error
//            throw $ae;
//        }
//    }
//
//    public function testProfileAction()
//    {
//        $this->dispatch('/atlanta/datacenter/companies/profile/3258642');
//        try {
//
//            $this->assertController('datacenter');
//            $this->assertAction('profile');
//            $this->assertModule('default');
//            $this->assertResponseCode(200);
//
//        } catch (PHPUnit_Framework_AssertionFailedError $ae) {
//
//            $this->dumpDispatchException($this->getRequest());
//
//            // Rethrow tehe PHPUnit error
//            throw $ae;
//        }
//    }
//
//    public function testDatasetAction()
//    {
//        $this->dispatch('/charlotte/datacenter/companies/assets/directory/test/26');
//        try {
//
//            $this->assertController('datacenter');
//            $this->assertAction('dataset');
//            $this->assertModule('default');
//            $this->assertResponseCode(200);
//
//        } catch (PHPUnit_Framework_AssertionFailedError $ae) {
//
//            $this->dumpDispatchException($this->getRequest());
//
//            // Rethrow tehe PHPUnit error
//            throw $ae;
//        }
//
//        $this->assertNotEmpty($this->dataset);
//        $this->assertNotEmpty($this->featured);
//       // $this->assertTrue(is_array($this->dataset['entries']);
//    }

}
