<?php
//the script will buy a new license for a customer
//licenses are located in a separated db table and can be retrieved by id (obviously)
class LicenseApi
{
  public function mockedDatetime() {
    return '2019-12-13 09:00:00';
  }
  public function getCustomer($id_customer) {
    //retrieve the customer dataset
    //mocked DB query
    return array(
      'id' => $id_customer,
      'name' => 'Jhon',
      'password' => 'xxxx',
      'email' => 'jon@jon.com',
      'website' => 'http://test.com',
      'id_license' => 1,
      'exp_datetime_license' => $this->mockedDatetime()
    );
  }
  public function updateCustomer($customer) {
    //UPDATE the Customer dataset to db ....etc...

    //THEN return the new customer dataset
    return $customer;
  }
  public function buyLicense($id_customer, $id_license)
  {
    //Run all the "buying license" routines here (i.e: Query DB, payments, Api calls etc)....

    //THEN update the customer dataset with the new license id and exp time
    $customer = $this->getCustomer($id_customer);
    $customer['id_license'] = $id_license;
    $customer['exp_datetime_license'] = date($this->mockedDatetime(), strtotime('+1year'));

    return $this->updateCustomer($customer);
  }
}
