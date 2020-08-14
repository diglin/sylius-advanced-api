## Diglin Sylius Advanced Api

This Sylius Bundle is required to be used together with the OroCRM Integration, however you can use it for other purposes for your Sylius project.

This Sylius Bundle is more permissive regarding the data available through the API allowing for some cases to have a more performant behavior. 

For example, by default, when getting channels through `GET /channels`, you don't get all the details you may need for the returned channels list. This bundle allows to get more data when getting this list.

If you still wish to restrict the retrieving of some data, please keep the followings entity properties available for OroCRM to make it works correctly:

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

### Channel 
- id
- code
- name
- enabled

- createdAt
- updatedAt

### Customer
- id
- email
- firstName
- lastName
- gender
- group
- phoneNumber
- subscribedToNewsletter

- createdAt
- updatedAt

### Order
- id 
- items
- itemsTotal
- customer
- payments
- shipments
- adjustments
- adjustmentsTotal
- total
- shippingAddress
- billingAddress
- currencyCode

- number
- state
- checkoutCompletedAt
- createdAt
- updatedAt

### OrderItem
- id 
- quantity
- unitPrice
- total
- unitsTotal
- adjusmtents
- adjusmtentsTotal
- variant

- createdAt
- updatedAt
- productName

### Payments
- id
- amount
- state
- method
- currencyCode

### Shipments
- id
- state
- method

### Adjustment
- id
- type
- label
- amount

### Address
- id
- firstName
- lastName
- phoneNumber
- countryCode
- street
- city
- postcode

## License

See [LICENSE.txt](./LICENSE.txt)

## Author

* Diglin GmbH
* https://www.diglin.com/
* [@diglin_](https://twitter.com/diglin_)
* [Follow us on github!](https://github.com/diglin)
