# License Api
 
 # Requirements
 
Install [PHPunit](https://phpunit.de/) on your machine

Clone this repository smoewhere on your machine

# Test
From the terminal, enter the repository directory:

 `$ cd LicenseApi-php/`

Then run tests with this command:

 `$ phpunit LicenseApiTest.php`

# Description

The LicenseApi file includes simple methods:

`getCustomer()` → get a customer dataset from DB by id_customer

`buyLicense()` → buy a new License for this customer (here you have to run the “buying routines” such as querying the db to retrieve the License dataset, Payments, and all is needed to the platform in order to notify that a new license is bought)

`updateCustomer()` → update the customer dataset into db (new license_id and license_exp_datetime is attached at the customer dataset)
