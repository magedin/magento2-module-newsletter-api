# Newsletter API for Magento 2 by MagedIn Technology

## Overview

The `MagedIn_NewsletterApi` module extends Magento 2's capabilities by providing a comprehensive API for managing newsletter subscriptions. This module allows developers to easily integrate and manage newsletter functionalities through a robust and secure API.

## Features

- Subscribe and unsubscribe users to newsletters
- Retrieve subscriber information
- Manage subscription statuses
- Secure and easy-to-use endpoints

## Installation

### Prerequisites

- Magento 2.3.x, 2.4.x
- Composer

## Usage of New API Endpoints

### Using Customer Token

- **Get Self Subscription Status**
    - **Endpoint**: GET `/V1/newsletter/subscription/mine`

- **Subscribe Self**
    - **Endpoint**: POST `/V1/newsletter/subscription/mine`

- **Unsubscribe Self**
    - **Endpoint**: DELETE `/V1/newsletter/subscription/mine`

### No Token Needed

- **Guest-Subscribe by Email**
    - **Endpoint**: POST `/V1/newsletter/guest-subscription`
    - **Payload**:
      ```json
      {
        "email": "Kenna.McClure85@hotmail.com",
        "store_id": 1
      }
      ```

- **Guest Unsubscribe by Email**
    - **Endpoint**: POST `/V1/newsletter/guest-subscription/delete`
    - **Payload**:
      ```json
      {
        "email": "Kenna.McClure85@hotmail.com",
        "store_id": 1
      }
      ```

### Using Admin Token

- **Get Subscription Status**
    - **Endpoint**: GET `/V1/newsletter/subscription/:customer_id`

- **Subscribe**
    - **Endpoint**: POST `/V1/newsletter/subscription`
    - **Payload**:
      ```json
      {
        "customer_id": 1,
        "store_id": 1
      }
      ```

- **Unsubscribe**
    - **Endpoint**: POST `/V1/newsletter/subscription/delete`
    - **Payload**:
      ```json
      {
        "customer_id": 1,
        "store_id": 1
      }
      ```


## Support

For any issues or questions, please contact our support team:

- Email: support@magedin.com


## Contributing

We welcome contributions to improve this module. Please submit your pull requests to the develop branch.

## Acknowledgments

Thank you for using Newsletter API for Magento 2 by MagedIn Technology. Your feedback and support are greatly appreciated.
