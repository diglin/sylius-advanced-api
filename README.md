## Diglin Sylius Advanced Api

This Sylius Bundle is required to be used together with the OroCRM Integration, however you can use it for other purposes for your Sylius project.

This Sylius Bundle is more permissive regarding the data available through the API allowing for some cases to have a more performant behavior. 

For example, by default, when getting channels through `GET /channels`, you don't get all the details you may need for the returned channels list. This bundle allows to get more data when getting this list.

If you still wish to restrict the retrieving of some data, please keep the followings entity properties available for OroCRM to make it works correctly:

### Channel
- id (integer)
- code (string)
- name (string)
- enabled (boolean)

- createdAt (datetime)
- updatedAt (datetime)

### Customer
- id (integer)
- email (string)
- firstName (string)
- lastName (string)
- gender (string)
- group (array)
- phoneNumber (string)
- subscribedToNewsletter boolean

- createdAt (datetime)
- updatedAt (datetime)

### Order
- id (integer)
- items (array)
- itemsTotal (integer)
- customer (array)
- payments (array)
- shipments (array)
- adjustments (array)
- adjustmentsTotal (integer)
- total (integer)
- shippingAddress (array)
- billingAddress (array)
- currencyCode (string)

- number (string)
- state (string)
- checkoutCompletedAt (datetime)
- createdAt (datetime)
- updatedAt (datetime)
- channel (array)
- localeCode (string)
- checkoutState (string)

### OrderItem
- id (integer)
- quantity (integer)
- unitPrice (integer)
- total (integer)
- unitsTotal (integer)
- adjusmtents (array)
- adjusmtentsTotal (integer)
- variant (array)

- createdAt (datetime)
- updatedAt (datetime)
- productName (string)

### Payments
- id (integer)
- amount (integer)
- state (string)
- method (array)
- currencyCode (string)

### Shipments
- id (integer)
- state (string)
- method (array)

### Adjustment
- id (integer)
- type (string)
- label (string)
- amount (string)

### Address
- id (integer)
- firstName (string)
- lastName (string)
- phoneNumber (string)
- countryCode (string)
- street (string)
- city (string)
- postcode (string)

## Installation

`composer require diglin/sylius-advanced-api:^1.0`

## Configuration

Add the following into the `config/packages/_sylius.yml`

```yaml
imports:
    ...
    - { resource: "@DiglinSyliusAdvancedApiPlugin/Resources/config/app/config.yml" }
```

Then clear the sylius cache with the command:
`php bin/console -e prod cache:clear`

## Knows issues

- If you customized yourself the API and mainly the core API of Sylius, you may have a conflict

## License

See [LICENSE.txt](./LICENSE.txt)

## Author

* Diglin GmbH
* https://www.diglin.com/
* [@diglin_](https://twitter.com/diglin_)
* [Follow us on github!](https://github.com/diglin)
