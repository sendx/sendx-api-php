SendX REST API has two methods:

* [Identify](#identify_api)
* [Track](#track_api)

## <a name="identify_api"></a> Identify API Method

Identify API Method is used to attach data to a visitor. If a contact is not yet created then we will create the contact. In case contact already exists then we update it.

**Example Request:**

> 
    {
      email: "john.doe@gmail.com",  
      firstName: "John",
      lastName: "Doe",
      birthday: "1989-03-03",
      customFields: { "Designation": "Software Engineer", "Age": "27", "Experience": "5"},  
      tags: ["Developer", "API Team"],  
     }


Note that tags are an array of strings. In case they don't exist previously then API will create them and associate them with the contact.

Similarly if a custom field doesn't exist then it is first created and then associated with the contact along-with the corresponding value. In case custom field exists already then we simply update the value of it for the aforementioned contact.

We don't delete any of the properties based on identify call. What this means is that if for the same contact you did two API calls like:


**API Call A**
 
> 
    {
       email: "john.doe@gmail.com", 
       firstName: "John",
       birthday: "1989-03-03",
       customFields: { "Designation": "Software Engineer"},  
       tags: ["Developer"],  
    }


**API Call B**

> 
    {  
      email: "john.doe@gmail.com",  
      customFields: { "Age": "29"},  
      tags: ["API Team"],  
    }


The the final contact will have firstName as **John**, birthday as **1989-03-03** present. Also both tags **Developer** and **API Team** shall be present alongwith custom fields **Designation** and **Age**.


**Properties:**

* **firstName**: type string
* **lastName**: type string
* **email**: type string  
* **company**: type string  
* **birthday**: type string with format **YYYY-MM-DD** eg: 2016-11-21  
* **customFields**: type map[string]string   
* **tags**: type array of string 


**Response:**

> 
    {
      "status": "200",
      "message": "OK",
      "data": {
        "encryptedTeamId": "CLdh9Ig5GLIN1u8gTRvoja",
        "encryptedId": "c9QF63nrBenCaAXe660byz",
        "tags": [
          "API Team",
          "Tech"
        ],
        "firstName": "John",
        "lastName": "Doe",
        "email": "john.doe@gmail.com",
        "company": "",
        "birthday": "1989-03-03",
        "customFields": {
          "Age": "29",
          "Designation": "Software Engineer"
        }
      }
    }


## <a name="track_api"></a> Track API Method


Track API Method is used to associate **tags** with a contact. You can have automation rules based on tag addition and they will get executed. For eg:

* **On user registration** tag start onboarding drip for him / her.
* **Account Upgrade** tag start add user to paid user list and start account expansion drip. 

**Response:**

>
   {
    "status": "200",
    "message": "OK",
    "data": "success"
   }

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v1
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP ^5.6 || ^7.4 (doesn't support php v8.0)

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "vcs",
      "url":  "git@github.com:sendx/sendx-api-php.git"
    }
  ],
  
  "require": {
    "sendx/sendx-api-php": "dev-master"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactApi();
$api_key = "api_key_example"; // string | 
$team_id = "team_id_example"; // string | 
$body = new \Swagger\Client\Model\Contact(); // \Swagger\Client\Model\Contact | Contact details

try {
    $result = $api_instance->contactIdentifyPost($api_key, $team_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->contactIdentifyPost: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://app.sendx.io/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ContactApi* | [**contactIdentifyPost**](docs/Api/ContactApi.md#contactidentifypost) | **POST** /contact/identify | Identify a contact as user
*ContactApi* | [**contactTrackPost**](docs/Api/ContactApi.md#contacttrackpost) | **POST** /contact/track | Add tracking info using tags to a contact


## Documentation For Models

 - [Contact](docs/Model/Contact.md)
 - [ContactResponse](docs/Model/ContactResponse.md)
 - [TrackResponse](docs/Model/TrackResponse.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author