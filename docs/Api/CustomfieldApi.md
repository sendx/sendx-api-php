# Swagger\Client\CustomfieldApi

All URIs are relative to *http://api.sendx.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customfieldCustomfieldIdGet**](CustomfieldApi.md#customfieldCustomfieldIdGet) | **GET** /customfield/{customfieldId} | Find customfield by ID
[**customfieldGet**](CustomfieldApi.md#customfieldGet) | **GET** /customfield | Get information about all customfield
[**customfieldPost**](CustomfieldApi.md#customfieldPost) | **POST** /customfield | Add a new Customfield


# **customfieldCustomfieldIdGet**
> \Swagger\Client\Model\Customfield customfieldCustomfieldIdGet($api_key, $customfield_id)

Find customfield by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomfieldApi();
$api_key = "api_key_example"; // string | 
$customfield_id = 789; // int | ID of customfield that needs to be fetched

try {
    $result = $api_instance->customfieldCustomfieldIdGet($api_key, $customfield_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomfieldApi->customfieldCustomfieldIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **customfield_id** | **int**| ID of customfield that needs to be fetched |

### Return type

[**\Swagger\Client\Model\Customfield**](../Model/Customfield.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customfieldGet**
> \Swagger\Client\Model\InlineResponse2006 customfieldGet($api_key)

Get information about all customfield



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomfieldApi();
$api_key = "api_key_example"; // string | 

try {
    $result = $api_instance->customfieldGet($api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomfieldApi->customfieldGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customfieldPost**
> \Swagger\Client\Model\InlineResponse2007 customfieldPost($api_key, $body)

Add a new Customfield



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomfieldApi();
$api_key = "api_key_example"; // string | 
$body = new \Swagger\Client\Model\CustomfieldAddUpdate(); // \Swagger\Client\Model\CustomfieldAddUpdate | Customfield object that needs to be added

try {
    $result = $api_instance->customfieldPost($api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomfieldApi->customfieldPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **body** | [**\Swagger\Client\Model\CustomfieldAddUpdate**](../Model/\Swagger\Client\Model\CustomfieldAddUpdate.md)| Customfield object that needs to be added |

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

