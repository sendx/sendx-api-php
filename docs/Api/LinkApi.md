# Swagger\Client\LinkApi

All URIs are relative to *http://127.0.0.1:8080/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**linkGet**](LinkApi.md#linkGet) | **GET** /link | Get information about all links
[**linkLinkIdDelete**](LinkApi.md#linkLinkIdDelete) | **DELETE** /link/{linkId} | Deletes a link
[**linkLinkIdGet**](LinkApi.md#linkLinkIdGet) | **GET** /link/{linkId} | Find link by ID
[**linkLinkIdPut**](LinkApi.md#linkLinkIdPut) | **PUT** /link/{linkId} | Update a link by ID
[**linkPost**](LinkApi.md#linkPost) | **POST** /link | Add a new link


# **linkGet**
> \Swagger\Client\Model\InlineResponse2005 linkGet($api_key)

Get information about all links



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LinkApi();
$api_key = "api_key_example"; // string | 

try {
    $result = $api_instance->linkGet($api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkApi->linkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkLinkIdDelete**
> linkLinkIdDelete($api_key, $link_id)

Deletes a link



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LinkApi();
$api_key = "api_key_example"; // string | 
$link_id = 789; // int | Link ID to delete

try {
    $api_instance->linkLinkIdDelete($api_key, $link_id);
} catch (Exception $e) {
    echo 'Exception when calling LinkApi->linkLinkIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **link_id** | **int**| Link ID to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkLinkIdGet**
> \Swagger\Client\Model\Link linkLinkIdGet($api_key, $link_id)

Find link by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LinkApi();
$api_key = "api_key_example"; // string | 
$link_id = 789; // int | ID of link that needs to be fetched

try {
    $result = $api_instance->linkLinkIdGet($api_key, $link_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkApi->linkLinkIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **link_id** | **int**| ID of link that needs to be fetched |

### Return type

[**\Swagger\Client\Model\Link**](../Model/Link.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkLinkIdPut**
> \Swagger\Client\Model\InlineResponse2002 linkLinkIdPut($api_key, $link_id, $body)

Update a link by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LinkApi();
$api_key = "api_key_example"; // string | 
$link_id = 789; // int | ID of link that needs to be updated
$body = new \Swagger\Client\Model\LinkAddUpdate(); // \Swagger\Client\Model\LinkAddUpdate | Link object that needs to be added

try {
    $result = $api_instance->linkLinkIdPut($api_key, $link_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkApi->linkLinkIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **link_id** | **int**| ID of link that needs to be updated |
 **body** | [**\Swagger\Client\Model\LinkAddUpdate**](../Model/\Swagger\Client\Model\LinkAddUpdate.md)| Link object that needs to be added |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkPost**
> \Swagger\Client\Model\InlineResponse2006 linkPost($api_key, $body)

Add a new link



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LinkApi();
$api_key = "api_key_example"; // string | 
$body = new \Swagger\Client\Model\LinkAddUpdate(); // \Swagger\Client\Model\LinkAddUpdate | Link object that needs to be added

try {
    $result = $api_instance->linkPost($api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkApi->linkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **body** | [**\Swagger\Client\Model\LinkAddUpdate**](../Model/\Swagger\Client\Model\LinkAddUpdate.md)| Link object that needs to be added |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

