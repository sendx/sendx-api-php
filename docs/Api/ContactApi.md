# Swagger\Client\ContactApi

All URIs are relative to *http://127.0.0.1:8080/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contactContactIdDelete**](ContactApi.md#contactContactIdDelete) | **DELETE** /contact/{contactId} | Deletes a contact
[**contactContactIdGet**](ContactApi.md#contactContactIdGet) | **GET** /contact/{contactId} | Find contact by ID
[**contactContactIdPut**](ContactApi.md#contactContactIdPut) | **PUT** /contact/{contactId} | Update a contact by ID
[**contactGet**](ContactApi.md#contactGet) | **GET** /contact | Get information about all contacts
[**contactPost**](ContactApi.md#contactPost) | **POST** /contact | Add a new contact


# **contactContactIdDelete**
> contactContactIdDelete($api_key, $contact_id)

Deletes a contact



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactApi();
$api_key = "api_key_example"; // string | 
$contact_id = 789; // int | Contact ID to delete

try {
    $api_instance->contactContactIdDelete($api_key, $contact_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->contactContactIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **contact_id** | **int**| Contact ID to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactContactIdGet**
> \Swagger\Client\Model\Contact contactContactIdGet($api_key, $contact_id)

Find contact by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactApi();
$api_key = "api_key_example"; // string | 
$contact_id = 789; // int | ID of contact that needs to be fetched

try {
    $result = $api_instance->contactContactIdGet($api_key, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->contactContactIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **contact_id** | **int**| ID of contact that needs to be fetched |

### Return type

[**\Swagger\Client\Model\Contact**](../Model/Contact.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactContactIdPut**
> \Swagger\Client\Model\InlineResponse2002 contactContactIdPut($api_key, $contact_id, $body)

Update a contact by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactApi();
$api_key = "api_key_example"; // string | 
$contact_id = 789; // int | ID of contact that needs to be updated
$body = new \Swagger\Client\Model\ContactAddUpdate(); // \Swagger\Client\Model\ContactAddUpdate | Contact object that needs to be added

try {
    $result = $api_instance->contactContactIdPut($api_key, $contact_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->contactContactIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **contact_id** | **int**| ID of contact that needs to be updated |
 **body** | [**\Swagger\Client\Model\ContactAddUpdate**](../Model/\Swagger\Client\Model\ContactAddUpdate.md)| Contact object that needs to be added |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactGet**
> \Swagger\Client\Model\InlineResponse2003 contactGet($api_key, $limit, $offset)

Get information about all contacts



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactApi();
$api_key = "api_key_example"; // string | 
$limit = 56; // int | Maximum number of contacts to be returned. Note that limit maximum value is 100 and default value is 10.
$offset = 56; // int | Offset from where we contacts should be retrieved. Default value is 0.

try {
    $result = $api_instance->contactGet($api_key, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->contactGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **limit** | **int**| Maximum number of contacts to be returned. Note that limit maximum value is 100 and default value is 10. | [optional]
 **offset** | **int**| Offset from where we contacts should be retrieved. Default value is 0. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactPost**
> \Swagger\Client\Model\InlineResponse2004 contactPost($api_key, $body)

Add a new contact



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactApi();
$api_key = "api_key_example"; // string | 
$body = new \Swagger\Client\Model\ContactAddUpdate(); // \Swagger\Client\Model\ContactAddUpdate | Contact object that needs to be added

try {
    $result = $api_instance->contactPost($api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->contactPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **body** | [**\Swagger\Client\Model\ContactAddUpdate**](../Model/\Swagger\Client\Model\ContactAddUpdate.md)| Contact object that needs to be added |

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

