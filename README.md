## DiglinSyliusAdvancedApi

This Bundle is required to be used together with OroCRM, however you can use it for other purposes.

This Sylius Bundle is more permissive regarding the data available through the API allowing for some cases to have a more performant behavior. 

For example, by default, when getting channels through `GET /channels`, you don't get all the details you may need for the returned channels list. This bundle allows to get more data when getting this list.

If you still wish to restrict the retrieving of some data, please keep the followings entity properties available for OroCRM to make it works correctly:

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
