## Magento Newsletter API Implementation -- `McFadyen_NewsletterApi`

### Main Functionalities

McFadyen_NewsletterApi provides the API implemeneation for the Magento Newsletter.

###Version Dependency

* PHP : > 7.2
* Magento : >= 2.3.6
* Magento_Newsletter

### How To Use This Module
 * Install this module by copying everything to NewsletterApi Under McFadyen venod name.

 #### API endpoints and sample request response

 * To get subscription status of a customer:
  GET /V1/newsletter/subscriptions/mine
  Authorisation: Customer token
  ` Response: 200 OK
    {
    "id": 1,
    "email": "rraveendran@mcfadyen.com",
    "status": 1
    }
  status : 1 --> SUBSCRIBED, 2 --> NOT_ACTIVE , 3 --> UNSUBSCRIBED , 4 --> UNCONFIRMED `

* To subscribe a customer:
POST /V1/newsletter/subscriptions/mine
Authorisation: Customer token
Response: 200 OK
  {
    "success": true,
    "message": "Thank you for your subscription."
  }

* To unsubscribe a customer:
DELETE /V1/newsletter/subscriptions/mine
Authorisation: Customer token
Response: 200 OK
  {
    "success": true,
    "message": "You have been unsubscribed from the newsletter."
  }

* To subscribe a guest user with email:
POST /V1/newsletter/guest-subscriptions
Authorisation : None
Request Body:
  {
    'email':'email_address'
  }
Response: 200 OK
  {
    "success": true,
    "message": "Thank you for your subscription.."
  }


### Project

MiMercado ( Ztech )

#### @author
* [Rojin R G](mailto:rrojin@mcfadyen.com?subject=Newsletter)
