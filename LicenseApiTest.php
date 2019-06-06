<?php

require 'LicenseApi.php';
use PHPUnit\Framework\TestCase;

class TestLicenseAPi extends TestCase {

  public function test()
  {
    $api = new LicenseApi();
    $expected_id_license = 3;
    $expected_id_customer = 1;
    //old customer data
    $old_customer = $api->getCustomer($expected_id_customer);
    //new customer data (bought the license)
    $new_customer = $old_customer;
    $new_customer['id_license'] = $expected_id_license;
    $new_customer['exp_datetime_license'] = date($api->mockedDatetime(), strtotime('+1year'));

    $expected = $new_customer;

    print_r([
      'expected'=> $expected,
      'result'=> $api->buyLicense($expected_id_customer, $expected_id_license)
    ]);

    $this->assertEquals(
      $expected,
      $api->buyLicense($expected_id_customer, $expected_id_license)
    );
  }
}
