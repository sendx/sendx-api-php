# Swagger\Client\SendApi

All URIs are relative to *http://127.0.0.1:8080/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sendEmailPost**](SendApi.md#sendEmailPost) | **POST** /send/email | Send transactional email to user


# **sendEmailPost**
> sendEmailPost($api_key, $body)

Send transactional email to user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SendApi();
$api_key = "api_key_example"; // string | 
$body = new \Swagger\Client\Model\EMessage(); // \Swagger\Client\Model\EMessage | EMessage object that needs to be added

try {
    $api_instance->sendEmailPost($api_key, $body);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendEmailPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **body** | [**\Swagger\Client\Model\EMessage**](../Model/\Swagger\Client\Model\EMessage.md)| EMessage object that needs to be added |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

